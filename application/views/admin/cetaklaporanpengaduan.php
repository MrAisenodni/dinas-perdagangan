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
            <h4>Laporan Pengaduan</h4>
        </center>
        <center>
            <!-- <h5><?php echo $this->models->format_tanggal($_GET['tgl1']) . ' - ' . $this->models->format_tanggal($_GET['tgl2']); ?></h5> -->
        </center>
        <br>
        <table id="example1" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nomor Telp/Hp</th>
                    <th>Email</th>
                    <th>Pekerjaan</th>
                    <th>Hal yang diadukan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($pengaduan)) :
                    foreach ($pengaduan as $key => $p) {
                        $no = $key + 1;
                        echo '<tr>';
                        echo '<td>' . $no . '</td>';
                        echo '<td>' . $p->NIK . '</td>';
                        echo '<td>' . $p->nama . '</td>';
                        echo '<td>' . $p->alamat . '</td>';
                        echo '<td>' . $p->nomorhp . '</td>';
                        echo '<td>' . $p->email . '</td>';
                        echo '<td>' . $p->pekerjaan . '</td>';
                        echo '<td>' . $p->hal . '</td>';
                        if($p->status == 'selesai') {
                            echo '<td><div class="text-success">Selesai</div></td>';
                        } elseif ($p->status == 'tulis') {
                            echo '<td><div class="text-warning">Tulis Laporan</div></td>';
                        } elseif ($p->status == 'verifikasi') {
                            echo '<td><div class="text-info">Proses Verifikasi</div></td>';
                        } elseif ($p->status == 'tindaklanjut') {
                            echo '<td><div class="text-warning">Proses Tindak Lanjut</div></td>';
                        } else {
                            echo '<td><div class="text-danger">Beri Tanggapan</div></td>';
                        }
                        echo '</tr>';
                    }
                endif; ?>
            </tbody>
        </table>

        <center><a href="#" onclick="print();" class="nop">Cetak</a></cetak>
    </div>
</div>