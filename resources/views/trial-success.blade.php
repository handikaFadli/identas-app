<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pengajuan Berhasil — IDENTAS</title>

    <meta
        name="description"
        content="Pengajuan uji coba gratis IDENTAS berhasil dikirim."
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
    MAIN
    ========================== -->

    <main
        class="
            min-h-[calc(100vh-80px)]
            flex
            items-center
            py-12
            lg:py-16
        "
    >

        <div
            class="
                max-w-3xl
                mx-auto
                px-5
                sm:px-6
                lg:px-8
                w-full
            "
        >

            <div
                class="
                    relative
                    overflow-hidden
                    bg-white
                    border
                    border-slate-100
                    rounded-3xl
                    shadow-xl
                    shadow-slate-200/50
                    px-6
                    py-10
                    sm:px-10
                    sm:py-12
                    text-center
                "
            >

                <!-- DECORATION -->
                <div
                    class="
                        absolute
                        -top-24
                        -right-24
                        w-64
                        h-64
                        bg-blue-100/50
                        rounded-full
                        blur-3xl
                    "
                ></div>

                <div
                    class="
                        absolute
                        -bottom-24
                        -left-24
                        w-64
                        h-64
                        bg-green-100/40
                        rounded-full
                        blur-3xl
                    "
                ></div>


                <div class="relative">

                    <!-- SUCCESS ICON -->
                    <div
                        class="
                            mx-auto
                            w-20
                            h-20
                            sm:w-24
                            sm:h-24
                            rounded-full
                            bg-green-100
                            flex
                            items-center
                            justify-center
                        "
                    >

                        <div
                            class="
                                w-14
                                h-14
                                sm:w-16
                                sm:h-16
                                rounded-full
                                bg-green-500
                                text-white
                                flex
                                items-center
                                justify-center
                                shadow-lg
                                shadow-green-500/20
                            "
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-8 h-8 sm:w-9 sm:h-9"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2.5"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M5 13l4 4L19 7"
                                />
                            </svg>

                        </div>

                    </div>


                    <!-- BADGE -->
                    <div
                        class="
                            mt-6
                            inline-flex
                            items-center
                            gap-2
                            px-4
                            py-2
                            rounded-full
                            bg-green-50
                            text-green-700
                            text-sm
                            font-semibold
                        "
                    >

                        <span
                            class="
                                w-2
                                h-2
                                rounded-full
                                bg-green-500
                            "
                        ></span>

                        Pengajuan Berhasil Dikirim

                    </div>


                    <!-- TITLE -->
                    <h1
                        class="
                            mt-5
                            text-2xl
                            sm:text-3xl
                            lg:text-4xl
                            font-extrabold
                            tracking-tight
                            text-primary-900
                        "
                    >
                        Terima Kasih Telah
                        Mendaftar Uji Coba IDENTAS
                    </h1>


                    <!-- DESCRIPTION -->
                    <p
                        class="
                            mt-4
                            text-sm
                            sm:text-base
                            leading-7
                            text-slate-500
                            max-w-2xl
                            mx-auto
                        "
                    >
                        Pengajuan uji coba gratis Anda telah kami terima.
                        Tim IDENTAS akan melakukan peninjauan terhadap data
                        yang telah dikirimkan.
                    </p>


                    <!-- STATUS -->
                    <div
                        class="
                            mt-8
                            rounded-2xl
                            border
                            border-blue-200
                            bg-blue-50/70
                            p-5
                            sm:p-6
                            text-left
                        "
                    >

                        <div class="flex items-start gap-4">

                            <div
                                class="
                                    w-10
                                    h-10
                                    rounded-xl
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
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                                    />
                                </svg>

                            </div>


                            <div>

                                <p
                                    class="
                                        font-semibold
                                        text-primary-900
                                    "
                                >
                                    Status Pengajuan: Menunggu Review
                                </p>

                                <p
                                    class="
                                        mt-1
                                        text-sm
                                        leading-6
                                        text-slate-600
                                    "
                                >
                                    Pengajuan Anda saat ini sedang menunggu
                                    proses peninjauan oleh tim IDENTAS.
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- PROCESS -->
                    <div class="mt-8">

                        <p
                            class="
                                text-sm
                                font-semibold
                                text-primary-900
                            "
                        >
                            Apa yang terjadi selanjutnya?
                        </p>


                        <div
                            class="
                                mt-5
                                grid
                                sm:grid-cols-3
                                gap-4
                            "
                        >

                            <!-- STEP 1 -->
                            <div
                                class="
                                    rounded-2xl
                                    border
                                    border-slate-200
                                    bg-white
                                    p-5
                                    text-left
                                "
                            >

                                <div
                                    class="
                                        w-9
                                        h-9
                                        rounded-xl
                                        bg-blue-50
                                        text-primary-700
                                        flex
                                        items-center
                                        justify-center
                                        font-bold
                                        text-sm
                                    "
                                >
                                    1
                                </div>

                                <p
                                    class="
                                        mt-4
                                        font-semibold
                                        text-primary-900
                                        text-sm
                                    "
                                >
                                    Review Pengajuan
                                </p>

                                <p
                                    class="
                                        mt-2
                                        text-xs
                                        leading-5
                                        text-slate-500
                                    "
                                >
                                    Tim IDENTAS akan memeriksa data
                                    institusi dan PIC yang Anda kirimkan.
                                </p>

                            </div>


                            <!-- STEP 2 -->
                            <div
                                class="
                                    rounded-2xl
                                    border
                                    border-slate-200
                                    bg-white
                                    p-5
                                    text-left
                                "
                            >

                                <div
                                    class="
                                        w-9
                                        h-9
                                        rounded-xl
                                        bg-indigo-50
                                        text-indigo-600
                                        flex
                                        items-center
                                        justify-center
                                        font-bold
                                        text-sm
                                    "
                                >
                                    2
                                </div>

                                <p
                                    class="
                                        mt-4
                                        font-semibold
                                        text-primary-900
                                        text-sm
                                    "
                                >
                                    Aktivasi Akun
                                </p>

                                <p
                                    class="
                                        mt-2
                                        text-xs
                                        leading-5
                                        text-slate-500
                                    "
                                >
                                    Jika disetujui, sistem akan membuat
                                    akun institusi dan akses uji coba.
                                </p>

                            </div>


                            <!-- STEP 3 -->
                            <div
                                class="
                                    rounded-2xl
                                    border
                                    border-slate-200
                                    bg-white
                                    p-5
                                    text-left
                                "
                            >

                                <div
                                    class="
                                        w-9
                                        h-9
                                        rounded-xl
                                        bg-green-50
                                        text-green-600
                                        flex
                                        items-center
                                        justify-center
                                        font-bold
                                        text-sm
                                    "
                                >
                                    3
                                </div>

                                <p
                                    class="
                                        mt-4
                                        font-semibold
                                        text-primary-900
                                        text-sm
                                    "
                                >
                                    Cek Email
                                </p>

                                <p
                                    class="
                                        mt-2
                                        text-xs
                                        leading-5
                                        text-slate-500
                                    "
                                >
                                    Informasi login akan dikirimkan
                                    ke email PIC setelah akun aktif.
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- EMAIL INFO -->
                    <div
                        class="
                            mt-7
                            flex
                            items-start
                            gap-3
                            rounded-xl
                            bg-slate-50
                            border
                            border-slate-200
                            p-4
                            text-left
                        "
                    >

                        <div
                            class="
                                w-9
                                h-9
                                rounded-lg
                                bg-white
                                border
                                border-slate-200
                                flex
                                items-center
                                justify-center
                                text-slate-500
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
                                    d="M3 8l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                />
                            </svg>

                        </div>

                        <div>

                            <p
                                class="
                                    text-sm
                                    font-semibold
                                    text-slate-700
                                "
                            >
                                Pantau email yang Anda daftarkan
                            </p>

                            <p
                                class="
                                    mt-1
                                    text-xs
                                    sm:text-sm
                                    leading-6
                                    text-slate-500
                                "
                            >
                                Setelah pengajuan disetujui,
                                detail akun, password sementara,
                                dan informasi masa trial akan dikirimkan
                                melalui email PIC.
                            </p>

                        </div>

                    </div>


                    <!-- CTA -->
                    <div
                        class="
                            mt-8
                            flex
                            flex-col
                            sm:flex-row
                            items-center
                            justify-center
                            gap-3
                        "
                    >

                        <a
                            href="{{ url('/') }}"
                            class="
                                w-full
                                sm:w-auto
                                inline-flex
                                items-center
                                justify-center
                                gap-2
                                px-7
                                py-3.5
                                rounded-xl
                                bg-primary-700
                                text-white
                                text-sm
                                font-semibold
                                hover:bg-blue-600
                                transition
                                shadow-lg
                                shadow-blue-500/20
                            "
                        >
                            Kembali ke Beranda

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

                        </a>


                        <a
                            href="https://wa.me/6285117377855?text={{ urlencode('Halo Admin IDENTAS, saya sudah mengirim pengajuan uji coba gratis dan ingin menanyakan proses selanjutnya.') }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="
                                w-full
                                sm:w-auto
                                inline-flex
                                items-center
                                justify-center
                                gap-2
                                px-7
                                py-3.5
                                rounded-xl
                                border
                                border-slate-200
                                bg-white
                                text-slate-700
                                text-sm
                                font-semibold
                                hover:border-green-400
                                hover:text-green-600
                                hover:bg-green-50
                                transition
                            "
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                class="w-5 h-5 text-green-500"
                            >
                                <path
                                    d="M12.04 2C6.55 2 2.1 6.45 2.1 11.94c0 1.75.46 3.46 1.33 4.96L2 22l5.22-1.37a9.9 9.9 0 004.81 1.23h.01c5.49 0 9.94-4.45 9.94-9.94A9.93 9.93 0 0012.04 2zm5.79 14.05c-.24.68-1.43 1.3-1.97 1.38-.5.08-1.13.12-1.83-.12-.42-.13-.96-.31-1.65-.61-2.91-1.26-4.8-4.19-4.95-4.38-.14-.19-1.18-1.57-1.18-3 0-1.43.75-2.14 1.02-2.43.27-.29.59-.36.78-.36h.57c.18 0 .43-.07.67.51.24.58.82 2 .89 2.14.07.14.12.31.02.5-.09.19-.14.31-.29.48-.14.17-.3.38-.43.51-.14.14-.29.29-.12.58.17.29.76 1.25 1.63 2.02 1.12 1 2.07 1.31 2.36 1.46.29.14.46.12.63-.07.17-.19.72-.84.92-1.13.19-.29.39-.24.65-.14.27.1 1.69.8 1.98.94.29.14.48.22.55.34.07.12.07.7-.17 1.38z"
                                />
                            </svg>

                            Hubungi Admin
                        </a>

                    </div>


                    <!-- SMALL NOTE -->
                    <p
                        class="
                            mt-6
                            text-xs
                            leading-5
                            text-slate-400
                        "
                    >
                        Anda tidak perlu mengirim pengajuan kembali.
                        Tim IDENTAS akan menghubungi Anda jika diperlukan
                        informasi tambahan.
                    </p>

                </div>

            </div>

        </div>

    </main>


    <script
        src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js">
    </script>

</body>

</html>