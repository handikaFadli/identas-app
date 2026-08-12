<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTrialRequestRequest;
use App\Http\Requests\UpdateTrialRequestRequest;
use App\Mail\TrialApprovedMail;
use App\Models\Client;
use App\Models\ClientTrial;
use App\Models\ClientType;
use App\Models\TrialRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class TrialRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = TrialRequest::query()
            ->with([
                'clientType',
                'reviewer',
                'client',
            ]);

        if ($request->filled('search')) {

            $search = $request->search;

            $query->where(function ($q) use ($search) {

                $q->where(
                    'nama',
                    'like',
                    "%{$search}%"
                )
                    ->orWhere(
                        'email',
                        'like',
                        "%{$search}%"
                    )
                    ->orWhere(
                        'nomor_handphone',
                        'like',
                        "%{$search}%"
                    )
                    ->orWhere(
                        'nama_lembaga',
                        'like',
                        "%{$search}%"
                    )
                    ->orWhere(
                        'jenjang',
                        'like',
                        "%{$search}%"
                    );
            });
        }


        if ($request->filled('status')) {

            $query->where(
                'status',
                $request->status
            );
        }


        if ($request->filled('client_type_id')) {

            $query->where(
                'client_type_id',
                $request->client_type_id
            );
        }


        $perPage =
            (int) $request->get(
                'per_page',
                10
            );


        if (!in_array(
            $perPage,
            [10, 25, 50, 100]
        )) {

            $perPage = 10;
        }


        $trialRequests = $query
            ->latest()
            ->paginate($perPage)
            ->withQueryString();


        /*
    |--------------------------------------------------------------------------
    | Statistics
    |--------------------------------------------------------------------------
    */

        $totalTrial =
            TrialRequest::count();

        $totalPending =
            TrialRequest::where(
                'status',
                'pending'
            )->count();

        $totalApproved =
            TrialRequest::where(
                'status',
                'approved'
            )->count();

        $totalRejected =
            TrialRequest::where(
                'status',
                'rejected'
            )->count();


        return view(
            'dashboard',
            compact(
                'trialRequests',
                'totalTrial',
                'totalPending',
                'totalApproved',
                'totalRejected'
            )
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientTypes = ClientType::orderBy('nama')->get();

        return view('trial', compact('clientTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTrialRequestRequest $request)
    {
        $data = $request->validated();

        $data['status'] = 'pending';

        TrialRequest::create($data);

        return redirect()
            ->route('trial.success')
            ->with(
                'success',
                'Pengajuan uji coba berhasil dikirim. Tim IDENTAS akan melakukan peninjauan terhadap pengajuan Anda.'
            );
    }

    /**
     * Display the specified resource.
     */
    public function show(TrialRequest $trialRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TrialRequest $trialRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTrialRequestRequest $request, TrialRequest $trialRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TrialRequest $trialRequest)
    {
        //
    }

    public function success()
    {
        return view('trial-success');
    }

    public function approve(TrialRequest $trialRequest)
    {
        /*
    |--------------------------------------------------------------------------
    | Pastikan Request Masih Pending
    |--------------------------------------------------------------------------
    */

        if ($trialRequest->status !== 'pending') {

            return back()->with(
                'error',
                'Pengajuan ini sudah diproses sebelumnya.'
            );
        }


        /*
    |--------------------------------------------------------------------------
    | Pastikan Email Belum Digunakan
    |--------------------------------------------------------------------------
    */

        $emailExists = User::where(
            'email',
            $trialRequest->email
        )->exists();


        if ($emailExists) {

            return back()->with(
                'error',
                'Email PIC sudah terdaftar sebagai pengguna IDENTAS.'
            );
        }


        /*
    |--------------------------------------------------------------------------
    | Generate Temporary Password
    |--------------------------------------------------------------------------
    */

        $temporaryPassword =
            Str::password(10);


        try {

            DB::beginTransaction();


            /*
        |--------------------------------------------------------------------------
        | 1. Create Client
        |--------------------------------------------------------------------------
        */

            $client = Client::create([

                'kode' =>
                $this->generateClientCode(),

                'nama' =>
                $trialRequest->nama_lembaga,

                'email' =>
                $trialRequest->email,

                'nomor_handphone' =>
                $trialRequest->nomor_handphone,

                'nama_lembaga' =>
                $trialRequest->nama_lembaga,

                'client_type_id' =>
                $trialRequest->client_type_id,

                'jenjang' =>
                $trialRequest->jenjang,

                'jumlah_murid' =>
                $trialRequest->jumlah_murid,

                'alamat' =>
                $trialRequest->alamat,

                'status' => 'active',

            ]);


            /*
        |--------------------------------------------------------------------------
        | 2. Create Client Admin
        |--------------------------------------------------------------------------
        */

            $user = User::create([

                'client_id' =>
                $client->id,

                'name' =>
                $trialRequest->nama,

                'email' =>
                $trialRequest->email,

                'role' =>
                'client_admin',

                'password' =>
                Hash::make(
                    $temporaryPassword
                ),

                'is_active' =>
                true,

            ]);


            /*
        |--------------------------------------------------------------------------
        | 3. Create Trial 14 Days
        |--------------------------------------------------------------------------
        */

            $clientTrial =
                ClientTrial::create([

                    'client_id' =>
                    $client->id,

                    'trial_request_id' =>
                    $trialRequest->id,

                    'starts_at' =>
                    now(),

                    'ends_at' =>
                    now()->addDays(14),

                    'status' =>
                    'active',

                    'approved_by' =>
                    Auth::id(),

                ]);


            /*
        |--------------------------------------------------------------------------
        | 4. Update Trial Request
        |--------------------------------------------------------------------------
        */

            $trialRequest->update([

                'status' =>
                'approved',

                'reviewed_by' =>
                Auth::id(),

                'client_id' =>
                $client->id,

            ]);


            DB::commit();

            try {

                Mail::to(
                    $trialRequest->email
                )->send(
                    new TrialApprovedMail(
                        $trialRequest,
                        $clientTrial,
                        $temporaryPassword
                    )
                );
            } catch (\Throwable $e) {

                report($e);

                return redirect()
                    ->route('dashboard')
                    ->with(
                        'warning',
                        'Pengajuan berhasil disetujui dan akun trial berhasil dibuat, tetapi email gagal dikirim.'
                    );
            }

            return redirect()
                ->route('dashboard')
                ->with(
                    'success',
                    'Pengajuan berhasil disetujui. Client dan akun uji coba telah dibuat.'
                );
        } catch (\Throwable $e) {

            DB::rollBack();


            report($e);


            return back()->with(
                'error',
                'Terjadi kesalahan saat mengaktifkan akun uji coba.'
            );
        }
    }

    public function reject(
        Request $request,
        TrialRequest $trialRequest
    ) {

        if ($trialRequest->status !== 'pending') {
            return back()->with(
                'error',
                'Pengajuan ini sudah diproses sebelumnya.'
            );
        }

        $trialRequest->update([
            'status' => 'rejected',
            'reviewed_by' => Auth::id(),
        ]);

        return redirect()
            ->route('dashboard')
            ->with(
                'success',
                'Pengajuan uji coba berhasil ditolak.'
            );
    }

    private function generateClientCode(): string
    {
        $lastClient = Client::latest('id')->first();

        $nextNumber =
            ($lastClient?->id ?? 0) + 1;

        return 'IDN' .
            str_pad(
                $nextNumber,
                6,
                '0',
                STR_PAD_LEFT
            );
    }
}
