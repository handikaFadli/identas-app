<?php

namespace App\Http\Controllers;

use App\Models\ConsultationRequest;
use Illuminate\Http\Request;

class ConsultationRequestController extends Controller
{
    public function index()
    {
        $consultationRequests = ConsultationRequest::latest()->paginate(15);

        return view('consultations.index', compact('consultationRequests'));
    }

    public function create(Request $request)
    {
        $paket = ucfirst(strtolower((string) $request->string('paket', 'smart')));

        if (!in_array($paket, ['Standar', 'Smart', 'Premium'], true)) {
            $paket = 'Smart';
        }

        $features = [
            ['name' => 'Presensi QR', 'description' => 'Catat kehadiran dengan pemindaian QR Code.'],
            ['name' => 'Presensi RFID', 'description' => 'Presensi cepat menggunakan kartu RFID.'],
            ['name' => 'Presensi Lokasi', 'description' => 'Validasi kehadiran berdasarkan lokasi yang ditentukan.'],
            ['name' => 'Presensi Face ID', 'description' => 'Kenali kehadiran melalui teknologi pengenalan wajah.'],
            ['name' => 'Notifikasi Presensi', 'description' => 'Kirim informasi kehadiran kepada orang tua secara berkala.'],
            ['name' => 'E - PPDB', 'description' => 'Kelola proses penerimaan peserta didik secara digital.'],
            ['name' => 'E - Kantin', 'description' => 'Dukung transaksi kantin sekolah yang praktis dan tercatat.'],
            ['name' => 'E - Keuangan', 'description' => 'Pantau dan kelola administrasi keuangan sekolah.'],
            ['name' => 'AI Buat Soal', 'description' => 'Bantu guru menyusun soal pembelajaran dengan AI.'],
            ['name' => 'AI Administrasi Soal', 'description' => 'Bantu mengelola dan menyiapkan administrasi soal.'],
            ['name' => 'AI Kepala Sekolah', 'description' => 'Dapatkan insight untuk mendukung keputusan sekolah.'],
            ['name' => 'Website Sekolah', 'description' => 'Hadirkan informasi sekolah melalui website resmi.'],
        ];

        return view('consultation', compact('paket', 'features'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'paket' => ['required', 'in:Standar,Smart,Premium'],
            'nama_lengkap' => ['required', 'string', 'max:255'],
            'jabatan' => ['required', 'string', 'max:255'],
            'nomor_whatsapp' => ['required', 'string', 'max:20', 'regex:/^[0-9+()\-\s]+$/'],
            'nama_sekolah' => ['required', 'string', 'max:255'],
            'jumlah_siswa' => ['required', 'integer', 'min:1'],
            'jumlah_guru' => ['required', 'integer', 'min:1'],
            'kebutuhan_fitur' => ['required', 'array', 'min:1'],
            'kebutuhan_fitur.*' => ['string', 'max:255'],
        ], [
            'kebutuhan_fitur.required' => 'Pilih minimal satu kebutuhan fitur.',
            'kebutuhan_fitur.min' => 'Pilih minimal satu kebutuhan fitur.',
        ]);

        ConsultationRequest::create($validated);

        $featureLines = collect($validated['kebutuhan_fitur'])
            ->map(fn ($feature) => '- ' . $feature)
            ->implode("\n");

        $message = implode("\n", [
            'Halo Admin IDENTAS,',
            '',
            'Saya ingin berkonsultasi mengenai Paket ' . $validated['paket'] . '.',
            '',
            'Data sekolah:',
            'Nama: ' . $validated['nama_lengkap'],
            'Jabatan: ' . $validated['jabatan'],
            'Nomor WhatsApp: ' . $validated['nomor_whatsapp'],
            'Nama sekolah: ' . $validated['nama_sekolah'],
            'Jumlah siswa: ' . $validated['jumlah_siswa'],
            'Jumlah guru: ' . $validated['jumlah_guru'],
            '',
            'Kebutuhan fitur:',
            $featureLines,
        ]);

        return redirect()->away(
            'https://wa.me/6285117377855?text=' . urlencode($message)
        );
    }
}
