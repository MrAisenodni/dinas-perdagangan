<!DOCTYPE html>
<html>

<head>
    <style type="text/css">
        table {
            border-color: black;
            border-collapse: collapse;
        }

        table tr .text2 {
            text-align: right;
            font-size: 13px;
        }

        table tr .text {
            text-align: center;
            font-size: 13px;
        }

        table tr td {
            font-size: 18px;
        }

        table td {
            height: 35px;
        }

        @page {
            size: auto;
            margin: 0;
        }
    </style>
</head>

<body>
    <br><br><br>
    <center>
        <table width="625">
            <tr>
                <td><img src="<?= base_url('assets/logo.png') ?>" width="100" height="100"></td>
                <td>
                    <center>
                        <font size="5"><b>PEMERINTAH KABUPATEN NUNUKAN</b></font><br>
                        <font size="4">DINAS PERDAGANGAN</font><br>
                        <font size="2">Kantor Gabungan Dinas-Dinas I, Blok B Lt. 1<br>Jl. Ujang Dewa Kelurahan Nunukan Selatan<br>Telp/WA : 089518042377, Email : disdagnnk@gmail.com</font><br>
                    </center>
                </td>

            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                    <br>
                    <center>
                        <font size="4"><b>FORMULIR PENGADUAN MASYARAKAT<br><br></b></font>
                    </center>
                </td>
            </tr>

        </table>

        <table width="555" border="2px">
            <tr class="text2">
                <td width="150">NIK</td>
                <td> <?= $pengaduan->NIK; ?></td>
            </tr>
            <tr>
                <td width="150">Nama</td>
                <td> <?= $pengaduan->nama; ?></td>
            </tr>
            <tr>
                <td width="150">Alamat</td>
                <td> <?= $pengaduan->alamat; ?></td>
            </tr>
            <tr>
                <td width="150">Nomor Hp</td>
                <td> <?= $pengaduan->nomorhp; ?></td>
            </tr>
            <tr>
                <td width="150">Email</td>
                <td> <?= $pengaduan->email; ?></td>
            </tr>
            <tr>
                <td width="150">Pekerjaan</td>
                <td> <?= $pengaduan->pekerjaan; ?></td>
            </tr>
            <tr>
                <td width="150">Hal</td>
                <td> <?= $pengaduan->hal; ?></td>
            </tr>
            <tr>
                <td width="150">Status</td>
                <td> <?= $pengaduan->status; ?></td>
            </tr>
        </table>
        <br>

    </center>
    <script>
        window.print();
    </script>
</body>

</html>