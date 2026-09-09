<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KartuPintar by Edulink — Satu Identitas, Akses Tanpa Batas</title>
    <meta name="description"
        content="KartuPintar adalah ekosistem identitas pintar untuk presensi, transaksi cashless, pemantauan aktivitas, dan integrasi data institusi.">

    <link rel="icon" type="image/x-icon" href="{{ asset('logo/logo-kartupintar-white.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        .grid-pattern {
            background-image:
                linear-gradient(rgba(6, 111, 252, .05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(6, 111, 252, .05) 1px, transparent 1px);

            background-size: 40px 40px;
        }

        .hero-glow {
            background:
                radial-gradient(circle at 70% 30%,
                    rgba(6, 111, 252, .18),
                    transparent 35%);
        }
    </style>
</head>

<body class="bg-white text-slate-700 font-body">

    <!-- =========================
NAVBAR
========================= -->

    <header
        class="
        fixed
        top-0
        left-0
        right-0
        z-50
        bg-white/95
        backdrop-blur
        border-b
        border-slate-100
    ">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <!-- MAIN NAV -->
            <div class="h-20 flex items-center justify-between">

                <!-- LOGO -->
                <a href="/" class="flex items-center">
                    <img src="{{ asset('logo/logo-kartupintar.png') }}" alt="KartuPintar" class="h-20 sm:h-35 w-auto">
                </a>

                <!-- DESKTOP MENU -->
                <nav class="hidden lg:flex items-center gap-8">

                    <a href="#fitur"
                        class="
                        text-sm
                        font-medium
                        text-slate-700
                        hover:text-primary-500
                        transition
                    ">
                        Fitur
                    </a>

                    <a href="#solusi"
                        class="
                        text-sm
                        font-medium
                        text-slate-700
                        hover:text-primary-500
                        transition
                    ">
                        Solusi
                    </a>

                    <a href="#tentang"
                        class="
                        text-sm
                        font-medium
                        text-slate-700
                        hover:text-primary-500
                        transition
                    ">
                        Tentang Kami
                    </a>

                </nav>

                <!-- DESKTOP CTA -->
                <div class="hidden lg:flex items-center gap-3">

                    <!-- WHATSAPP -->
                    <a href="https://wa.me/628XXXXXXXXXX?text={{ urlencode('Halo Admin KartuPintar, saya ingin mengetahui lebih lanjut tentang KartuPintar.') }}"
                        target="_blank" rel="noopener noreferrer"
                        class="
                        inline-flex
                        items-center
                        gap-2
                        px-5
                        py-3
                        border
                        border-slate-200
                        text-primary-900
                        rounded-xl
                        text-sm
                        font-semibold
                        hover:border-green-400
                        hover:text-green-600
                        hover:bg-green-50
                        transition
                    ">
                        <!-- WhatsApp Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-5 h-5 text-green-500">
                            <path
                                d="M12.04 2C6.55 2 2.1 6.45 2.1 11.94c0 1.75.46 3.46 1.33 4.96L2 22l5.22-1.37a9.9 9.9 0 004.81 1.23h.01c5.49 0 9.94-4.45 9.94-9.94A9.93 9.93 0 0012.04 2zm5.79 14.05c-.24.68-1.43 1.3-1.97 1.38-.5.08-1.13.12-1.83-.12-.42-.13-.96-.31-1.65-.61-2.91-1.26-4.8-4.19-4.95-4.38-.14-.19-1.18-1.57-1.18-3 0-1.43.75-2.14 1.02-2.43.27-.29.59-.36.78-.36h.57c.18 0 .43-.07.67.51.24.58.82 2 .89 2.14.07.14.12.31.02.5-.09.19-.14.31-.29.48-.14.17-.3.38-.43.51-.14.14-.29.29-.12.58.17.29.76 1.25 1.63 2.02 1.12 1 2.07 1.31 2.36 1.46.29.14.46.12.63-.07.17-.19.72-.84.92-1.13.19-.29.39-.24.65-.14.27.1 1.69.8 1.98.94.29.14.48.22.55.34.07.12.07.7-.17 1.38z" />
                        </svg>

                        WhatsApp
                    </a>

                    <!-- FREE TRIAL -->
                    <a href="/free-trial"
                        class="
                        inline-flex
                        items-center
                        gap-2
                        px-6
                        py-3
                        bg-primary-700
                        text-white
                        rounded-xl
                        text-sm
                        font-semibold
                        hover:bg-blue-600
                        transition
                        shadow-lg
                        shadow-blue-500/20
                    ">
                        Coba Gratis

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6" />
                        </svg>
                    </a>

                </div>

                <!-- MOBILE MENU BUTTON -->
                <button id="mobileMenuButton" type="button" aria-label="Buka menu navigasi" aria-expanded="false"
                    class="
                    lg:hidden
                    w-11
                    h-11
                    rounded-xl
                    border
                    border-slate-200
                    flex
                    items-center
                    justify-center
                    text-primary-900
                    hover:bg-slate-50
                    transition
                ">
                    <svg id="menuIcon" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <svg id="closeIcon" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hidden" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

            </div>

            <!-- MOBILE MENU -->
            <div id="mobileMenu" class="hidden lg:hidden pb-5">

                <div
                    class="
                    bg-white
                    border
                    border-slate-100
                    rounded-2xl
                    shadow-xl
                    shadow-slate-200/50
                    p-3
                ">

                    <nav class="flex flex-col">

                        <a href="#fitur"
                            class="
                            mobile-nav-link
                            px-4
                            py-3
                            rounded-xl
                            text-sm
                            font-medium
                            text-slate-700
                            hover:text-primary-500
                            hover:bg-blue-50
                            transition
                        ">
                            Fitur
                        </a>

                        <a href="#solusi"
                            class="
                            mobile-nav-link
                            px-4
                            py-3
                            rounded-xl
                            text-sm
                            font-medium
                            text-slate-700
                            hover:text-primary-500
                            hover:bg-blue-50
                            transition
                        ">
                            Solusi
                        </a>

                        <a href="#tentang"
                            class="
                            mobile-nav-link
                            px-4
                            py-3
                            rounded-xl
                            text-sm
                            font-medium
                            text-slate-700
                            hover:text-primary-500
                            hover:bg-blue-50
                            transition
                        ">
                            Tentang Kami
                        </a>

                    </nav>

                    <div class="border-t border-slate-100 mt-3 pt-3 space-y-2">

                        <!-- TRIAL -->
                        <a href="/free-trial"
                            class="
                            mobile-nav-link
                            flex
                            items-center
                            justify-center
                            w-full
                            px-5
                            py-3.5
                            bg-primary-500
                            text-white
                            rounded-xl
                            text-sm
                            font-semibold
                            hover:bg-primary-800
                            transition
                        ">
                            Coba KartuPintar Gratis

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6" />
                            </svg>
                        </a>

                        <!-- WHATSAPP -->
                        <a href="https://wa.me/6285117377855?text={{ urlencode('Halo Admin KartuPintar, saya ingin mengetahui lebih lanjut tentang KartuPintar.') }}"
                            target="_blank" rel="noopener noreferrer"
                            class="
                            mobile-nav-link
                            flex
                            items-center
                            justify-center
                            gap-2
                            w-full
                            px-5
                            py-3.5
                            border
                            border-slate-200
                            text-primary-900
                            rounded-xl
                            text-sm
                            font-semibold
                            hover:border-green-400
                            hover:text-green-600
                            hover:bg-green-50
                            transition
                        ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5 text-green-500">
                                <path
                                    d="M12.04 2C6.55 2 2.1 6.45 2.1 11.94c0 1.75.46 3.46 1.33 4.96L2 22l5.22-1.37a9.9 9.9 0 004.81 1.23h.01c5.49 0 9.94-4.45 9.94-9.94A9.93 9.93 0 0012.04 2zm5.79 14.05c-.24.68-1.43 1.3-1.97 1.38-.5.08-1.13.12-1.83-.12-.42-.13-.96-.31-1.65-.61-2.91-1.26-4.8-4.19-4.95-4.38-.14-.19-1.18-1.57-1.18-3 0-1.43.75-2.14 1.02-2.43.27-.29.59-.36.78-.36h.57c.18 0 .43-.07.67.51.24.58.82 2 .89 2.14.07.14.12.31.02.5-.09.19-.14.31-.29.48-.14.17-.3.38-.43.51-.14.14-.29.29-.12.58.17.29.76 1.25 1.63 2.02 1.12 1 2.07 1.31 2.36 1.46.29.14.46.12.63-.07.17-.19.72-.84.92-1.13.19-.29.39-.24.65-.14.27.1 1.69.8 1.98.94.29.14.48.22.55.34.07.12.07.7-.17 1.38z" />
                            </svg>

                            Hubungi via WhatsApp
                        </a>

                    </div>

                </div>

            </div>

        </div>
    </header>


    <!-- =========================
HERO
========================= -->

    <section
        class="
        relative
        overflow-hidden
        pt-20
        pb-12
        sm:pt-24
        sm:pb-14
        lg:pt-24
        lg:pb-16
        hero-glow
        grid-pattern
    ">

        <!-- BACKGROUND GLOW -->
        <div
            class="
            absolute
            top-10
            right-0
            w-[500px]
            h-[500px]
            lg:w-[650px]
            lg:h-[650px]
            bg-blue-100/40
            rounded-full
            blur-3xl
            pointer-events-none
        ">
        </div>

        <!-- MAIN CONTAINER -->
        <div
            class="
            relative
            max-w-7xl
            mx-auto
            px-5
            sm:px-6
            lg:px-8
        ">

            <div
                class="
                grid
                lg:grid-cols-[0.95fr_1.05fr]
                gap-8
                lg:gap-8
                xl:gap-6
                items-center
            ">

                <!-- LEFT CONTENT -->
                <div
                    class="
                    relative
                    z-20
                    text-center
                    lg:text-left
                ">

                    <!-- BADGE -->
                    <div
                        class="
                        inline-flex
                        items-center
                        gap-2
                        px-4
                        py-2
                        rounded-full
                        bg-blue-50
                        text-primary-500
                        text-xs
                        sm:text-sm
                        font-semibold
                        mb-5
                    ">

                        <span
                            class="
                            w-2
                            h-2
                            rounded-full
                            bg-primary-700
                        "></span>

                        Infrastruktur Identitas Cerdas Terintegrasi

                    </div>

                    <!-- HEADING -->
                    <h1
                        class="
                        font-heading
                        font-extrabold
                        text-primary-900
                        text-[38px]
                        sm:text-5xl
                        lg:text-[48px]
                        xl:text-[56px]
                        2xl:text-[62px]
                        leading-[1.05]
                        tracking-tight
                    ">

                        <span class="block">
                            Satu Identitas,
                        </span>

                        <span
                            class="
                            block
                            mt-1
                            text-primary-500
                        ">
                            Akses Tanpa Batas
                        </span>

                    </h1>

                    <!-- DESCRIPTION -->
                    <p
                        class="
                        mt-5
                        text-base
                        sm:text-lg
                        lg:text-[17px]
                        xl:text-[18px]
                        leading-7
                        lg:leading-8
                        text-slate-600
                        max-w-[570px]
                        mx-auto
                        lg:mx-0
                    ">
                        Menghubungkan identitas individu melalui satu akses pintar
                        guna menciptakan ekosistem digital yang efisien,
                        transparan, dan berintegritas.
                    </p>

                    <!-- CTA -->
                    <div
                        class="
                        mt-7
                        flex
                        flex-col
                        sm:flex-row
                        justify-center
                        lg:justify-start
                        gap-3
                    ">

                        <!-- FREE TRIAL -->
                        <a href="/free-trial"
                            class="
                            inline-flex
                            justify-center
                            items-center
                            gap-2
                            px-7
                            py-4
                            rounded-xl
                            bg-primary-700
                            text-white
                            font-semibold
                            hover:bg-blue-600
                            transition
                            shadow-xl
                            shadow-blue-500/20
                        ">
                            Coba KartuPintar Gratis

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6" />
                            </svg>
                        </a>

                        <!-- WHATSAPP -->
                        <a href="https://wa.me/6285117377855?text={{ urlencode('Halo Admin KartuPintar, saya ingin mengetahui lebih lanjut tentang KartuPintar.') }}"
                            target="_blank" rel="noopener noreferrer"
                            class="
                            inline-flex
                            justify-center
                            items-center
                            gap-2
                            px-7
                            py-4
                            rounded-xl
                            border
                            border-slate-200
                            bg-white/80
                            backdrop-blur
                            text-primary-900
                            font-semibold
                            hover:border-green-400
                            hover:text-green-600
                            hover:bg-green-50
                            transition
                        ">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5 text-green-500">
                                <path
                                    d="M12.04 2C6.55 2 2.1 6.45 2.1 11.94c0 1.75.46 3.46 1.33 4.96L2 22l5.22-1.37a9.9 9.9 0 004.81 1.23h.01c5.49 0 9.94-4.45 9.94-9.94A9.93 9.93 0 0012.04 2zm5.79 14.05c-.24.68-1.43 1.3-1.97 1.38-.5.08-1.13.12-1.83-.12-.42-.13-.96-.31-1.65-.61-2.91-1.26-4.8-4.19-4.95-4.38-.14-.19-1.18-1.57-1.18-3 0-1.43.75-2.14 1.02-2.43.27-.29.59-.36.78-.36h.57c.18 0 .43-.07.67.51.24.58.82 2 .89 2.14.07.14.12.31.02.5-.09.19-.14.31-.29.48-.14.17-.3.38-.43.51-.14.14-.29.29-.12.58.17.29.76 1.25 1.63 2.02 1.12 1 2.07 1.31 2.36 1.46.29.14.46.12.63-.07.17-.19.72-.84.92-1.13.19-.29.39-.24.65-.14.27.1 1.69.8 1.98.94.29.14.48.22.55.34.07.12.07.7-.17 1.38z" />
                            </svg>

                            Hubungi via WhatsApp
                        </a>

                    </div>

                    <!-- TRIAL INFO -->
                    <div
                        class="
                        mt-4
                        flex
                        flex-wrap
                        items-center
                        justify-center
                        lg:justify-start
                        gap-x-2
                        gap-y-1
                        text-sm
                        text-slate-500
                    ">

                        <span
                            class="
                            w-5
                            h-5
                            rounded-full
                            bg-blue-50
                            text-primary-500
                            flex
                            items-center
                            justify-center
                            text-[11px]
                            font-bold
                        ">
                            ✓
                        </span>

                        <span>
                            Uji coba gratis selama 14 hari
                        </span>

                        <span class="text-slate-300">
                            •
                        </span>

                        <span>
                            Tanpa biaya
                        </span>

                    </div>

                    <!-- MINI BENEFITS -->
                    <div
                        class="
                        mt-6
                        flex
                        flex-wrap
                        justify-center
                        lg:justify-start
                        gap-x-5
                        gap-y-3
                        text-sm
                        text-slate-500
                    ">

                        <div class="flex items-center gap-2">
                            <span
                                class="
                                w-5
                                h-5
                                rounded-full
                                bg-blue-50
                                text-primary-500
                                flex
                                items-center
                                justify-center
                                text-[11px]
                                font-bold
                            ">
                                ✓
                            </span>

                            Real-Time
                        </div>

                        <div class="flex items-center gap-2">
                            <span
                                class="
                                w-5
                                h-5
                                rounded-full
                                bg-blue-50
                                text-primary-500
                                flex
                                items-center
                                justify-center
                                text-[11px]
                                font-bold
                            ">
                                ✓
                            </span>

                            Paperless
                        </div>

                        <div class="flex items-center gap-2">
                            <span
                                class="
                                w-5
                                h-5
                                rounded-full
                                bg-blue-50
                                text-primary-500
                                flex
                                items-center
                                justify-center
                                text-[11px]
                                font-bold
                            ">
                                ✓
                            </span>

                            Terintegrasi
                        </div>

                        <div class="flex items-center gap-2">
                            <span
                                class="
                                w-5
                                h-5
                                rounded-full
                                bg-blue-50
                                text-primary-500
                                flex
                                items-center
                                justify-center
                                text-[11px]
                                font-bold
                            ">
                                ✓
                            </span>

                            Aman
                        </div>

                    </div>

                </div>

                <!-- RIGHT HERO VISUAL -->
                <div
                    class="
                    relative
                    z-10
                    flex
                    items-center
                    justify-center
                    lg:justify-end
                    mt-6
                    lg:mt-0
                    min-h-[320px]
                    sm:min-h-[400px]
                    lg:min-h-[470px]
                ">

                    <div
                        class="
                        absolute
                        w-[85%]
                        h-[75%]
                        bg-primary-700/10
                        rounded-full
                        blur-[80px]
                        pointer-events-none
                    ">
                    </div>

                    <div
                        class="
                        absolute
                        hidden
                        lg:block
                        w-[430px]
                        h-[430px]
                        rounded-full
                        border
                        border-blue-100
                        opacity-70
                    ">
                    </div>

                    <div
                        class="
                        absolute
                        hidden
                        xl:block
                        w-[520px]
                        h-[520px]
                        rounded-full
                        border
                        border-blue-100/70
                    ">
                    </div>

                    <img src="{{ asset('image/header-2.png') }}"
                        alt="Ekosistem KartuPintar - Smart Card, Mesin Presensi, dan Aplikasi Mobile"
                        class="
                        relative
                        z-10
                        w-full
                        max-w-[640px]
                        sm:max-w-[720px]
                        lg:max-w-[680px]
                        xl:max-w-[760px]
                        h-auto
                        object-contain
                        drop-shadow-[0_25px_35px_rgba(2,36,93,0.10)]
                        xl:scale-105
                        xl:origin-center
                    ">

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
TRUSTED BY
========================= -->

    <section class="border-y border-slate-100 bg-white">

        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-10 lg:py-12">

            <div class="text-center">

                <p
                    class="
                    text-sm
                    sm:text-base
                    font-medium
                    text-slate-500
                ">
                    Telah digunakan oleh berbagai
                    <span class="font-semibold text-primary-900">
                        Institusi Pendidikan
                    </span>
                </p>

            </div>

            <div
                class="
                mt-8
                flex
                flex-wrap
                items-center
                justify-center
                gap-x-10
                gap-y-7
                lg:gap-x-14
            ">

                @for ($i = 1; $i <= 6; $i++)
                    <div
                        class="
                        h-14
                        sm:h-16
                        min-w-[130px]
                        flex
                        items-center
                        justify-center
                        grayscale
                        opacity-60
                        hover:grayscale-0
                        hover:opacity-100
                        transition
                        duration-300
                    ">
                        <img src="{{ asset('image/client' . $i . '.png') }}" alt="Client KartuPintar"
                            class="max-h-12 max-w-[130px] object-contain">
                    </div>
                @endfor

            </div>

        </div>

    </section>


    <!-- =========================
WHY IDENTAS
========================= -->

    <section id="keunggulan" class="py-24 lg:py-32">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto">

                <p class="text-primary-500 font-semibold mb-3">
                    Mengapa KartuPintar?
                </p>

                <h2
                    class="
                    font-heading
                    font-bold
                    text-3xl
                    lg:text-4xl
                    text-primary-900
                ">
                    Satu Ekosistem untuk Aktivitas yang Lebih Cerdas
                </h2>

                <p class="mt-5 text-slate-500 leading-7">
                    Satukan presensi, transaksi, aktivitas, serta data
                    institusi dalam satu sistem yang saling terhubung.
                </p>

            </div>

            <div
                class="
                mt-16
                grid
                md:grid-cols-2
                lg:grid-cols-4
                gap-6
            ">

                <!-- CARD 1 -->
                <div
                    class="
                    group
                    rounded-2xl
                    border
                    border-slate-100
                    p-7
                    bg-white
                    hover:-translate-y-1
                    hover:shadow-soft
                    transition
                ">

                    <div
                        class="
                        w-12
                        h-12
                        rounded-xl
                        bg-blue-50
                        text-primary-500
                        flex
                        items-center
                        justify-center
                        font-bold
                        text-xl
                    ">
                        01
                    </div>

                    <h3
                        class="
                        mt-6
                        font-heading
                        font-semibold
                        text-xl
                        text-primary-900
                    ">
                        All-in-One Smart Ecosystem
                    </h3>

                    <p class="mt-4 text-sm leading-6 text-slate-500">
                        Presensi, transaksi kantin cashless,
                        peminjaman barang/e-perpus, hingga aktivitas
                        ibadah dalam satu ekosistem.
                    </p>

                </div>

                <!-- CARD 2 -->
                <div
                    class="
                    rounded-2xl
                    border
                    border-slate-100
                    p-7
                    bg-white
                    hover:-translate-y-1
                    hover:shadow-soft
                    transition
                ">

                    <div
                        class="
                        w-12
                        h-12
                        rounded-xl
                        bg-blue-50
                        text-primary-500
                        flex
                        items-center
                        justify-center
                        font-bold
                        text-xl
                    ">
                        02
                    </div>

                    <h3
                        class="
                        mt-6
                        font-heading
                        font-semibold
                        text-xl
                        text-primary-900
                    ">
                        High Enterprise Data Security
                    </h3>

                    <p class="mt-4 text-sm leading-6 text-slate-500">
                        Perlindungan data dirancang untuk mendukung
                        keamanan informasi presensi, aktivitas,
                        dan transaksi dalam ekosistem KartuPintar.
                    </p>

                </div>

                <!-- CARD 3 -->
                <div
                    class="
                    rounded-2xl
                    border
                    border-slate-100
                    p-7
                    bg-white
                    hover:-translate-y-1
                    hover:shadow-soft
                    transition
                ">

                    <div
                        class="
                        w-12
                        h-12
                        rounded-xl
                        bg-blue-50
                        text-primary-500
                        flex
                        items-center
                        justify-center
                        font-bold
                        text-xl
                    ">
                        03
                    </div>

                    <h3
                        class="
                        mt-6
                        font-heading
                        font-semibold
                        text-xl
                        text-primary-900
                    ">
                        Smart Analytics
                    </h3>

                    <p class="mt-4 text-sm leading-6 text-slate-500">
                        Ubah data kehadiran, aktivitas, dan transaksi
                        menjadi laporan visual real-time yang lebih
                        mudah dievaluasi.
                    </p>

                </div>

                <!-- CARD 4 -->
                <div
                    class="
                    rounded-2xl
                    border
                    border-slate-100
                    p-7
                    bg-white
                    hover:-translate-y-1
                    hover:shadow-soft
                    transition
                ">

                    <div
                        class="
                        w-12
                        h-12
                        rounded-xl
                        bg-blue-50
                        text-primary-500
                        flex
                        items-center
                        justify-center
                        font-bold
                        text-xl
                    ">
                        04
                    </div>

                    <h3
                        class="
                        mt-6
                        font-heading
                        font-semibold
                        text-xl
                        text-primary-900
                    ">
                        Adaptive & Paperless
                    </h3>

                    <p class="mt-4 text-sm leading-6 text-slate-500">
                        Kurangi proses administrasi manual dengan
                        sistem fleksibel untuk sekolah maupun
                        kebutuhan korporasi.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
BENEFITS
========================= -->

    <section class="py-24 bg-gray-100">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div
                class="
                grid
                lg:grid-cols-2
                gap-16
                items-center
            ">

                <div class="relative">

                    <div
                        class="
                        bg-white
                        rounded-[2rem]
                        p-5
                        shadow-soft
                    ">
                        <img src="{{ asset('image/sec.png') }}" alt="Smart Card KartuPintar"
                            class="rounded-2xl w-full">
                    </div>

                </div>

                <div>

                    <p class="text-primary-500 font-semibold">
                        Satu Sentuhan KartuPintar
                    </p>

                    <h2
                        class="
                        mt-3
                        font-heading
                        font-bold
                        text-3xl
                        lg:text-4xl
                        text-primary-900
                        leading-tight
                    ">
                        Beragam Kemudahan dalam Satu Akses
                    </h2>

                    <div class="mt-9 space-y-6">

                        @php
                            $benefits = [
                                [
                                    'title' => 'Kepraktisan Satu Akses',
                                    'desc' =>
                                        'Aktivitas lebih cepat, efisien, dan teratur hanya dengan satu identitas.',
                                ],
                                [
                                    'title' => 'Transaksi Praktis',
                                    'desc' => 'Pembayaran lebih cepat dan transparan tanpa repot uang tunai.',
                                ],
                                [
                                    'title' => 'Otomatisasi & Paperless',
                                    'desc' => 'Mengurangi birokrasi manual serta pekerjaan administratif berulang.',
                                ],
                                [
                                    'title' => 'Integrasi HRIS & Sistem Sekolah',
                                    'desc' => 'Data dapat terhubung dengan sistem manajemen internal organisasi.',
                                ],
                                [
                                    'title' => 'Pemantauan Real-Time',
                                    'desc' => 'Informasi penting dapat dipantau secara cepat oleh pengelola.',
                                ],
                            ];
                        @endphp

                        @foreach ($benefits as $benefit)
                            <div class="flex gap-4">

                                <span
                                    class="
                                    flex-shrink-0
                                    w-9
                                    h-9
                                    rounded-full
                                    bg-blue-50
                                    text-primary-500
                                    flex
                                    items-center
                                    justify-center
                                ">
                                    ✓
                                </span>

                                <div>
                                    <h3
                                        class="
                                        font-heading
                                        font-semibold
                                        text-primary-900
                                    ">
                                        {{ $benefit['title'] }}
                                    </h3>

                                    <p class="mt-1 text-sm text-slate-500">
                                        {{ $benefit['desc'] }}
                                    </p>
                                </div>

                            </div>
                        @endforeach

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
FEATURES
========================= -->

    <section id="fitur" class="py-24 lg:py-32">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto">

                <p class="text-primary-500 font-semibold">
                    Fitur KartuPintar
                </p>

                <h2
                    class="
                    mt-3
                    font-heading
                    font-bold
                    text-3xl
                    lg:text-4xl
                    text-primary-900
                ">
                    Kenali Fitur Pintar KartuPintar
                </h2>

                <p class="mt-5 text-slate-500">
                    Satu platform untuk mendukung aktivitas operasional
                    pendidikan maupun korporasi.
                </p>

            </div>

            <!-- FEATURE 1 -->
            <div
                class="
                mt-20
                grid
                lg:grid-cols-2
                gap-14
                items-center
            ">

                <div>

                    <span
                        class="
                        inline-block
                        px-4
                        py-2
                        bg-blue-50
                        text-primary-500
                        rounded-full
                        text-sm
                        font-semibold
                    ">
                        E-Presensi
                    </span>

                    <h3
                        class="
                        mt-5
                        font-heading
                        font-bold
                        text-3xl
                        text-primary-900
                    ">
                        Presensi Akurat,
                        Otomatis Terhubung ke Sistem
                    </h3>

                    <p
                        class="
                        mt-5
                        text-slate-500
                        leading-7
                    ">
                        Cukup satu tap untuk mencatat kehadiran secara
                        real-time. Data dapat tersinkronisasi dengan
                        HRIS perusahaan maupun sistem sekolah sekaligus
                        membantu mengurangi proses pencatatan manual.
                    </p>

                    <ul class="mt-7 space-y-3 text-sm">

                        <li class="flex gap-3">
                            <span class="text-primary-500">✓</span>
                            Jam masuk dan kepulangan real-time
                        </li>

                        <li class="flex gap-3">
                            <span class="text-primary-500">✓</span>
                            Rekap harian, mingguan, dan bulanan
                        </li>

                        <li class="flex gap-3">
                            <span class="text-primary-500">✓</span>
                            Notifikasi ke orang tua untuk sekolah
                        </li>

                        <li class="flex gap-3">
                            <span class="text-primary-500">✓</span>
                            Integrasi HRIS dan sistem sekolah
                        </li>

                    </ul>

                </div>

                <div
                    class="
                    bg-gray-100
                    rounded-[2rem]
                    p-8
                ">
                    <img src="{{ asset('image/presensi.png') }}" alt="E-Presensi KartuPintar"
                        class="w-full rounded-xl">
                </div>

            </div>

            <!-- FEATURE 2 -->
            <div
                class="
                mt-28
                grid
                lg:grid-cols-2
                gap-14
                items-center
            ">

                <div
                    class="
                    bg-gray-100
                    rounded-[2rem]
                    p-8
                    lg:order-1
                    order-2
                ">

                    <img src="{{ asset('image/kantin.png') }}" alt="E-Kantin KartuPintar" class="w-full rounded-xl">

                </div>

                <div class="lg:order-2 order-1">

                    <span
                        class="
                        inline-block
                        px-4
                        py-2
                        bg-blue-50
                        text-primary-500
                        rounded-full
                        text-sm
                        font-semibold
                    ">
                        E-Kantin
                    </span>

                    <h3
                        class="
                        mt-5
                        font-heading
                        font-bold
                        text-3xl
                        text-primary-900
                    ">
                        Transaksi Cepat,
                        Praktis, dan Transparan
                    </h3>

                    <p
                        class="
                        mt-5
                        text-slate-500
                        leading-7
                    ">
                        Gunakan satu kartu KartuPintar untuk melakukan
                        pembayaran di kantin sekolah maupun pantry kantor
                        melalui sistem saldo digital.
                    </p>

                    <ul class="mt-7 space-y-3 text-sm">

                        <li class="flex gap-3">
                            <span class="text-primary-500">✓</span>
                            Sistem saldo digital
                        </li>

                        <li class="flex gap-3">
                            <span class="text-primary-500">✓</span>
                            Transaksi cashless
                        </li>

                        <li class="flex gap-3">
                            <span class="text-primary-500">✓</span>
                            Riwayat transaksi
                        </li>

                        <li class="flex gap-3">
                            <span class="text-primary-500">✓</span>
                            Rekap penggunaan saldo
                        </li>

                    </ul>

                </div>

            </div>

            <!-- FEATURE 3 -->
            <div
                class="
                mt-28
                grid
                lg:grid-cols-2
                gap-14
                items-center
            ">

                <div>

                    <span
                        class="
                        inline-block
                        px-4
                        py-2
                        bg-blue-50
                        text-primary-500
                        rounded-full
                        text-sm
                        font-semibold
                    ">
                        Aktivitas & Ibadah
                    </span>

                    <h3
                        class="
                        mt-5
                        font-heading
                        font-bold
                        text-3xl
                        text-primary-900
                    ">
                        Bangun Budaya Positif
                        Setiap Hari
                    </h3>

                    <p
                        class="
                        mt-5
                        text-slate-500
                        leading-7
                    ">
                        KartuPintar membantu sekolah mencatat rutinitas
                        ibadah dan aktivitas karakter siswa agar dapat
                        dievaluasi dengan lebih terarah.
                    </p>

                    <ul class="mt-7 space-y-3 text-sm">

                        <li class="flex gap-3">
                            <span class="text-primary-500">✓</span>
                            Pencatatan rutinitas ibadah
                        </li>

                        <li class="flex gap-3">
                            <span class="text-primary-500">✓</span>
                            Notifikasi real-time
                        </li>

                        <li class="flex gap-3">
                            <span class="text-primary-500">✓</span>
                            Rekap aktivitas
                        </li>

                        <li class="flex gap-3">
                            <span class="text-primary-500">✓</span>
                            Evaluasi aktivitas siswa
                        </li>

                    </ul>

                </div>

                <div
                    class="
                    bg-gray-100
                    rounded-[2rem]
                    p-8
                ">

                    <img src="{{ asset('image/ibadah.png') }}" alt="Pemantauan Ibadah KartuPintar"
                        class="w-full rounded-xl">

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
DASHBOARD
========================= -->

    <section class="py-24 bg-primary-900 overflow-hidden">

        <div
            class="
            max-w-7xl
            mx-auto
            px-6
            lg:px-8
            grid
            lg:grid-cols-2
            gap-16
            items-center
        ">

            <div>

                <span class="text-blue-300 font-semibold">
                    Dashboard Terpadu
                </span>

                <h2
                    class="
                    mt-3
                    font-heading
                    font-bold
                    text-3xl
                    lg:text-4xl
                    text-white
                ">
                    Satu Dashboard untuk
                    Manajemen Lembaga
                </h2>

                <p
                    class="
                    mt-6
                    text-blue-100/80
                    leading-7
                ">
                    Pantau aktivitas, kehadiran, transaksi,
                    hingga rekap aktivitas melalui aplikasi dan
                    website dalam satu ekosistem.
                </p>

                <div
                    class="
                    mt-8
                    grid
                    sm:grid-cols-2
                    gap-4
                ">

                    <div
                        class="
                        bg-white/10
                        border
                        border-white/10
                        rounded-xl
                        p-5
                    ">
                        <p class="text-blue-200 text-sm">
                            Kehadiran
                        </p>

                        <p
                            class="
                            mt-1
                            text-white
                            font-heading
                            font-semibold
                        ">
                            Real-Time Monitoring
                        </p>
                    </div>

                    <div
                        class="
                        bg-white/10
                        border
                        border-white/10
                        rounded-xl
                        p-5
                    ">
                        <p class="text-blue-200 text-sm">
                            Aktivitas
                        </p>

                        <p
                            class="
                            mt-1
                            text-white
                            font-heading
                            font-semibold
                        ">
                            Rekap Otomatis
                        </p>
                    </div>

                </div>

            </div>

            <div>

                <div
                    class="
                    bg-white
                    rounded-[2rem]
                    p-4
                    shadow-2xl
                ">
                    <img src="{{ asset('image/dashboard.png') }}" alt="Dashboard KartuPintar"
                        class="w-full rounded-2xl">
                </div>

            </div>

        </div>

    </section>


    <!-- =========================
SEGMENTS
========================= -->

    <section id="solusi" class="py-24 lg:py-32">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="text-center max-w-2xl mx-auto">

                <p class="text-primary-500 font-semibold">
                    Fleksibel untuk Berbagai Kebutuhan
                </p>

                <h2
                    class="
                    mt-3
                    font-heading
                    font-bold
                    text-3xl
                    lg:text-4xl
                    text-primary-900
                ">
                    KartuPintar untuk Pendidikan dan Korporasi
                </h2>

            </div>

            <div
                class="
                mt-16
                grid
                lg:grid-cols-2
                gap-7
            ">

                <!-- EDUCATION -->
                <div
                    class="
                    relative
                    overflow-hidden
                    rounded-[2rem]
                    bg-primary-900
                    min-h-[480px]
                    p-10
                    flex
                    items-end
                ">

                    <img src="{{ asset('image/sekolah.png') }}" alt=""
                        class="
                        absolute
                        inset-0
                        w-full
                        h-full
                        object-cover
                        opacity-30
                    ">

                    <div
                        class="
                        absolute
                        inset-0
                        bg-gradient-to-t
                        from-primary-900
                        via-primary-900/70
                        to-transparent
                    ">
                    </div>

                    <div class="relative">

                        <span
                            class="
                            text-blue-300
                            text-sm
                            font-semibold
                        ">
                            Institusi Pendidikan
                        </span>

                        <h3
                            class="
                            mt-3
                            text-3xl
                            font-heading
                            font-bold
                            text-white
                        ">
                            Sekolah Lebih Aman,
                            Terhubung, dan Transparan
                        </h3>

                        <p
                            class="
                            mt-4
                            text-blue-100/80
                            max-w-lg
                        ">
                            Presensi siswa, transaksi,
                            aktivitas hingga notifikasi orang tua
                            dalam satu identitas.
                        </p>

                    </div>

                </div>

                <!-- CORPORATE -->
                <div
                    class="
                    relative
                    overflow-hidden
                    rounded-[2rem]
                    bg-primary-700
                    min-h-[480px]
                    p-10
                    flex
                    items-end
                ">

                    <img src="{{ asset('image/corporate.png') }}" alt=""
                        class="
                        absolute
                        inset-0
                        w-full
                        h-full
                        object-cover
                        opacity-30
                    ">

                    <div
                        class="
                        absolute
                        inset-0
                        bg-gradient-to-t
                        from-primary-900
                        via-primary-900/70
                        to-transparent
                    ">
                    </div>

                    <div class="relative">

                        <span
                            class="
                            text-blue-100
                            text-sm
                            font-semibold
                        ">
                            Korporasi & Industri
                        </span>

                        <h3
                            class="
                            mt-3
                            text-3xl
                            font-heading
                            font-bold
                            text-white
                        ">
                            Operasional Lebih Efisien,
                            Data Lebih Terukur
                        </h3>

                        <p
                            class="
                            mt-4
                            text-white/80
                            max-w-lg
                        ">
                            Presensi karyawan, integrasi HRIS,
                            manajemen aktivitas, dan monitoring
                            operasional secara terintegrasi.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
TESTIMONIALS
========================= -->

    <section id="testimoni"
        class="
        relative
        overflow-hidden
        py-20
        lg:py-28
        bg-primary-900
    ">

        <!-- DECORATIVE GLOW -->
        <div
            class="
            absolute
            -top-40
            -right-32
            w-[500px]
            h-[500px]
            rounded-full
            bg-primary-500/20
            blur-3xl
            pointer-events-none
        ">
        </div>

        <div
            class="
            absolute
            -bottom-48
            -left-32
            w-[450px]
            h-[450px]
            rounded-full
            bg-blue-400/10
            blur-3xl
            pointer-events-none
        ">
        </div>


        <div
            class="
            relative
            max-w-7xl
            mx-auto
            px-6
            lg:px-8
        ">

            <!-- =========================
        HEADER
        ========================= -->
            <div
                class="
                flex
                flex-col
                lg:flex-row
                lg:items-end
                justify-between
                gap-8
            ">

                <div class="max-w-3xl">

                    <div
                        class="
                        inline-flex
                        items-center
                        gap-2
                        text-blue-300
                        text-sm
                        font-semibold
                    ">

                        <span
                            class="
                            w-2
                            h-2
                            rounded-full
                            bg-primary-500
                        "></span>

                        Cerita Pengguna

                    </div>


                    <h2
                        class="
                        mt-4
                        font-heading
                        font-bold
                        text-3xl
                        sm:text-4xl
                        lg:text-5xl
                        text-white
                        leading-tight
                    ">
                        Dipercaya untuk Membantu
                        <span class="text-blue-300">
                            Operasional Lebih Sederhana.
                        </span>
                    </h2>


                    <p
                        class="
                        mt-5
                        text-blue-100/70
                        leading-7
                        max-w-2xl
                    ">
                        Dengarkan pengalaman institusi dalam
                        memanfaatkan teknologi KartuPintar untuk mendukung
                        presensi, transaksi, dan pengelolaan aktivitas.
                    </p>

                </div>


                <!-- RATING / TRUST -->
                <div
                    class="
                    flex
                    items-center
                    gap-4
                    px-5
                    py-4
                    rounded-2xl
                    bg-white/10
                    border
                    border-white/10
                    backdrop-blur
                ">

                    <div>

                        <div class="flex gap-1 text-yellow-300">
                            ★
                            ★
                            ★
                            ★
                            ★
                        </div>

                        <p class="mt-1 text-xs text-blue-100/60">
                            Kepuasan pengguna
                        </p>

                    </div>

                </div>

            </div>



            <!-- =========================
        TESTIMONIAL CARDS
        ========================= -->
            <div
                class="
                mt-14
                grid
                md:grid-cols-2
                lg:grid-cols-3
                gap-6
            ">


                <!-- =========================
            TESTIMONIAL 1
            ========================= -->
                <article
                    class="
                    relative
                    flex
                    flex-col
                    min-h-[330px]
                    p-7
                    lg:p-8
                    rounded-3xl
                    bg-white
                    border
                    border-white/10
                    shadow-xl
                    shadow-black/5
                ">

                    <!-- QUOTE -->
                    <div
                        class="
                        text-6xl
                        leading-none
                        font-serif
                        text-blue-100
                    ">
                        “
                    </div>


                    <!-- REVIEW -->
                    <p
                        class="
                        -mt-2
                        text-slate-600
                        leading-7
                    ">
                        KartuPintar membantu proses presensi menjadi
                        lebih terstruktur dan memudahkan kami
                        dalam melihat informasi kehadiran secara cepat.
                    </p>


                    <!-- USER -->
                    <div
                        class="
                        mt-auto
                        pt-8
                        border-t
                        border-slate-100
                    ">

                        <div class="flex items-center gap-4">

                            <!-- AVATAR -->
                            <div
                                class="
                                w-12
                                h-12
                                flex-shrink-0
                                rounded-full
                                bg-blue-50
                                text-primary-700
                                flex
                                items-center
                                justify-center
                                font-heading
                                font-bold
                            ">
                                AP
                            </div>


                            <div>

                                <!-- GANTI DENGAN DATA ASLI -->
                                <h4
                                    class="
                                    font-heading
                                    font-semibold
                                    text-primary-900
                                ">
                                    Ali Pulaila, M.Pd
                                </h4>

                                <p
                                    class="
                                    mt-1
                                    text-xs
                                    text-slate-400
                                ">
                                    Kepala Sekolah • SMAN 3 RAMBAH
                                </p>

                            </div>

                        </div>

                    </div>

                </article>



                <!-- =========================
            TESTIMONIAL 2
            ========================= -->
                <article
                    class="
                    relative
                    flex
                    flex-col
                    min-h-[330px]
                    p-7
                    lg:p-8
                    rounded-3xl
                    bg-white
                    border
                    border-white/10
                    shadow-xl
                    shadow-black/5
                ">

                    <div
                        class="
                        text-6xl
                        leading-none
                        font-serif
                        text-blue-100
                    ">
                        “
                    </div>


                    <p
                        class="
                        -mt-2
                        text-slate-600
                        leading-7
                    ">
                        Dengan satu sistem, pengelolaan aktivitas
                        dan data menjadi lebih praktis.
                        Tim kami juga lebih mudah melakukan evaluasi.
                    </p>


                    <div
                        class="
                        mt-auto
                        pt-8
                        border-t
                        border-slate-100
                    ">

                        <div class="flex items-center gap-4">

                            <div
                                class="
                                w-12
                                h-12
                                flex-shrink-0
                                rounded-full
                                bg-blue-50
                                text-primary-700
                                flex
                                items-center
                                justify-center
                                font-heading
                                font-bold
                            ">
                                NH
                            </div>


                            <div>

                                <h4
                                    class="
                                    font-heading
                                    font-semibold
                                    text-primary-900
                                ">
                                    Nina Herlina, M.Pd
                                </h4>

                                <p
                                    class="
                                    mt-1
                                    text-xs
                                    text-slate-400
                                ">
                                    Kepala Sekolah • SMAIT AL-MULTAZAM
                                </p>

                            </div>

                        </div>

                    </div>

                </article>



                <!-- =========================
            TESTIMONIAL 3
            ========================= -->
                <article
                    class="
                    relative
                    flex
                    flex-col
                    min-h-[330px]
                    p-7
                    lg:p-8
                    rounded-3xl
                    bg-white
                    border
                    border-white/10
                    shadow-xl
                    shadow-black/5
                ">

                    <div
                        class="
                        text-6xl
                        leading-none
                        font-serif
                        text-blue-100
                    ">
                        “
                    </div>


                    <p
                        class="
                        -mt-2
                        text-slate-600
                        leading-7
                    ">
                        Proses penggunaan sistem mudah dipahami
                        dan informasi yang kami perlukan dapat
                        dipantau dalam satu ekosistem yang terintegrasi.
                    </p>


                    <div
                        class="
                        mt-auto
                        pt-8
                        border-t
                        border-slate-100
                    ">

                        <div class="flex items-center gap-4">

                            <div
                                class="
                                w-12
                                h-12
                                flex-shrink-0
                                rounded-full
                                bg-blue-50
                                text-primary-700
                                flex
                                items-center
                                justify-center
                                font-heading
                                font-bold
                            ">
                                DM
                            </div>


                            <div>

                                <h4
                                    class="
                                    font-heading
                                    font-semibold
                                    text-primary-900
                                ">
                                    Dian Maolida Utami, S.Si
                                </h4>

                                <p
                                    class="
                                    mt-1
                                    text-xs
                                    text-slate-400
                                ">
                                    Kesiswaan • SMPIT Al-Multazam
                                </p>

                            </div>

                        </div>

                    </div>

                </article>

            </div>



            <!-- =========================
        TESTIMONIAL FOOTER
        ========================= -->
            <div
                class="
                mt-10
                flex
                flex-col
                sm:flex-row
                items-center
                justify-between
                gap-5
                text-center
                sm:text-left
            ">

                <p class="
                    text-sm
                    text-blue-100/60
                ">
                    Satu Identitas, Beragam Kemudahan untuk operasional institusi Anda.
                </p>


                <a href="/free-trial"
                    class="
                    inline-flex
                    items-center
                    gap-2
                    text-sm
                    font-semibold
                    text-white
                    hover:text-blue-300
                    transition
                ">
                    Rasakan KartuPintar Sekarang

                    <span>→</span>
                </a>

            </div>

        </div>

    </section>


    <!-- =========================
ABOUT
========================= -->

    <section id="tentang" class="py-24 bg-gray-100">

        <div
            class="
            max-w-7xl
            mx-auto
            px-6
            lg:px-8
            grid
            lg:grid-cols-[.8fr_1.2fr]
            gap-16
        ">

            <div>

                <p class="text-primary-900 font-semibold">
                    Lebih Jauh Tentang Kami
                </p>

                <h2
                    class="
                    mt-3
                    font-heading
                    font-bold
                    text-3xl
                    lg:text-4xl
                    text-primary-900
                ">
                    Teknologi untuk Tata Kelola yang Lebih Cerdas
                </h2>

            </div>

            <div
                class="
                space-y-5
                text-slate-600
                leading-8
            ">

                <p>
                    <strong class="text-primary-900">
                        KartuPintar lahir dari semangat inovasi
                        PT. Alvarel Digdaya Nusantara
                    </strong>,
                    sebuah perusahaan teknologi yang berfokus
                    pada transformasi digital.
                </p>

                <p>
                    Berbekal pengalaman dalam pengembangan solusi
                    digital untuk institusi pendidikan, KartuPintar
                    dikembangkan untuk menjawab kebutuhan
                    pengelolaan identitas, aktivitas, dan data
                    yang juga relevan bagi organisasi dan korporasi.
                </p>

                <p>
                    KartuPintar menyatukan teknologi identitas pintar,
                    presensi, otomatisasi data, transaksi,
                    dan pemantauan melalui satu ekosistem
                    terintegrasi.
                </p>



            </div>

        </div>

    </section>


    <!-- =========================
FREE TRIAL CTA
========================= -->

    <section id="coba-gratis" class="py-20 lg:py-24">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div
                class="
                relative
                overflow-hidden
                rounded-[2.5rem]
                bg-primary-900
                px-8
                py-14
                lg:px-20
                lg:py-20
            ">

                <!-- GLOW -->
                <div
                    class="
                    absolute
                    w-96
                    h-96
                    bg-primary-700/30
                    rounded-full
                    blur-3xl
                    -top-40
                    -right-20
                ">
                </div>

                <div
                    class="
                    absolute
                    w-72
                    h-72
                    bg-blue-400/10
                    rounded-full
                    blur-3xl
                    -bottom-32
                    -left-20
                ">
                </div>

                <div
                    class="
                    relative
                    grid
                    lg:grid-cols-[1fr_auto]
                    gap-10
                    lg:gap-16
                    items-center
                ">

                    <!-- CONTENT -->
                    <div>

                        <span
                            class="
                            inline-flex
                            items-center
                            px-4
                            py-2
                            rounded-full
                            bg-white/10
                            border
                            border-white/10
                            text-blue-200
                            text-sm
                            font-semibold
                        ">
                            Gratis 14 Hari
                        </span>

                        <h2
                            class="
                            mt-5
                            font-heading
                            font-bold
                            text-3xl
                            lg:text-5xl
                            text-white
                            leading-tight
                        ">
                            Rasakan Langsung
                            Kemudahan KartuPintar
                        </h2>

                        <p
                            class="
                            mt-5
                            text-blue-100/80
                            leading-7
                            max-w-2xl
                        ">
                            Ajukan uji coba KartuPintar untuk institusi Anda.
                            Tim kami akan melakukan peninjauan dan mengirimkan
                            akun uji coba setelah pengajuan disetujui.
                        </p>

                        <div
                            class="
                            mt-7
                            flex
                            flex-wrap
                            gap-x-6
                            gap-y-3
                            text-sm
                            text-blue-100/80
                        ">
                            <span>✓ Trial 14 Hari</span>
                            <span>✓ Tanpa Biaya</span>
                            <span>✓ Akun Institusi</span>
                            <span>✓ Dibantu Tim KartuPintar</span>
                        </div>

                    </div>

                    <!-- BUTTONS -->
                    <div
                        class="
                        flex
                        flex-col
                        gap-3
                        lg:min-w-[240px]
                    ">

                        <a href="/free-trial"
                            class="
                            inline-flex
                            items-center
                            justify-center
                            gap-2
                            px-7
                            py-4
                            bg-primary-700
                            text-white
                            rounded-xl
                            font-semibold
                            hover:bg-primary-800
                            transition
                            shadow-xl
                            shadow-blue-900/20
                        ">
                            Coba KartuPintar Gratis
                            <span>→</span>
                        </a>

                        <a href="https://wa.me/6285117377855?text={{ urlencode('Halo Admin KartuPintar, saya ingin berkonsultasi mengenai KartuPintar.') }}"
                            target="_blank" rel="noopener noreferrer"
                            class="
                            inline-flex
                            items-center
                            justify-center
                            gap-2
                            px-7
                            py-4
                            bg-white/10
                            border
                            border-white/10
                            text-white
                            rounded-xl
                            font-semibold
                            hover:bg-white/20
                            transition
                        ">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5 text-green-400">
                                <path
                                    d="M12.04 2C6.55 2 2.1 6.45 2.1 11.94c0 1.75.46 3.46 1.33 4.96L2 22l5.22-1.37a9.9 9.9 0 004.81 1.23h.01c5.49 0 9.94-4.45 9.94-9.94A9.93 9.93 0 0012.04 2zm5.79 14.05c-.24.68-1.43 1.3-1.97 1.38-.5.08-1.13.12-1.83-.12-.42-.13-.96-.31-1.65-.61-2.91-1.26-4.8-4.19-4.95-4.38-.14-.19-1.18-1.57-1.18-3 0-1.43.75-2.14 1.02-2.43.27-.29.59-.36.78-.36h.57c.18 0 .43-.07.67.51.24.58.82 2 .89 2.14.07.14.12.31.02.5-.09.19-.14.31-.29.48-.14.17-.3.38-.43.51-.14.14-.29.29-.12.58.17.29.76 1.25 1.63 2.02 1.12 1 2.07 1.31 2.36 1.46.29.14.46.12.63-.07.17-.19.72-.84.92-1.13.19-.29.39-.24.65-.14.27.1 1.69.8 1.98.94.29.14.48.22.55.34.07.12.07.7-.17 1.38z" />
                            </svg>

                            Hubungi WhatsApp
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
FOOTER
========================= -->

    <footer class="bg-primary-900 pt-16 pb-8 text-white">

        <div
            class="
            max-w-7xl
            mx-auto
            px-6
            lg:px-8
            grid
            md:grid-cols-2
            lg:grid-cols-[1.3fr_.7fr_.8fr_1.2fr]
            gap-10
            lg:gap-12
        ">

            <!-- BRAND -->
            <div>

                <img src="{{ asset('logo/logo-kartupintar-white.png') }}" alt="KartuPintar" class="h-20">

                <p
                    class="
                    mt-5
                    text-blue-100/70
                    max-w-sm
                    leading-7
                ">
                    Infrastruktur Identitas Cerdas Terintegrasi
                    untuk pendidikan dan korporasi.
                </p>

                <p
                    class="
                    mt-3
                    text-sm
                    font-medium
                    text-blue-200
                ">
                    Satu Identitas, Akses Tanpa Batas.
                </p>

            </div>

            <!-- NAVIGASI -->
            <div>

                <h4 class="font-heading font-semibold">
                    Navigasi
                </h4>

                <div
                    class="
                    mt-5
                    space-y-3
                    text-sm
                    text-blue-100/70
                ">

                    <a href="#keunggulan" class="block hover:text-white transition">
                        Mengapa KartuPintar
                    </a>

                    <a href="#fitur" class="block hover:text-white transition">
                        Fitur
                    </a>

                    <a href="#solusi" class="block hover:text-white transition">
                        Solusi
                    </a>

                    <a href="#tentang" class="block hover:text-white transition">
                        Tentang Kami
                    </a>

                </div>

            </div>

            <!-- SOLUSI -->
            <div>

                <h4 class="font-heading font-semibold">
                    Solusi
                </h4>

                <div
                    class="
                    mt-5
                    space-y-3
                    text-sm
                    text-blue-100/70
                ">

                    <a href="#fitur" class="block hover:text-white transition">
                        E-Presensi
                    </a>

                    <a href="#fitur" class="block hover:text-white transition">
                        E-Kantin
                    </a>

                    <a href="#fitur" class="block hover:text-white transition">
                        Aktivitas & Ibadah
                    </a>

                    <a href="#fitur" class="block hover:text-white transition">
                        HRIS Integration
                    </a>

                </div>

            </div>

            <!-- CONTACT -->
            <div>

                <h4 class="font-heading font-semibold">
                    Hubungi Kami
                </h4>

                <div class="mt-5 space-y-4">

                    <!-- WHATSAPP -->
                    <a href="https://wa.me/6285117377855?text={{ urlencode('Halo Admin KartuPintar, saya ingin mengetahui lebih lanjut tentang KartuPintar.') }}"
                        target="_blank" rel="noopener noreferrer"
                        class="
                        flex
                        items-start
                        gap-3
                        group
                    ">

                        <div
                            class="
                            w-9
                            h-9
                            shrink-0
                            rounded-lg
                            bg-white/10
                            flex
                            items-center
                            justify-center
                        ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5 text-green-400">
                                <path
                                    d="M12.04 2C6.55 2 2.1 6.45 2.1 11.94c0 1.75.46 3.46 1.33 4.96L2 22l5.22-1.37a9.9 9.9 0 004.81 1.23h.01c5.49 0 9.94-4.45 9.94-9.94A9.93 9.93 0 0012.04 2zm5.79 14.05c-.24.68-1.43 1.3-1.97 1.38-.5.08-1.13.12-1.83-.12-.42-.13-.96-.31-1.65-.61-2.91-1.26-4.8-4.19-4.95-4.38-.14-.19-1.18-1.57-1.18-3 0-1.43.75-2.14 1.02-2.43.27-.29.59-.36.78-.36h.57c.18 0 .43-.07.67.51.24.58.82 2 .89 2.14.07.14.12.31.02.5-.09.19-.14.31-.29.48-.14.17-.3.38-.43.51-.14.14-.29.29-.12.58.17.29.76 1.25 1.63 2.02 1.12 1 2.07 1.31 2.36 1.46.29.14.46.12.63-.07.17-.19.72-.84.92-1.13.19-.29.39-.24.65-.14.27.1 1.69.8 1.98.94.29.14.48.22.55.34.07.12.07.7-.17 1.38z" />
                            </svg>
                        </div>

                        <div>

                            <p class="text-xs text-blue-100/50">
                                WhatsApp
                            </p>

                            <p
                                class="
                                mt-0.5
                                text-sm
                                text-blue-100/80
                                group-hover:text-white
                                transition
                            ">
                                +62 851-173-778-55
                            </p>

                        </div>

                    </a>

                    <!-- EMAIL -->
                    <a href="mailto:identas.id@gmail.com"
                        class="
                        flex
                        items-start
                        gap-3
                        group
                    ">

                        <div
                            class="
                            w-9
                            h-9
                            shrink-0
                            rounded-lg
                            bg-white/10
                            flex
                            items-center
                            justify-center
                            text-blue-200
                        ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 8l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>

                        <div>

                            <p class="text-xs text-blue-100/50">
                                Email
                            </p>

                            <p
                                class="
                                mt-0.5
                                text-sm
                                text-blue-100/80
                                group-hover:text-white
                                transition
                            ">
                                identas.id@gmail.com
                            </p>

                        </div>

                    </a>

                    <!-- ADDRESS -->
                    <div
                        class="
                        flex
                        items-start
                        gap-3
                    ">

                        <div
                            class="
                            w-9
                            h-9
                            shrink-0
                            rounded-lg
                            bg-white/10
                            flex
                            items-center
                            justify-center
                            text-blue-200
                        ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>

                        <div>

                            <p class="text-xs text-blue-100/50">
                                Kantor
                            </p>

                            <p
                                class="
                                mt-0.5
                                text-sm
                                leading-6
                                text-blue-100/80
                            ">
                                Cirebon, Jawa Barat
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- COPYRIGHT -->
        <div
            class="
            max-w-7xl
            mx-auto
            px-6
            lg:px-8
            mt-14
            pt-8
            border-t
            border-white/10
            flex
            flex-col
            sm:flex-row
            gap-3
            justify-between
            text-sm
            text-blue-100/50
        ">

            <p>
                © 2026 KartuPintar — PT. Alvarel Digdaya Nusantara.
            </p>

            <p>
                All Rights Reserved.
            </p>

        </div>

    </footer>


    <!-- =========================
JAVASCRIPT
========================= -->

    <script>
        const mobileMenuButton =
            document.getElementById('mobileMenuButton');

        const mobileMenu =
            document.getElementById('mobileMenu');

        const menuIcon =
            document.getElementById('menuIcon');

        const closeIcon =
            document.getElementById('closeIcon');

        const mobileNavLinks =
            document.querySelectorAll('.mobile-nav-link');


        function toggleMobileMenu() {

            const isOpen = !mobileMenu.classList.contains('hidden');

            mobileMenu.classList.toggle('hidden');

            menuIcon.classList.toggle('hidden');

            closeIcon.classList.toggle('hidden');

            mobileMenuButton.setAttribute(
                'aria-expanded',
                !isOpen
            );
        }


        mobileMenuButton.addEventListener(
            'click',
            toggleMobileMenu
        );


        // Tutup menu setelah user klik menu
        mobileNavLinks.forEach(link => {

            link.addEventListener('click', () => {

                mobileMenu.classList.add('hidden');

                menuIcon.classList.remove('hidden');

                closeIcon.classList.add('hidden');

                mobileMenuButton.setAttribute(
                    'aria-expanded',
                    'false'
                );

            });

        });


        // Tutup menu jika resize ke desktop
        window.addEventListener('resize', () => {

            if (window.innerWidth >= 1024) {

                mobileMenu.classList.add('hidden');

                menuIcon.classList.remove('hidden');

                closeIcon.classList.add('hidden');

                mobileMenuButton.setAttribute(
                    'aria-expanded',
                    'false'
                );

            }

        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>


</body>

</html>
