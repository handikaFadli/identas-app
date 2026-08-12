<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pendaftaran Uji Coba Gratis — IDENTAS</title>

    <meta
        name="description"
        content="Ajukan uji coba gratis IDENTAS untuk institusi Anda."
    >

    <link
        rel="icon"
        type="image/x-icon"
        href="{{ asset('logo/logo-identas-white.png') }}"
    >

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <link
        href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css"
        rel="stylesheet"
    />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        input,
        select,
        textarea {
            outline: none;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: #066ffc !important;
            box-shadow: 0 0 0 3px rgba(6, 111, 252, .10) !important;
        }
    </style>

</head>

<body class="bg-slate-50 text-slate-700">

    <!-- =========================
    HEADER
    ========================== -->
    <header class="bg-white border-b border-slate-100">

        <div
            class="
                max-w-6xl
                mx-auto
                px-5
                sm:px-6
                lg:px-8
                h-20
                flex
                items-center
                justify-between
            "
        >

            <a href="{{ url('/') }}" class="flex items-center">
                <img
                    src="{{ asset('logo/logo-2.png') }}"
                    alt="IDENTAS"
                    class="h-9 sm:h-10 w-auto"
                >
            </a>

            <a
                href="{{ url('/') }}"
                class="
                    inline-flex
                    items-center
                    gap-2
                    text-sm
                    font-semibold
                    text-slate-500
                    hover:text-primary-700
                    transition
                "
            >

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-4 h-4"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15 19l-7-7 7-7"
                    />
                </svg>

                Kembali ke Beranda

            </a>

        </div>

    </header>


    <!-- =========================
    PAGE CONTENT
    ========================== -->
    <main class="py-10 lg:py-14">

        <div class="max-w-5xl mx-auto px-5 sm:px-6 lg:px-8">

            <!-- =========================
            PAGE TITLE
            ========================== -->
            <div class="text-center">

                <div
                    class="
                        inline-flex
                        items-center
                        gap-2
                        px-4
                        py-2
                        rounded-full
                        bg-blue-50
                        text-primary-700
                        text-sm
                        font-semibold
                        mb-4
                    "
                >
                    <span
                        class="
                            w-2
                            h-2
                            rounded-full
                            bg-primary-500
                        "
                    ></span>

                    Gratis 14 Hari
                </div>

                <h1
                    class="
                        text-2xl
                        sm:text-3xl
                        lg:text-4xl
                        font-extrabold
                        tracking-tight
                        text-primary-900
                    "
                >
                    Pendaftaran Uji Coba Gratis
                </h1>

                <p
                    class="
                        mt-3
                        text-sm
                        sm:text-base
                        text-slate-500
                    "
                >
                    Lengkapi data di bawah ini untuk mengajukan
                    akun uji coba IDENTAS selama 14 hari.
                </p>

            </div>


            <!-- =========================
            BENEFIT BOX
            ========================== -->
            <div
                class="
                    mt-8
                    rounded-2xl
                    border
                    border-green-200
                    bg-gradient-to-r
                    from-green-50
                    to-blue-50
                    p-5
                    sm:p-6
                "
            >

                <div class="flex items-start gap-4">

                    <div
                        class="
                            w-11
                            h-11
                            shrink-0
                            rounded-xl
                            bg-green-100
                            flex
                            items-center
                            justify-center
                            text-green-600
                        "
                    >

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-6 h-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M20 12v10H4V12M2 7h20v5H2V7zm10 15V7m0 0H7.5A2.5 2.5 0 115 4.5C5 6 8 7 12 7zm0 0h4.5A2.5 2.5 0 1019 4.5C19 6 16 7 12 7z"
                            />
                        </svg>

                    </div>

                    <div class="flex-1">

                        <h2
                            class="
                                font-bold
                                text-primary-900
                            "
                        >
                            Keuntungan Uji Coba Gratis
                        </h2>

                        <p
                            class="
                                mt-1
                                text-sm
                                text-slate-500
                            "
                        >
                            Nikmati layanan IDENTAS tanpa biaya selama masa trial.
                        </p>

                    </div>

                </div>


                <div
                    class="
                        mt-5
                        grid
                        sm:grid-cols-2
                        lg:grid-cols-3
                        gap-4
                        text-sm
                        text-slate-700
                    "
                >

                    <div class="flex items-center gap-2">

                        <span
                            class="
                                w-5
                                h-5
                                rounded-full
                                bg-green-500
                                text-white
                                flex
                                items-center
                                justify-center
                                text-xs
                                font-bold
                            "
                        >
                            ✓
                        </span>

                        Akses fitur IDENTAS

                    </div>

                    <div class="flex items-center gap-2">

                        <span
                            class="
                                w-5
                                h-5
                                rounded-full
                                bg-green-500
                                text-white
                                flex
                                items-center
                                justify-center
                                text-xs
                                font-bold
                            "
                        >
                            ✓
                        </span>

                        Akun institusi uji coba

                    </div>

                    <div class="flex items-center gap-2">

                        <span
                            class="
                                w-5
                                h-5
                                rounded-full
                                bg-green-500
                                text-white
                                flex
                                items-center
                                justify-center
                                text-xs
                                font-bold
                            "
                        >
                            ✓
                        </span>

                        Pendampingan tim IDENTAS

                    </div>

                </div>

            </div>


            <!-- =========================
            ERROR VALIDATION
            ========================== -->
            @if ($errors->any())

                <div
                    class="
                        mt-6
                        p-5
                        rounded-2xl
                        bg-red-50
                        border
                        border-red-200
                    "
                >

                    <div class="flex gap-3">

                        <div
                            class="
                                w-9
                                h-9
                                rounded-lg
                                bg-red-100
                                text-red-600
                                flex
                                items-center
                                justify-center
                                shrink-0
                            "
                        >
                            !
                        </div>

                        <div>

                            <p class="font-semibold text-red-700">
                                Terdapat data yang belum sesuai.
                            </p>

                            <ul
                                class="
                                    mt-2
                                    list-disc
                                    list-inside
                                    text-sm
                                    text-red-600
                                    space-y-1
                                "
                            >

                                @foreach ($errors->all() as $error)

                                    <li>{{ $error }}</li>

                                @endforeach

                            </ul>

                        </div>

                    </div>

                </div>

            @endif


            <!-- =========================
            MAIN FORM CARD
            ========================== -->
            <div
                class="
                    mt-7
                    bg-white
                    rounded-3xl
                    border
                    border-slate-100
                    shadow-xl
                    shadow-slate-200/50
                    p-5
                    sm:p-7
                    lg:p-8
                "
            >

                <!-- PROGRESS -->
                <div>

                    <div
                        class="
                            flex
                            items-center
                            justify-between
                            gap-4
                        "
                    >

                        <p
                            class="
                                text-xs
                                sm:text-sm
                                font-semibold
                                text-primary-900
                            "
                        >
                            Kelengkapan Form
                        </p>

                        <p
                            id="progressText"
                            class="
                                text-xs
                                sm:text-sm
                                font-bold
                                text-green-600
                            "
                        >
                            0%
                        </p>

                    </div>

                    <div
                        class="
                            mt-3
                            w-full
                            h-2
                            rounded-full
                            bg-slate-200
                            overflow-hidden
                        "
                    >

                        <div
                            id="progressBar"
                            class="
                                h-full
                                bg-green-500
                                rounded-full
                                transition-all
                                duration-300
                            "
                            style="width: 0%"
                        ></div>

                    </div>

                </div>


                <form
                    id="trialForm"
                    action="{{ route('trial.store') }}"
                    method="POST"
                    class="mt-7 space-y-6"
                >

                    @csrf


                    <!-- =========================
                    INFORMASI LEMBAGA
                    ========================== -->
                    <section
                        class="
                            rounded-2xl
                            border
                            border-slate-200
                            p-5
                            sm:p-6
                        "
                    >

                        <!-- SECTION HEADER -->
                        <div class="flex items-start gap-4">

                            <div
                                class="
                                    w-10
                                    h-10
                                    rounded-xl
                                    bg-indigo-50
                                    text-indigo-600
                                    flex
                                    items-center
                                    justify-center
                                    shrink-0
                                "
                            >

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M3 21h18M6 21V10m12 11V10M4 10l8-6 8 6M9 21v-6h6v6"
                                    />
                                </svg>

                            </div>

                            <div>

                                <h2
                                    class="
                                        font-bold
                                        text-primary-900
                                    "
                                >
                                    Informasi Dasar Lembaga
                                </h2>

                                <p
                                    class="
                                        mt-1
                                        text-sm
                                        text-slate-500
                                    "
                                >
                                    Data utama institusi yang akan menggunakan IDENTAS.
                                </p>

                            </div>

                        </div>


                        <div class="mt-7 space-y-5">

                            <!-- NAMA LEMBAGA -->
                            <div>

                                <label
                                    for="nama_lembaga"
                                    class="
                                        block
                                        mb-2
                                        text-sm
                                        font-semibold
                                        text-slate-700
                                    "
                                >
                                    Nama Lembaga / Institusi
                                    <span class="text-red-500">*</span>
                                </label>

                                <div class="relative">

                                    <div
                                        class="
                                            absolute
                                            inset-y-0
                                            left-0
                                            pl-4
                                            flex
                                            items-center
                                            pointer-events-none
                                            text-slate-400
                                        "
                                    >

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-5 h-5"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                            stroke-width="2"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M3 21h18M6 21V10m12 11V10M4 10l8-6 8 6"
                                            />
                                        </svg>

                                    </div>

                                    <input
                                        type="text"
                                        id="nama_lembaga"
                                        name="nama_lembaga"
                                        value="{{ old('nama_lembaga') }}"
                                        placeholder="Contoh: SMA Negeri 1 Cirebon"
                                        required
                                        class="
                                            form-field
                                            w-full
                                            pl-12
                                            pr-4
                                            py-3.5
                                            rounded-xl
                                            border
                                            border-slate-300
                                            bg-white
                                            text-sm
                                            text-slate-700
                                            placeholder:text-slate-400
                                            transition
                                        "
                                    >

                                </div>

                            </div>


                            <div class="grid md:grid-cols-2 gap-5">

                                <!-- JENIS CLIENT -->
                                <div>

                                    <label
                                        for="client_type_id"
                                        class="
                                            block
                                            mb-2
                                            text-sm
                                            font-semibold
                                            text-slate-700
                                        "
                                    >
                                        Jenis Institusi
                                        <span class="text-red-500">*</span>
                                    </label>

                                    <select
                                        id="client_type_id"
                                        name="client_type_id"
                                        required
                                        class="
                                            form-field
                                            w-full
                                            px-4
                                            py-3.5
                                            rounded-xl
                                            border
                                            border-slate-300
                                            bg-white
                                            text-sm
                                            text-slate-700
                                            transition
                                        "
                                    >

                                        <option value="">
                                            Pilih Jenis Institusi
                                        </option>

                                        @foreach ($clientTypes as $clientType)

                                            <option
                                                value="{{ $clientType->id }}"
                                                {{ old('client_type_id') == $clientType->id ? 'selected' : '' }}
                                            >
                                                {{ $clientType->nama }}
                                            </option>

                                        @endforeach

                                    </select>

                                </div>


                                <!-- JENJANG -->
                                <div>

                                    <label
                                        for="jenjang"
                                        class="
                                            block
                                            mb-2
                                            text-sm
                                            font-semibold
                                            text-slate-700
                                        "
                                    >
                                        Jenjang
                                        <span class="text-red-500">*</span>
                                    </label>

                                    <select
                                        id="jenjang"
                                        name="jenjang"
                                        required
                                        class="
                                            form-field
                                            w-full
                                            px-4
                                            py-3.5
                                            rounded-xl
                                            border
                                            border-slate-300
                                            bg-white
                                            text-sm
                                            text-slate-700
                                            transition
                                        "
                                    >

                                        <option value="">
                                            Pilih Jenjang
                                        </option>

                                        <option
                                            value="PAUD/TK"
                                            {{ old('jenjang') == 'PAUD/TK' ? 'selected' : '' }}
                                        >
                                            PAUD / TK
                                        </option>

                                        <option
                                            value="SD/MI"
                                            {{ old('jenjang') == 'SD/MI' ? 'selected' : '' }}
                                        >
                                            SD / MI
                                        </option>

                                        <option
                                            value="SMP/MTs"
                                            {{ old('jenjang') == 'SMP/MTs' ? 'selected' : '' }}
                                        >
                                            SMP / MTs
                                        </option>

                                        <option
                                            value="SMA/MA"
                                            {{ old('jenjang') == 'SMA/MA' ? 'selected' : '' }}
                                        >
                                            SMA / MA
                                        </option>

                                        <option
                                            value="SMK"
                                            {{ old('jenjang') == 'SMK' ? 'selected' : '' }}
                                        >
                                            SMK
                                        </option>

                                        <option
                                            value="Perguruan Tinggi"
                                            {{ old('jenjang') == 'Perguruan Tinggi' ? 'selected' : '' }}
                                        >
                                            Perguruan Tinggi
                                        </option>

                                        <option
                                            value="Pesantren"
                                            {{ old('jenjang') == 'Pesantren' ? 'selected' : '' }}
                                        >
                                            Pesantren
                                        </option>

                                        <option
                                            value="Lainnya"
                                            {{ old('jenjang') == 'Lainnya' ? 'selected' : '' }}
                                        >
                                            Lainnya
                                        </option>

                                    </select>

                                </div>

                            </div>


                            <!-- JUMLAH MURID -->
                            <div>

                                <label
                                    for="jumlah_murid"
                                    class="
                                        block
                                        mb-2
                                        text-sm
                                        font-semibold
                                        text-slate-700
                                    "
                                >
                                    Jumlah Siswa / Anggota
                                    <span class="text-red-500">*</span>
                                </label>

                                <div class="relative">

                                    <div
                                        class="
                                            absolute
                                            inset-y-0
                                            left-0
                                            pl-4
                                            flex
                                            items-center
                                            pointer-events-none
                                            text-slate-400
                                        "
                                    >

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-5 h-5"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                            stroke-width="2"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"
                                            />
                                        </svg>

                                    </div>

                                    <input
                                        type="number"
                                        id="jumlah_murid"
                                        name="jumlah_murid"
                                        value="{{ old('jumlah_murid') }}"
                                        min="1"
                                        placeholder="Contoh: 500"
                                        required
                                        class="
                                            form-field
                                            w-full
                                            pl-12
                                            pr-4
                                            py-3.5
                                            rounded-xl
                                            border
                                            border-slate-300
                                            bg-white
                                            text-sm
                                            text-slate-700
                                            placeholder:text-slate-400
                                            transition
                                        "
                                    >

                                </div>

                                <p
                                    class="
                                        mt-2
                                        text-xs
                                        text-slate-400
                                    "
                                >
                                    Masukkan perkiraan jumlah pengguna yang akan menggunakan IDENTAS.
                                </p>

                            </div>


                            <!-- ALAMAT -->
                            <div>

                                <label
                                    for="alamat"
                                    class="
                                        block
                                        mb-2
                                        text-sm
                                        font-semibold
                                        text-slate-700
                                    "
                                >
                                    Alamat Lembaga
                                    <span
                                        class="
                                            text-slate-400
                                            font-normal
                                        "
                                    >
                                        (Opsional)
                                    </span>
                                </label>

                                <textarea
                                    id="alamat"
                                    name="alamat"
                                    rows="4"
                                    placeholder="Masukkan alamat lengkap lembaga..."
                                    class="
                                        w-full
                                        px-4
                                        py-3.5
                                        rounded-xl
                                        border
                                        border-slate-300
                                        bg-white
                                        text-sm
                                        text-slate-700
                                        placeholder:text-slate-400
                                        resize-none
                                        transition
                                    "
                                >{{ old('alamat') }}</textarea>

                            </div>

                        </div>

                    </section>


                    <!-- =========================
                    INFORMASI PIC
                    ========================== -->
                    <section
                        class="
                            rounded-2xl
                            border
                            border-slate-200
                            p-5
                            sm:p-6
                        "
                    >

                        <div class="flex items-start gap-4">

                            <div
                                class="
                                    w-10
                                    h-10
                                    rounded-xl
                                    bg-blue-50
                                    text-primary-700
                                    flex
                                    items-center
                                    justify-center
                                    shrink-0
                                "
                            >

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M5.121 17.804A7 7 0 0112 15a7 7 0 016.879 2.804M15 11a3 3 0 11-6 0 3 3 0 016 0zm6 1a9 9 0 11-18 0 9 9 0 0118 0z"
                                    />
                                </svg>

                            </div>

                            <div>

                                <h2
                                    class="
                                        font-bold
                                        text-primary-900
                                    "
                                >
                                    Informasi Penanggung Jawab
                                </h2>

                                <p
                                    class="
                                        mt-1
                                        text-sm
                                        text-slate-500
                                    "
                                >
                                    Data PIC yang akan kami hubungi terkait pengajuan trial.
                                </p>

                            </div>

                        </div>


                        <div
                            class="
                                mt-7
                                grid
                                md:grid-cols-2
                                gap-5
                            "
                        >

                            <!-- NAMA -->
                            <div>

                                <label
                                    for="nama"
                                    class="
                                        block
                                        mb-2
                                        text-sm
                                        font-semibold
                                        text-slate-700
                                    "
                                >
                                    Nama Lengkap
                                    <span class="text-red-500">*</span>
                                </label>

                                <input
                                    type="text"
                                    id="nama"
                                    name="nama"
                                    value="{{ old('nama') }}"
                                    placeholder="Contoh: Ahmad Fauzi"
                                    required
                                    class="
                                        form-field
                                        w-full
                                        px-4
                                        py-3.5
                                        rounded-xl
                                        border
                                        border-slate-300
                                        bg-white
                                        text-sm
                                        text-slate-700
                                        placeholder:text-slate-400
                                        transition
                                    "
                                >

                            </div>


                            <!-- NOMOR HANDPHONE -->
                            <div>

                                <label
                                    for="nomor_handphone"
                                    class="
                                        block
                                        mb-2
                                        text-sm
                                        font-semibold
                                        text-slate-700
                                    "
                                >
                                    Nomor WhatsApp
                                    <span class="text-red-500">*</span>
                                </label>

                                <input
                                    type="tel"
                                    id="nomor_handphone"
                                    name="nomor_handphone"
                                    value="{{ old('nomor_handphone') }}"
                                    placeholder="Contoh: 081234567890"
                                    required
                                    class="
                                        form-field
                                        w-full
                                        px-4
                                        py-3.5
                                        rounded-xl
                                        border
                                        border-slate-300
                                        bg-white
                                        text-sm
                                        text-slate-700
                                        placeholder:text-slate-400
                                        transition
                                    "
                                >

                            </div>


                            <!-- EMAIL -->
                            <div class="md:col-span-2">

                                <label
                                    for="email"
                                    class="
                                        block
                                        mb-2
                                        text-sm
                                        font-semibold
                                        text-slate-700
                                    "
                                >
                                    Email Aktif
                                    <span class="text-red-500">*</span>
                                </label>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="Contoh: ahmad@sekolah.sch.id"
                                    required
                                    class="
                                        form-field
                                        w-full
                                        px-4
                                        py-3.5
                                        rounded-xl
                                        border
                                        border-slate-300
                                        bg-white
                                        text-sm
                                        text-slate-700
                                        placeholder:text-slate-400
                                        transition
                                    "
                                >

                                <p
                                    class="
                                        mt-2
                                        text-xs
                                        text-slate-400
                                    "
                                >
                                    Informasi akun uji coba akan dikirimkan melalui email ini
                                    setelah pengajuan disetujui.
                                </p>

                            </div>

                        </div>

                    </section>


                    <!-- =========================
                    INFORMATION BOX
                    ========================== -->
                    <div
                        class="
                            rounded-2xl
                            border
                            border-blue-200
                            bg-blue-50/70
                            p-5
                            flex
                            items-start
                            gap-4
                        "
                    >

                        <div
                            class="
                                w-9
                                h-9
                                rounded-lg
                                bg-blue-100
                                text-primary-700
                                flex
                                items-center
                                justify-center
                                shrink-0
                            "
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                />
                            </svg>

                        </div>

                        <div>

                            <p
                                class="
                                    text-sm
                                    font-semibold
                                    text-primary-900
                                "
                            >
                                Apa yang terjadi setelah pengajuan dikirim?
                            </p>

                            <p
                                class="
                                    mt-1
                                    text-sm
                                    leading-6
                                    text-slate-600
                                "
                            >
                                Tim IDENTAS akan meninjau data pengajuan Anda.
                                Jika disetujui, akun uji coba beserta informasi akses
                                akan dikirimkan melalui email yang telah didaftarkan.
                            </p>

                        </div>

                    </div>


                    <!-- =========================
                    AGREEMENT
                    ========================== -->
                    <label
                        class="
                            flex
                            items-start
                            gap-3
                            cursor-pointer
                        "
                    >

                        <input
                            id="agreement"
                            type="checkbox"
                            required
                            class="
                                form-field
                                mt-1
                                w-4
                                h-4
                                rounded
                                border-slate-300
                                text-primary-700
                                focus:ring-primary-500
                            "
                        >

                        <span
                            class="
                                text-sm
                                leading-6
                                text-slate-500
                            "
                        >
                            Saya memastikan data yang diisi sudah benar dan
                            bersedia dihubungi oleh tim IDENTAS terkait proses
                            pengajuan uji coba.
                        </span>

                    </label>


                    <!-- =========================
                    SUBMIT
                    ========================== -->
                    <div
                        class="
                            pt-2
                            flex
                            flex-col-reverse
                            sm:flex-row
                            sm:items-center
                            sm:justify-between
                            gap-4
                        "
                    >

                        <p
                            class="
                                text-xs
                                sm:text-sm
                                text-slate-400
                            "
                        >
                            <span class="text-red-500">*</span>
                            Wajib diisi
                        </p>


                        <button
                            type="submit"
                            class="
                                inline-flex
                                items-center
                                justify-center
                                gap-2
                                px-7
                                py-4
                                rounded-xl
                                bg-primary-700
                                text-white
                                text-sm
                                font-semibold
                                hover:bg-blue-600
                                active:scale-[.99]
                                transition
                                shadow-lg
                                shadow-blue-500/20
                            "
                        >
                            Kirim Pengajuan Uji Coba

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-4 h-4"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M5 12h14M13 6l6 6-6 6"
                                />
                            </svg>

                        </button>

                    </div>

                </form>

            </div>


            <!-- =========================
            FOOTER HELP
            ========================== -->
            <div
                class="
                    mt-7
                    text-center
                    text-sm
                    text-slate-500
                "
            >

                Mengalami kendala saat mendaftar?

                <a
                    href="https://wa.me/6285117377855?text={{ urlencode('Halo Admin IDENTAS, saya mengalami kendala saat mengisi form uji coba gratis IDENTAS.') }}"
                    target="_blank"
                    class="
                        font-semibold
                        text-primary-700
                        hover:text-primary-500
                        transition
                    "
                >
                    Hubungi Admin IDENTAS
                </a>

            </div>

        </div>

    </main>


    <!-- =========================
    JAVASCRIPT PROGRESS
    ========================== -->
    <script>

        document.addEventListener('DOMContentLoaded', function () {

            const form = document.getElementById('trialForm');

            const requiredFields =
                form.querySelectorAll('.form-field[required]');

            const progressBar =
                document.getElementById('progressBar');

            const progressText =
                document.getElementById('progressText');


            function calculateProgress() {

                let completed = 0;

                requiredFields.forEach(field => {

                    if (field.type === 'checkbox') {

                        if (field.checked) {
                            completed++;
                        }

                    } else {

                        if (field.value.trim() !== '') {
                            completed++;
                        }

                    }

                });


                const total = requiredFields.length;

                const percentage = total > 0
                    ? Math.round((completed / total) * 100)
                    : 0;


                progressBar.style.width =
                    percentage + '%';

                progressText.textContent =
                    percentage + '%';


                if (percentage === 100) {

                    progressText.classList.remove(
                        'text-green-600'
                    );

                    progressText.classList.add(
                        'text-primary-700'
                    );

                } else {

                    progressText.classList.remove(
                        'text-primary-700'
                    );

                    progressText.classList.add(
                        'text-green-600'
                    );

                }

            }


            requiredFields.forEach(field => {

                field.addEventListener(
                    'input',
                    calculateProgress
                );

                field.addEventListener(
                    'change',
                    calculateProgress
                );

            });


            calculateProgress();

        });

    </script>


    <script
        src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js">
    </script>

</body>

</html>