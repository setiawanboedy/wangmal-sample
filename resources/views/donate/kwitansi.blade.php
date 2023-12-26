<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Receipt</title>
    <!-- Bootstrap CSS (You need to have this file in your public directory) -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/kwitansi.css')}}">
</head>
<body>
    <div class="receipt-container">
        <div class="header">
            <div>
                <p class="text-small"><span class="text-bold">Terbilang</span> : <span class="fst-italic">Lima puluh ribu rupiah</span></p>
                <p class="text-small">Keterangan : Via Cash/Transfer</p>
            </div>
        </div>

        <div class="space-ttd justify-content-center">
            <div class="signature" style="background-image: url({{asset('img/ttd-cica.png')}})">
                <p class="text-small">Dibuat Oleh</p>
                <p class=" text-small" style="padding-top: 55px !important">Melisa Fiktarina</p>
                <p class="text-small">Bendahara</p>
            </div>
            <div class="signature" style="background-image: url({{asset('img/ttd-hermawan.png')}});">
                <p class="text-small">Diperiksa Oleh</p>
                <p class="text-small" style="padding-top: 55px !important">Herman Hudiawan</p>
                <p class="text-small">Pengasuh</p>
            </div>
        </div>

        <div class="footer">
            <div class="text-start">
                <p class="text-bold">BAITULMAAL MASJID JALAN CAHAYA</p>
                <p class="text-small">Izin Pembentukan UPZ berdasarkan Keputusan Ketua Badan Amil Zakat Nasional</p>
                <p class="text-small">Prov. NTB Nomor : 07 Tahun 2022</p>
            </div>
            <div>
                <!-- Replace 'path_to_logo' with the actual path to your logo image -->
                <img src="{{asset('img/logo.PNG')}}" alt="Logo" style="height: 60px;">
            </div>
        </div>

        <div class="text-center text-bold" style="margin: 10px 0;">
            <p>BUKTI DONASI MASUK</p>
        </div>

        <div class="line"></div>

        <div style="display: flex; justify-content: space-between;">
            <div class="text-small">
                <p>Telah diterima dari : <span class="text-bold">Ibu Zohria</span></p>
                <p>Keterangan : <span class="text-bold">Donasi patungan beras</span></p>
            </div>
            <div class="text-left text-small">
                <p>Nomor : <span>00002</span></p>
                <p>Tanggal : <span >3 Maret 2023</span></p>
                <div>
                    <p class="text-small">Rekening Akun: MANDIRI a.n. Yayasan Sahabat</p>
                    <div class="text-center">
                        <p class="text-small">Anak & Orangtua 1610005039917</p>
                        <p class="text-small">1610005039917</p>
                    </div>
                </div>
            </div>
        </div>

        <table class="styled-table">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Rekening</th>
                    <th class="text-right">Nilai</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>Bunda Ermayani</td>
                    <td class="text-right">50,000</td>
                </tr>
                <!-- Repeat the row as necessary for more data -->
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2" class="text-right">Total :</td>
                    <td class="text-right">Rp 50,000</td>
                </tr>
            </tfoot>
        </table>
    </div>

    <!-- Bootstrap Bundle with Popper (You need to have this file in your public directory) -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
