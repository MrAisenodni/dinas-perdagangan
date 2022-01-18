<style>
    @media print {
        .nop {
            display: none;
        }
    }
</style>
<link rel="stylesheet" href="<?php echo base_url('theme/admin/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
<div class="row justify-content-center">
    <div class="col-md-10 center-block" style="float:none">
        <br>
        <center>
            <h4>Laporan Bahan Keseluruhan</h4>
        </center>
        <center>
            <h5><?php echo $this->models->format_tanggal($_GET['tgl1']) . ' - ' . $this->models->format_tanggal($_GET['tgl2']); ?></h5>
        </center>
        <br>
        <table id="example1" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>Harga Kemarin</th>
                    <th>Harga Hari ini</th>
                    <th>Perubahan Rp</th>
                    <th>Perubahan %</th>
                    <th>Tanggal</th>

                </tr>
            </thead>
            <tbody>
                <?php if (!empty($bahanpokok)) :
                    foreach ($bahanpokok as $key => $p) {
                        $no = $key + 1;
                        echo '<tr>';
                        echo '<td>' . $no . '</td>';
                        echo '<td>' . $p->namabarang . '</td>';
                        echo '<td>' . $p->satuan . '</td>';
                        echo '<td>' . $this->models->format_harga($p->hargakemarin) . '</td>';
                        echo '<td>' . $this->models->format_harga($p->hargahariini) . '</td>';
                        echo '<td>' . $p->perubahanrp . '</td>';
                        echo '<td>' . $p->perubahanpersen . '</td>';
                        echo '<td>' . $p->tanggalbahan . '</td>';

                        echo '</tr>';
                    }
                endif; ?>
            </tbody>
        </table>

        <center><a href="#" onclick="print();" class="nop">Cetak</a></cetak>
    </div>
</div>