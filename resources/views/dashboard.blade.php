@extends('layouts.app')

@section('title', 'Daftar Klien Free Trial')

@section('content')

<main>

    <!-- HEADER -->
    <div
        class="
            pt-5
            flex
            flex-col
            sm:flex-row
            sm:items-center
            sm:justify-between
            gap-4
            mb-5
        "
    >

        <div>

            <h1
                class="
                    text-2xl
                    font-semibold
                    text-gray-900
                    dark:text-white
                "
            >
                Daftar Klien Free Trial
            </h1>

            <p class="mt-1 text-sm text-gray-500">
                Kelola seluruh pengajuan uji coba gratis IDENTAS.
            </p>

        </div>

    </div>


    <!-- SUMMARY CARD -->
    <div
        class="
            grid
            grid-cols-1
            sm:grid-cols-2
            lg:grid-cols-4
            gap-4
            mb-6
        "
    >

        <!-- TOTAL -->
        <div
            class="
                bg-white
                border
                border-gray-200
                rounded-xl
                p-5
                shadow-sm
            "
        >

            <p class="text-sm text-gray-500">
                Total Pengajuan
            </p>

            <p
                class="
                    mt-2
                    text-2xl
                    font-bold
                    text-gray-900
                "
            >
                {{ $trialRequests->total() }}
            </p>

        </div>


        <!-- PENDING -->
        <div
            class="
                bg-white
                border
                border-gray-200
                rounded-xl
                p-5
                shadow-sm
            "
        >

            <p class="text-sm text-gray-500">
                Pending
            </p>

            <p
                class="
                    mt-2
                    text-2xl
                    font-bold
                    text-yellow-600
                "
            >
                {{ \App\Models\TrialRequest::where('status', 'pending')->count() }}
            </p>

        </div>


        <!-- APPROVED -->
        <div
            class="
                bg-white
                border
                border-gray-200
                rounded-xl
                p-5
                shadow-sm
            "
        >

            <p class="text-sm text-gray-500">
                Approved
            </p>

            <p
                class="
                    mt-2
                    text-2xl
                    font-bold
                    text-green-600
                "
            >
                {{ \App\Models\TrialRequest::where('status', 'approved')->count() }}
            </p>

        </div>


        <!-- REJECTED -->
        <div
            class="
                bg-white
                border
                border-gray-200
                rounded-xl
                p-5
                shadow-sm
            "
        >

            <p class="text-sm text-gray-500">
                Rejected
            </p>

            <p
                class="
                    mt-2
                    text-2xl
                    font-bold
                    text-red-600
                "
            >
                {{ \App\Models\TrialRequest::where('status', 'rejected')->count() }}
            </p>

        </div>

    </div>


    <!-- FILTER -->
    <div
        class="
            flex
            flex-col
            lg:flex-row
            lg:items-center
            lg:justify-between
            gap-4
            mb-5
        "
    >

        <!-- LEFT FILTER -->
        <div class="flex flex-wrap items-center gap-3">

            <!-- PER PAGE -->
            <select
                onchange="updatePerPage(this.value)"
                class="
                    h-11
                    px-4
                    bg-white
                    border
                    border-gray-200
                    rounded-xl
                    text-sm
                    text-gray-700
                    focus:ring-4
                    focus:ring-primary-100
                    focus:border-primary-500
                "
            >

                @foreach([10,25,50,100] as $size)

                    <option
                        value="{{ $size }}"
                        {{ request('per_page', 10) == $size ? 'selected' : '' }}
                    >
                        {{ $size }}
                    </option>

                @endforeach

            </select>


            <!-- STATUS -->
            <select
                onchange="filterStatus(this.value)"
                class="
                    h-11
                    px-8
                    bg-white
                    border
                    border-gray-200
                    rounded-xl
                    text-sm
                    text-gray-700
                    focus:ring-4
                    focus:ring-primary-100
                    focus:border-primary-500
                "
            >

                <option value="">
                    Semua Status
                </option>

                <option
                    value="pending"
                    {{ request('status') == 'pending' ? 'selected' : '' }}
                >
                    Pending
                </option>

                <option
                    value="approved"
                    {{ request('status') == 'approved' ? 'selected' : '' }}
                >
                    Approved
                </option>

                <option
                    value="rejected"
                    {{ request('status') == 'rejected' ? 'selected' : '' }}
                >
                    Rejected
                </option>

            </select>

        </div>


        <!-- SEARCH -->
        <div class="relative flex w-full lg:w-96">

            <div class="relative flex-1">

                <svg
                    class="
                        absolute
                        left-4
                        top-1/2
                        -translate-y-1/2
                        w-5
                        h-5
                        text-gray-400
                    "
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m21 21-4.35-4.35M10.5 18a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15Z"
                    />
                </svg>

                <input
                    id="search-input"
                    value="{{ request('search') }}"
                    placeholder="Cari..."
                    class="
                        w-full
                        h-11
                        rounded-l-xl
                        border
                        border-gray-300
                        border-r-0
                        pl-11
                        pr-4
                        text-sm
                        focus:outline-none
                        focus:border-primary-500
                        focus:ring-4
                        focus:ring-primary-100
                    "
                    onkeypress="if(event.key === 'Enter') searchTable()"
                >

            </div>

            <button
                onclick="searchTable()"
                class="
                    h-11
                    px-6
                    rounded-r-xl
                    bg-primary-600
                    hover:bg-primary-700
                    border
                    border-primary-600
                    text-white
                    text-sm
                    font-medium
                    cursor-pointer
                "
            >
                Cari
            </button>

        </div>

    </div>


    <!-- TABLE -->
    <div class="flex flex-col">

        <div class="overflow-x-auto">

            <div class="inline-block min-w-full align-middle">

                <div
                    class="
                        overflow-hidden
                        shadow
                        bg-white
                        rounded-xl
                        border
                        border-gray-200
                    "
                >

                    <table class="w-full text-sm text-left">

                        <thead>

                            <tr
                                class="
                                    bg-slate-200
                                    dark:bg-gray-700
                                "
                            >

                                <th
                                    class="
                                        px-4
                                        py-3
                                        text-xs
                                        font-bold
                                        text-gray-600
                                        uppercase
                                        tracking-wider
                                    "
                                >
                                    #
                                </th>

                                <th
                                    class="
                                        px-4
                                        py-3
                                        text-xs
                                        font-bold
                                        text-gray-600
                                        uppercase
                                        tracking-wider
                                        min-w-[220px]
                                    "
                                >
                                    Lembaga
                                </th>

                                <th
                                    class="
                                        px-4
                                        py-3
                                        text-xs
                                        font-bold
                                        text-gray-600
                                        uppercase
                                        tracking-wider
                                    "
                                >
                                    Jenjang
                                </th>

                                <th
                                    class="
                                        px-4
                                        py-3
                                        text-xs
                                        font-bold
                                        text-gray-600
                                        uppercase
                                        tracking-wider
                                        text-center
                                    "
                                >
                                    Murid
                                </th>

                                <th
                                    class="
                                        px-4
                                        py-3
                                        text-xs
                                        font-bold
                                        text-gray-600
                                        uppercase
                                        tracking-wider
                                        min-w-[220px]
                                    "
                                >
                                    PIC
                                </th>

                                <th
                                    class="
                                        px-4
                                        py-3
                                        text-xs
                                        font-bold
                                        text-gray-600
                                        uppercase
                                        tracking-wider
                                    "
                                >
                                    Pengajuan
                                </th>

                                <th
                                    class="
                                        px-4
                                        py-3
                                        text-xs
                                        font-bold
                                        text-gray-600
                                        uppercase
                                        tracking-wider
                                    "
                                >
                                    Status
                                </th>

                                <th
                                    class="
                                        px-4
                                        py-3
                                        text-xs
                                        font-bold
                                        text-gray-600
                                        uppercase
                                        tracking-wider
                                    "
                                >
                                    Reviewer
                                </th>

                                <th
                                    class="
                                        px-4
                                        py-3
                                        text-xs
                                        font-bold
                                        text-gray-600
                                        uppercase
                                        tracking-wider
                                        text-center
                                    "
                                >
                                    Aksi
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            @forelse($trialRequests as $trial)

                                @php

                                    $statusMap = [

                                        'pending' => [
                                            'bg-yellow-100 text-yellow-700',
                                            'bg-yellow-500',
                                            'Pending'
                                        ],

                                        'approved' => [
                                            'bg-green-100 text-green-700',
                                            'bg-green-500',
                                            'Approved'
                                        ],

                                        'rejected' => [
                                            'bg-red-100 text-red-700',
                                            'bg-red-500',
                                            'Rejected'
                                        ],

                                    ];

                                    [
                                        $badgeClass,
                                        $dotClass,
                                        $statusLabel
                                    ] = $statusMap[$trial->status];

                                @endphp


                                <tr
                                    class="
                                        border-b
                                        border-gray-200
                                        hover:bg-gray-50
                                        dark:hover:bg-gray-700
                                        transition
                                    "
                                >

                                    <!-- NO -->
                                    <td
                                        class="
                                            px-4
                                            py-4
                                            text-xs
                                            text-gray-400
                                        "
                                    >
                                        {{ $trialRequests->firstItem() + $loop->index }}
                                    </td>


                                    <!-- LEMBAGA -->
                                    <td class="px-4 py-4">

                                        <div
                                            class="
                                                font-semibold
                                                text-gray-900
                                            "
                                        >
                                            {{ $trial->nama_lembaga }}
                                        </div>

                                        @if($trial->alamat)

                                            <div
                                                class="
                                                    mt-1
                                                    text-xs
                                                    text-gray-500
                                                    max-w-[250px]
                                                    truncate
                                                "
                                                title="{{ $trial->alamat }}"
                                            >
                                                {{ $trial->alamat }}
                                            </div>

                                        @endif


                                        @if($trial->client_id)

                                            <div class="mt-2">

                                                <span
                                                    class="
                                                        inline-flex
                                                        px-2
                                                        py-0.5
                                                        rounded-full
                                                        text-[10px]
                                                        font-medium
                                                        bg-blue-100
                                                        text-blue-700
                                                    "
                                                >
                                                    Client ID:
                                                    {{ $trial->client_id }}
                                                </span>

                                            </div>

                                        @endif

                                    </td>


                                    <!-- TYPE / JENJANG -->
                                    <td class="px-4 py-4">

                                        <div
                                            class="
                                                text-sm
                                                font-medium
                                                text-gray-800
                                            "
                                        >
                                            {{ $trial->clientType?->nama ?? '-' }}
                                        </div>

                                        <div
                                            class="
                                                mt-1
                                                text-xs
                                                text-gray-500
                                            "
                                        >
                                            {{ $trial->jenjang }}
                                        </div>

                                    </td>


                                    <!-- JUMLAH -->
                                    <td
                                        class="
                                            px-4
                                            py-4
                                            text-center
                                        "
                                    >

                                        <div
                                            class="
                                                font-semibold
                                                text-gray-800
                                            "
                                        >
                                            {{ number_format(
                                                $trial->jumlah_murid,
                                                0,
                                                ',',
                                                '.'
                                            ) }}
                                        </div>

                                        <div
                                            class="
                                                text-xs
                                                text-gray-400
                                                mt-1
                                            "
                                        >
                                            siswa
                                        </div>

                                    </td>


                                    <!-- PIC -->
                                    <td class="px-4 py-4">

                                        <div
                                            class="
                                                font-medium
                                                text-gray-900
                                            "
                                        >
                                            {{ $trial->nama }}
                                        </div>

                                        <div
                                            class="
                                                mt-1
                                                text-xs
                                                text-gray-500
                                            "
                                        >
                                            {{ $trial->email }}
                                        </div>

                                        <a
                                            href="https://wa.me/{{ preg_replace('/^0/', '62', $trial->nomor_handphone) }}"
                                            target="_blank"
                                            class="
                                                mt-1
                                                inline-flex
                                                items-center
                                                gap-1
                                                text-xs
                                                text-green-600
                                                hover:text-green-700
                                            "
                                        >
                                            {{ $trial->nomor_handphone }}
                                        </a>

                                    </td>


                                    <!-- DATE -->
                                    <td class="px-4 py-4">

                                        <div
                                            class="
                                                text-sm
                                                text-gray-700
                                            "
                                        >
                                            {{ $trial->created_at->format('d M Y') }}
                                        </div>

                                        <div
                                            class="
                                                mt-1
                                                text-xs
                                                text-gray-400
                                            "
                                        >
                                            {{ $trial->created_at->format('H:i') }}
                                        </div>

                                    </td>


                                    <!-- STATUS -->
                                    <td class="px-4 py-4">

                                        <span
                                            class="
                                                inline-flex
                                                items-center
                                                gap-1.5
                                                px-2.5
                                                py-1
                                                rounded-full
                                                text-xs
                                                font-medium
                                                {{ $badgeClass }}
                                            "
                                        >

                                            <span
                                                class="
                                                    w-1.5
                                                    h-1.5
                                                    rounded-full
                                                    {{ $dotClass }}
                                                "
                                            ></span>

                                            {{ $statusLabel }}

                                        </span>

                                    </td>


                                    <!-- REVIEWER -->
                                    <td class="px-4 py-4">

                                        @if($trial->reviewer)

                                            <div
                                                class="
                                                    text-sm
                                                    font-medium
                                                    text-gray-700
                                                "
                                            >
                                                {{ $trial->reviewer->name }}
                                            </div>

                                        @else

                                            <span
                                                class="
                                                    text-xs
                                                    text-gray-400
                                                    italic
                                                "
                                            >
                                                Belum direview
                                            </span>

                                        @endif

                                    </td>


                                    <!-- ACTION -->
                                    <td
                                        class="
                                            px-4
                                            py-4
                                            text-center
                                        "
                                    >

                                        <button
                                            id="trialDropdown{{ $trial->id }}Button"
                                            data-dropdown-toggle="trialDropdown{{ $trial->id }}"
                                            data-dropdown-trigger="click"
                                            type="button"
                                            class="
                                                inline-flex
                                                items-center
                                                justify-center
                                                w-9
                                                h-9
                                                rounded-lg
                                                hover:bg-gray-100
                                                text-gray-700
                                                cursor-pointer
                                            "
                                        >

                                            <svg
                                                class="w-5 h-5"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-width="2"
                                                    d="M12 6h.01M12 12h.01M12 18h.01"
                                                />
                                            </svg>

                                        </button>


                                        <!-- DROPDOWN -->
                                        <div
                                            id="trialDropdown{{ $trial->id }}"
                                            class="
                                                z-50
                                                hidden
                                                bg-white
                                                border
                                                border-gray-200
                                                rounded-lg
                                                shadow-lg
                                                w-44
                                            "
                                        >

                                            <ul
                                                class="
                                                    p-2
                                                    text-sm
                                                    text-gray-700
                                                "
                                            >

                                                <!-- DETAIL -->
                                                {{-- <li>

                                                    <a
                                                        href="#"
                                                        class="
                                                            flex
                                                            items-center
                                                            gap-2
                                                            w-full
                                                            px-3
                                                            py-2
                                                            rounded-lg
                                                            hover:bg-gray-100
                                                        "
                                                    >
                                                        Detail
                                                    </a>

                                                </li> --}}


                                                @if($trial->status === 'pending')

                                                    <!-- APPROVE -->
                                                    <li>
                                                        <form action="{{ route('trial-requests.approve', $trial->id) }}" method="POST">
                                                            @csrf

                                                            <button
                                                                type="submit"
                                                                class="
                                                                    flex
                                                                    items-center
                                                                    gap-2
                                                                    w-full
                                                                    px-3
                                                                    py-2
                                                                    text-green-600
                                                                    rounded-lg
                                                                    hover:bg-green-50
                                                                ">
                                                                Approve
                                                            </button>
                                                        </form>
                                                    </li>


                                                    <!-- REJECT -->
                                                    <li>
                                                        <form action="{{ route('trial-requests.reject', $trial->id) }}" method="POST">
                                                            @csrf
                                                            <button
                                                                type="submit"
                                                                class="
                                                                    flex
                                                                items-center
                                                                gap-2
                                                                w-full
                                                                px-3
                                                                py-2
                                                                text-red-600
                                                                rounded-lg
                                                                hover:bg-red-50
                                                            "
                                                        >
                                                            Reject
                                                        </button>
                                                        </form>

                                                    </li>

                                                @endif

                                            </ul>

                                        </div>

                                    </td>

                                </tr>


                            @empty

                                <tr>

                                    <td
                                        colspan="9"
                                        class="
                                            px-6
                                            py-16
                                            text-center
                                        "
                                    >

                                        <div
                                            class="
                                                text-gray-400
                                                text-sm
                                            "
                                        >
                                            Belum ada data pengajuan free trial.
                                        </div>

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>


    <!-- PAGINATION -->
    <div
        class="
            flex
            flex-col
            md:flex-row
            items-center
            justify-between
            gap-4
            mt-6
        "
    >

        <div class="text-sm text-gray-500">

            Menampilkan

            <span class="font-semibold">
                {{ $trialRequests->firstItem() ?? 0 }}
            </span>

            -

            <span class="font-semibold">
                {{ $trialRequests->lastItem() ?? 0 }}
            </span>

            dari

            <span class="font-semibold">
                {{ $trialRequests->total() }}
            </span>

            data

        </div>


        <div>
            {{ $trialRequests->links() }}
        </div>

    </div>

</main>


@push('scripts')

<script>

    function getUrl()
    {
        return new URL(window.location.href);
    }


    function searchTable()
    {
        const url = getUrl();

        const search =
            document.getElementById('search-input').value;

        if (search !== '') {

            url.searchParams.set(
                'search',
                search
            );

        } else {

            url.searchParams.delete('search');

        }

        url.searchParams.set('page', 1);

        window.location.href =
            url.toString();
    }


    function updatePerPage(value)
    {
        const url = getUrl();

        url.searchParams.set(
            'per_page',
            value
        );

        url.searchParams.set(
            'page',
            1
        );

        window.location.href =
            url.toString();
    }


    function filterStatus(status)
    {
        const url = getUrl();

        if (status === '') {

            url.searchParams.delete(
                'status'
            );

        } else {

            url.searchParams.set(
                'status',
                status
            );

        }

        url.searchParams.set(
            'page',
            1
        );

        window.location.href =
            url.toString();
    }

</script>

@endpush

@endsection