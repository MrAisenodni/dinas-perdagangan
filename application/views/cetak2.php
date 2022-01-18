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
                        <font size="4"><b>LAPORAN HARGA BAHAN POKOK<br><br></b></font>
                    </center>
                </td>
            </tr>

        </table>

        <table width="555" border="2px">
            <tr>
                <td width="150">namabarang</td>
                <td> <?= $bahanpokok->namabarang; ?></td>
            </tr>
            <tr>
                <td width="150">satuan</td>
                <td> <?= $bahanpokok->satuan; ?></td>
            </tr>
            <tr>
                <td width="150">hargakemarin</td>
                <td> <?= $bahanpokok->hargakemarin; ?></td>
            </tr>
            <tr>
                <td width="150">hargahariini</td>
                <td> <?= $bahanpokok->hargahariini; ?></td>
            </tr>
            <tr>
                <td width="150">perubahanrp</td>
                <td> <?= $bahanpokok->perubahanrp; ?></td>
            </tr>
            <tr>
                <td width="150">perubahanpersen</td>
                <td> <?= $bahanpokok->perubahanpersen; ?></td>
            </tr>

        </table>
        <br>

    </center>
    <script>
        window.print();
    </script>
</body>

</html>