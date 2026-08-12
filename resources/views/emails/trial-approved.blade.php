<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Akun Uji Coba IDENTAS
    </title>
</head>


<body
    style="
        margin: 0;
        padding: 0;
        background-color: #f1f5f9;
        font-family: Arial, Helvetica, sans-serif;
        color: #334155;
    "
>

<table
    width="100%"
    cellpadding="0"
    cellspacing="0"
    border="0"
    style="
        background-color: #f1f5f9;
        padding: 40px 15px;
    "
>

<tr>

<td align="center">


    <!-- EMAIL CONTAINER -->
    <table
        width="100%"
        cellpadding="0"
        cellspacing="0"
        border="0"
        style="
            max-width: 620px;
            background-color: #ffffff;
            border-radius: 16px;
            overflow: hidden;
        "
    >


        <!-- =========================
        HEADER
        ========================== -->

        <tr>

            <td
                style="
                    background-color: #02245D;
                    padding: 30px 40px;
                    text-align: center;
                "
            >

                <div
                    style="
                        color: #ffffff;
                        font-size: 28px;
                        font-weight: 700;
                        letter-spacing: 1px;
                    "
                >
                    IDENTAS
                </div>

                <div
                    style="
                        margin-top: 6px;
                        color: #bfdbfe;
                        font-size: 13px;
                    "
                >
                    Integrated Digital Education & Administration System
                </div>

            </td>

        </tr>


        <!-- =========================
        CONTENT
        ========================== -->

        <tr>

            <td
                style="
                    padding: 40px;
                "
            >


                <!-- SUCCESS ICON -->

                <div
                    style="
                        width: 60px;
                        height: 60px;
                        margin: 0 auto;
                        border-radius: 50%;
                        background-color: #dcfce7;
                        text-align: center;
                        line-height: 60px;
                        color: #16a34a;
                        font-size: 30px;
                        font-weight: bold;
                    "
                >
                    ✓
                </div>


                <!-- TITLE -->

                <h1
                    style="
                        margin: 24px 0 0;
                        text-align: center;
                        font-size: 24px;
                        line-height: 34px;
                        color: #02245D;
                    "
                >
                    Pengajuan Uji Coba Anda
                    Telah Disetujui
                </h1>


                <p
                    style="
                        margin: 24px 0 0;
                        font-size: 15px;
                        line-height: 25px;
                        color: #475569;
                    "
                >
                    Halo
                    <strong>
                        {{ $trialRequest->nama }}
                    </strong>,
                </p>


                <p
                    style="
                        margin: 12px 0 0;
                        font-size: 15px;
                        line-height: 25px;
                        color: #475569;
                    "
                >
                    Pengajuan uji coba IDENTAS untuk
                    <strong>
                        {{ $trialRequest->nama_lembaga }}
                    </strong>
                    telah disetujui.
                </p>


                <p
                    style="
                        margin: 12px 0 0;
                        font-size: 15px;
                        line-height: 25px;
                        color: #475569;
                    "
                >
                    Akun administrator institusi Anda telah dibuat
                    dan dapat digunakan untuk mulai mencoba IDENTAS.
                </p>


                <!-- =========================
                ACCOUNT INFORMATION
                ========================== -->

                <div
                    style="
                        margin-top: 28px;
                        padding: 24px;
                        background-color: #f8fafc;
                        border: 1px solid #e2e8f0;
                        border-radius: 12px;
                    "
                >

                    <div
                        style="
                            margin-bottom: 18px;
                            font-size: 15px;
                            font-weight: bold;
                            color: #02245D;
                        "
                    >
                        Informasi Akun Anda
                    </div>


                    <!-- EMAIL -->

                    <div
                        style="
                            margin-bottom: 16px;
                        "
                    >

                        <div
                            style="
                                margin-bottom: 5px;
                                font-size: 12px;
                                color: #94a3b8;
                            "
                        >
                            Email
                        </div>

                        <div
                            style="
                                font-size: 15px;
                                font-weight: bold;
                                color: #334155;
                            "
                        >
                            {{ $trialRequest->email }}
                        </div>

                    </div>


                    <!-- PASSWORD -->

                    <div>

                        <div
                            style="
                                margin-bottom: 5px;
                                font-size: 12px;
                                color: #94a3b8;
                            "
                        >
                            Password Sementara
                        </div>

                        <div
                            style="
                                display: inline-block;
                                padding: 10px 14px;
                                background-color: #ffffff;
                                border: 1px solid #cbd5e1;
                                border-radius: 8px;
                                font-family: monospace;
                                font-size: 16px;
                                font-weight: bold;
                                letter-spacing: 1px;
                                color: #02245D;
                            "
                        >
                            {{ $temporaryPassword }}
                        </div>

                    </div>

                </div>


                <!-- =========================
                TRIAL INFORMATION
                ========================== -->

                <div
                    style="
                        margin-top: 20px;
                        padding: 20px;
                        background-color: #eff6ff;
                        border: 1px solid #bfdbfe;
                        border-radius: 12px;
                    "
                >

                    <div
                        style="
                            font-size: 14px;
                            font-weight: bold;
                            color: #1d4ed8;
                        "
                    >
                        Masa Uji Coba IDENTAS
                    </div>


                    <table
                        width="100%"
                        cellpadding="0"
                        cellspacing="0"
                        border="0"
                        style="
                            margin-top: 14px;
                        "
                    >

                        <tr>

                            <td
                                width="50%"
                                style="
                                    font-size: 13px;
                                    color: #64748b;
                                "
                            >
                                Mulai
                            </td>

                            <td
                                width="50%"
                                style="
                                    font-size: 13px;
                                    color: #64748b;
                                "
                            >
                                Berakhir
                            </td>

                        </tr>


                        <tr>

                            <td
                                style="
                                    padding-top: 5px;
                                    font-size: 14px;
                                    font-weight: bold;
                                    color: #1e293b;
                                "
                            >
                                {{ $clientTrial->starts_at->format('d M Y') }}
                            </td>

                            <td
                                style="
                                    padding-top: 5px;
                                    font-size: 14px;
                                    font-weight: bold;
                                    color: #1e293b;
                                "
                            >
                                {{ $clientTrial->ends_at->format('d M Y') }}
                            </td>

                        </tr>

                    </table>

                </div>


                <!-- =========================
                LOGIN BUTTON
                ========================== -->

                <div
                    style="
                        margin-top: 30px;
                        text-align: center;
                    "
                >

                    <a
                        href="{{ url('/login') }}"
                        style="
                            display: inline-block;
                            padding: 14px 28px;
                            background-color: #066FFC;
                            color: #ffffff;
                            text-decoration: none;
                            font-size: 14px;
                            font-weight: bold;
                            border-radius: 9px;
                        "
                    >
                        Login ke IDENTAS
                    </a>

                </div>


                <!-- WARNING -->

                <div
                    style="
                        margin-top: 28px;
                        padding: 16px;
                        background-color: #fff7ed;
                        border: 1px solid #fed7aa;
                        border-radius: 10px;
                    "
                >

                    <p
                        style="
                            margin: 0;
                            font-size: 13px;
                            line-height: 21px;
                            color: #9a3412;
                        "
                    >
                        <strong>
                            Penting:
                        </strong>

                        Demi keamanan akun, silakan ubah password
                        sementara setelah Anda berhasil login
                        untuk pertama kali.
                    </p>

                </div>


                <!-- HELP -->

                <p
                    style="
                        margin: 28px 0 0;
                        font-size: 13px;
                        line-height: 22px;
                        color: #64748b;
                    "
                >
                    Jika mengalami kendala saat login atau membutuhkan
                    bantuan selama masa uji coba, silakan hubungi tim
                    IDENTAS.
                </p>


                <p
                    style="
                        margin: 22px 0 0;
                        font-size: 14px;
                        line-height: 23px;
                        color: #475569;
                    "
                >
                    Salam,<br>

                    <strong style="color: #02245D;">
                        Tim IDENTAS
                    </strong>
                </p>


            </td>

        </tr>


        <!-- =========================
        FOOTER
        ========================== -->

        <tr>

            <td
                style="
                    padding: 22px 40px;
                    background-color: #f8fafc;
                    border-top: 1px solid #e2e8f0;
                    text-align: center;
                "
            >

                <p
                    style="
                        margin: 0;
                        font-size: 11px;
                        line-height: 18px;
                        color: #94a3b8;
                    "
                >
                    Email ini dikirim otomatis oleh sistem IDENTAS.
                    Mohon tidak membagikan informasi akun Anda
                    kepada pihak lain.
                </p>


                <p
                    style="
                        margin: 8px 0 0;
                        font-size: 11px;
                        color: #94a3b8;
                    "
                >
                    © {{ date('Y') }}
                    IDENTAS — PT. Alvarel Technology Innovation
                </p>

            </td>

        </tr>


    </table>

</td>

</tr>

</table>

</body>

</html>