<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Form Konsultasi IDENTAS</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('logo/logo-kartupintar-white.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 font-body text-slate-700">
    <header class="border-b border-slate-100 bg-white">
        <div class="mx-auto flex h-20 max-w-5xl items-center justify-between px-5 sm:px-6 lg:px-8">
            <a href="{{ url('/') }}" class="flex items-center">
                <img src="{{ asset('logo/logo-kartupintar.png') }}" alt="KartuPintar" class="h-9 w-32 object-cover sm:h-10 sm:w-36">
            </a>
            <a href="{{ url('/') }}#paket" class="inline-flex items-center gap-2 px-1 py-2 text-xs font-semibold text-slate-600 transition hover:text-primary-700 sm:text-sm">
                <span aria-hidden="true">←</span>
                Kembali ke paket
            </a>
        </div>
    </header>

    <main class="py-10 sm:py-14">
        <div class="mx-auto max-w-4xl px-5 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="mt-4 font-heading text-3xl font-extrabold tracking-tight text-primary-900 sm:text-4xl">Form konsultasi sekolah</h1>
                <p class="mx-auto mt-3 max-w-xl leading-7 text-slate-500">Lengkapi data berikut agar tim IDENTAS dapat menyiapkan rekomendasi yang sesuai.</p>
            </div>

            @if (session('success'))
                <div class="mx-auto mt-8 max-w-3xl rounded-2xl border border-green-200 bg-green-50 p-5 text-sm text-green-700">{{ session('success') }}</div>
            @endif
            @if ($errors->any())
                <div class="mx-auto mt-8 max-w-3xl rounded-2xl border border-red-200 bg-red-50 p-5 text-sm text-red-700"><p class="font-semibold">Mohon periksa kembali data yang diisi.</p><ul class="mt-2 list-inside list-disc space-y-1">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
            @endif

            <form action="{{ route('consultation.store') }}" method="POST" class="mx-auto mt-8 max-w-3xl rounded-[2rem] border border-slate-200 bg-white p-6 shadow-sm sm:p-8 lg:p-10">
                @csrf
                <input type="hidden" name="paket" value="{{ old('paket', $paket) }}">

                <section>
                    <div class="flex items-start gap-4 border-b border-slate-100 pb-6">
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-amber-100 text-amber-600" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                        </span>
                        <div><h2 class="font-heading text-xl font-bold text-primary-900">Profil sekolah</h2><p class="mt-1 text-sm leading-5 text-slate-500">Data singkat untuk memahami skala institusi.</p></div>
                    </div>

                    <p class="mt-5 text-xs text-slate-500"><span class="font-semibold text-red-500">*</span> Wajib diisi</p>
                    <div class="mt-4 grid gap-5 sm:grid-cols-2">
                        <div><label for="nama_lengkap" class="text-sm font-semibold text-slate-700">Nama lengkap <span class="text-red-500" aria-hidden="true">*</span></label><input id="nama_lengkap" name="nama_lengkap" type="text" value="{{ old('nama_lengkap') }}" required placeholder="Contoh: Budi Santoso" class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none transition placeholder:text-slate-400 focus:border-primary-500 focus:ring-4 focus:ring-blue-100"></div>
                        <div><label for="jabatan" class="text-sm font-semibold text-slate-700">Jabatan <span class="text-red-500" aria-hidden="true">*</span></label><input id="jabatan" name="jabatan" type="text" value="{{ old('jabatan') }}" required placeholder="Contoh: Kepala Sekolah" class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none transition placeholder:text-slate-400 focus:border-primary-500 focus:ring-4 focus:ring-blue-100"></div>
                        <div><label for="nomor_whatsapp" class="text-sm font-semibold text-slate-700">Nomor WhatsApp <span class="text-red-500" aria-hidden="true">*</span></label><input id="nomor_whatsapp" name="nomor_whatsapp" type="tel" value="{{ old('nomor_whatsapp') }}" required inputmode="tel" placeholder="Contoh: 081234567890" class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none transition placeholder:text-slate-400 focus:border-primary-500 focus:ring-4 focus:ring-blue-100"></div>
                        <div class="sm:col-span-2"><label for="nama_sekolah" class="text-sm font-semibold text-slate-700">Nama sekolah <span class="text-red-500" aria-hidden="true">*</span></label><input id="nama_sekolah" name="nama_sekolah" type="text" value="{{ old('nama_sekolah') }}" required placeholder="Contoh: SMA Negeri 1 Cirebon" class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none transition placeholder:text-slate-400 focus:border-primary-500 focus:ring-4 focus:ring-blue-100"></div>
                        <div><label for="jumlah_siswa" class="text-sm font-semibold text-slate-700">Jumlah siswa <span class="text-red-500" aria-hidden="true">*</span></label><input id="jumlah_siswa" name="jumlah_siswa" type="number" min="1" value="{{ old('jumlah_siswa') }}" required placeholder="Contoh: 800" class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none transition placeholder:text-slate-400 focus:border-primary-500 focus:ring-4 focus:ring-blue-100"></div>
                        <div><label for="jumlah_guru" class="text-sm font-semibold text-slate-700">Jumlah guru <span class="text-red-500" aria-hidden="true">*</span></label><input id="jumlah_guru" name="jumlah_guru" type="number" min="1" value="{{ old('jumlah_guru') }}" required placeholder="Contoh: 60" class="mt-2 w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none transition placeholder:text-slate-400 focus:border-primary-500 focus:ring-4 focus:ring-blue-100"></div>
                    </div>
                </section>

                <section class="mt-10 border-t border-slate-100 pt-8">
                    <div class="flex items-start gap-4">
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-blue-50 text-primary-600" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 4l-8 4l8 4l8-4l-8-4" /><path d="M4 12l8 4l8-4" /><path d="M4 16l8 4l8-4" /></svg>
                        </span>
                        <div><h2 class="font-heading text-xl font-bold text-primary-900">Kebutuhan fitur</h2><p class="mt-1 text-sm leading-5 text-slate-500">Pilih minimal satu fitur yang ingin dibahas bersama tim IDENTAS.</p></div>
                    </div>

                    <div class="mt-6 grid gap-3 sm:grid-cols-2">
                        @foreach ($features as $index => $feature)
                            <label for="feature_{{ $index }}" class="group flex min-h-[68px] cursor-pointer items-center gap-3 rounded-2xl border border-slate-200 bg-white p-4 transition hover:-translate-y-0.5 hover:border-amber-300 hover:bg-amber-50/60">
                                <input id="feature_{{ $index }}" type="checkbox" name="kebutuhan_fitur[]" value="{{ $feature['name'] }}" @checked(in_array($feature['name'], old('kebutuhan_fitur', []))) class="peer h-5 w-5 shrink-0 cursor-pointer appearance-none rounded-md border-2 border-slate-300 bg-white transition checked:border-amber-400 checked:bg-amber-400 focus:ring-2 focus:ring-amber-200">
                                <span class="pr-5"><span class="block text-sm font-medium leading-5 text-slate-600 transition peer-checked:text-primary-900">{{ $feature['name'] }}</span><span class="mt-1 block text-xs leading-4 text-slate-400">{{ $feature['description'] }}</span></span>
                            </label>
                        @endforeach
                    </div>
                    <p class="mt-5 text-xs leading-5 text-slate-500">Pilih minimal satu fitur agar tim dapat menyiapkan pembahasan yang relevan.</p>
                </section>

                <div class="mt-9 border-t border-slate-100 pt-7 text-center"><button type="submit" class="inline-flex w-full max-w-xl items-center justify-center gap-2 rounded-xl bg-primary-700 px-6 py-4 text-sm font-semibold text-white shadow-lg shadow-blue-500/20 transition hover:bg-primary-800">Kirim permintaan konsultasi <span aria-hidden="true">→</span></button><p class="mt-3 text-xs text-slate-500">Tim IDENTAS akan menghubungi Anda untuk langkah berikutnya.</p></div>
            </form>
        </div>
    </main>
</body>

</html>
