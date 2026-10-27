@extends('layouts.app')

@section('title', 'Data Konsultasi')

@section('content')
    <main class="pt-5">
        <div class="mb-6 flex flex-col gap-2 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Data Konsultasi</h1>
                <p class="mt-1 text-sm text-gray-500">Daftar kebutuhan sekolah yang masuk dari landing page.</p>
            </div>
            <span class="inline-flex w-fit items-center rounded-full bg-amber-100 px-3 py-1.5 text-xs font-semibold text-amber-700">
                {{ $consultationRequests->total() }} pengajuan
            </span>
        </div>

        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800">
            <div class="overflow-x-auto">
                <table class="w-full min-w-[980px] text-left text-sm text-gray-600 dark:text-gray-300">
                    <thead class="bg-gray-50 text-xs uppercase tracking-wide text-gray-500 dark:bg-gray-700 dark:text-gray-300">
                        <tr>
                            <th scope="col" class="px-6 py-4">Tanggal</th>
                            <th scope="col" class="px-6 py-4">Kontak</th>
                            <th scope="col" class="px-6 py-4">Sekolah</th>
                            <th scope="col" class="px-6 py-4">Skala</th>
                            <th scope="col" class="px-6 py-4">Paket</th>
                            <th scope="col" class="px-6 py-4">Kebutuhan fitur</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 dark:divide-gray-700">
                        @forelse ($consultationRequests as $request)
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50">
                                <td class="whitespace-nowrap px-6 py-5 align-top text-xs text-gray-500">
                                    {{ $request->created_at->format('d M Y, H:i') }}
                                </td>
                                <td class="px-6 py-5 align-top">
                                    <p class="font-semibold text-gray-900 dark:text-white">{{ $request->nama_lengkap }}</p>
                                    <p class="mt-1 text-xs text-gray-500">{{ $request->jabatan }}</p>
                                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $request->nomor_whatsapp) }}" target="_blank" rel="noopener noreferrer" class="mt-2 inline-flex items-center gap-1 text-xs font-semibold text-green-600 hover:text-green-700">
                                        {{ $request->nomor_whatsapp }} <span aria-hidden="true">↗</span>
                                    </a>
                                </td>
                                <td class="px-6 py-5 align-top">
                                    <p class="font-medium text-gray-900 dark:text-white">{{ $request->nama_sekolah }}</p>
                                </td>
                                <td class="whitespace-nowrap px-6 py-5 align-top text-xs">
                                    <p>{{ number_format($request->jumlah_siswa) }} siswa</p>
                                    <p class="mt-1 text-gray-400">{{ number_format($request->jumlah_guru) }} guru</p>
                                </td>
                                <td class="px-6 py-5 align-top">
                                    <span class="inline-flex rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-700">{{ $request->paket }}</span>
                                </td>
                                <td class="max-w-sm px-6 py-5 align-top">
                                    <div class="flex flex-wrap gap-1.5">
                                        @foreach ($request->kebutuhan_fitur ?? [] as $feature)
                                            <span class="rounded-md bg-amber-50 px-2 py-1 text-xs text-amber-800">{{ $feature }}</span>
                                        @endforeach
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-16 text-center text-sm text-gray-500">Belum ada data konsultasi yang masuk.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if ($consultationRequests->hasPages())
                <div class="border-t border-gray-100 px-6 py-4 dark:border-gray-700">
                    {{ $consultationRequests->links() }}
                </div>
            @endif
        </div>
    </main>
@endsection
