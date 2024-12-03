<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Laralink">
    <!-- Site Title -->
    <title>
        {{ config('app.name') }} - Struk Pembelian
    </title>
    <link rel="shortcut icon" href="{{ asset('assets/icon.jpg') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets/struk/css/style.css') }}">
</head>

<body>
    <div class="tm_container">
        <div class="tm_invoice_wrap">
            <div class="tm_invoice tm_style2" id="tm_download_section">
                <div class="tm_invoice_in">
                    <div class="tm_invoice_head tm_mb20">
                        <div class="tm_invoice_left">
                            <div class="tm_logo">
                                <img src="{{ asset('assets/struk/img/logo.svg') }}" alt="Logo">
                            </div>
                        </div>
                        <div class="tm_invoice_right">
                            <div class="tm_grid_row tm_col_3">
                                <div>
                                    <b class="tm_primary_color">Instagram</b> <br>
                                    @karsacarsa
                                </div>
                                <div>
                                    <b class="tm_primary_color">Tiktok</b> <br>
                                    @justcarsa
                                </div>
                                <div>
                                    <b class="tm_primary_color">WhatsApp</b> <br>
                                    0895-3069-5776
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tm_invoice_info tm_mb10">
                        <div class="tm_invoice_info_left">
                            <p class="tm_mb2"><b>Informasi Pembeli:</b></p>
                            <p>
                                <b class="tm_f13 tm_primary_color">Alamat Email</b> <br>
                                {{ $data->email }}
                            </p>
                        </div>
                        <div class="tm_invoice_info_right">
                            <div
                                class="tm_ternary_color tm_f50 tm_text_uppercase tm_text_center tm_invoice_title tm_mb15 tm_mobile_hide">
                                Invoice</div>
                            <div class="tm_grid_row tm_col_2 tm_invoice_info_in tm_gray_bg tm_round_border">
                                <div>
                                    <span>Kode Redeem:</span> <br>
                                    <b class="tm_primary_color">{{ $data->redeem_code }}</b>
                                </div>
                                <div>
                                    <span>Tanggal Pembelian:</span> <br>
                                    <b class="tm_primary_color">
                                        {{ $data->created_at->format('d F Y') }}
                                    </b>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tm_table tm_style1">
                        <div class="tm_round_border">
                            <div class="tm_table_responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="tm_width_3 tm_semi_bold tm_primary_color">Detail Pembelian</th>
                                            <th class="tm_width_3 tm_semi_bold tm_primary_color">Harga</th>
                                            <th class="tm_width_3 tm_semi_bold tm_primary_color">Jumlah</th>
                                            <th class="tm_width_3 tm_semi_bold tm_primary_color tm_text_right">Total
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="tm_width_3">
                                                {{ $data->game }}
                                            </td>
                                            <td class="tm_width_3">
                                                Rp {{ number_format($data->price, 0, ',', '.') }}
                                            </td>
                                            <td class="tm_width_3">
                                                {{ $data->qty }} item
                                            </td>
                                            <td class="tm_width_3 tm_text_right">
                                                Rp {{ number_format($data->total, 0, ',', '.') }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tm_invoice_footer">
                            <div style="margin-top: 20px">
                                <p class="tm_mb2"><b class="tm_primary_color">Catatan:</b></p>
                                <p class="tm_m0">
                                    Kami telah mengirimkan kode redeem ke alamat email pembelianmu. Silahkan cek email
                                    kamu untuk mendapatkan kode redeem.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tm_note tm_text_center tm_m0_md">
                        <p class="tm_m0">
                            Faktur dibuat di komputer dan sah tanpa tanda tangan dan stempel.
                        </p>
                    </div><!-- .tm_note -->
                </div>
            </div>
            <div class="tm_invoice_btns tm_hide_print">
                <a href="{{ route('home') }}" class="tm_invoice_btn tm_color1">
                    <span class="tm_btn_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                            <path d="M328 112L184 256l144 144" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                        </svg>
                    </span>
                    <span class="tm_btn_text">Kembali</span>
                </a>
                <a href="javascript:window.print()" class="tm_invoice_btn tm_color1">
                    <span class="tm_btn_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                            <path
                                d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24"
                                fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                            <rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32"
                                fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                            <path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" fill="none"
                                stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                            <circle cx="392" cy="184" r="24" fill='currentColor' />
                        </svg>
                    </span>
                    <span class="tm_btn_text">Cetak</span>
                </a>
                <button id="tm_download_btn" class="tm_invoice_btn tm_color2">
                    <span class="tm_btn_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                            <path
                                d="M320 336h76c55 0 100-21.21 100-75.6s-53-73.47-96-75.6C391.11 99.74 329 48 256 48c-69 0-113.44 45.79-128 91.2-60 5.7-112 35.88-112 98.4S70 336 136 336h56M192 400.1l64 63.9 64-63.9M256 224v224.03"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32" />
                        </svg>
                    </span>
                    <span class="tm_btn_text">Unduh</span>
                </button>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/struk/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/struk/js/jspdf.min.js') }}"></script>
    <script src="{{ asset('assets/struk/js/html2canvas.min.js') }}"></script>
    <script src="{{ asset('assets/struk/js/main.js') }}"></script>
</body>

</html>
