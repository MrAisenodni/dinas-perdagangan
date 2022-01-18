<?php
$this->load->view('header');
?>

<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item text-center">
                        <h2>CARI PENGADUAN</h2>
                        <p>home . Informasi layanan . Cari pengaduan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->
<div class="container">
    <div class="row justify-content-md-center ">
        <div class="col-lg-6 col-sm-6"><br><br>
            <h1>Status Pengaduan Layanan</h1>
            <br><br><br>

            <!-- <form class="" action="<?php echo base_url('layanan/cari') ?>" method="post" autocomplete="off">
                <div class="mb-3">
                    <label for="exampleInputNama" class="form-label">NIK</label>
                    <input class="form-control" type="text" name="NIK" required><br>
                    <button class="btn btn-info" type="submit">Cari</button>
                </div><br>
                Commended by Fiqri 18/01/2022
            </form> -->
        </div>
        <table id="example1" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <!-- <th>Alamat</th>
                    <th>Nomor Telp/Hp</th>
                    <th>Email</th>
                    <th>Pekerjaan</th> -->
                    <th>Hal yang diadukan</th>
                    <th>Status</th>
                    <th>Download</th>
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
                        // echo '<td>' . $p->alamat . '</td>';
                        // echo '<td>' . $p->nomorhp . '</td>';
                        // echo '<td>' . $p->email . '</td>';
                        // echo '<td>' . $p->pekerjaan . '</td>';
                        echo '<td>' . $p->hal . '</td>';
                        if($p->status == 'selesai') {
                            echo '<td><div class="btn btn-success">Selesai</div></td>';
                        } elseif ($p->status == 'tulis') {
                            echo '<td><div class="btn btn-warning">Pelaporan</div></td>';
                        } elseif ($p->status == 'verifikasi') {
                            echo '<td><div class="btn btn-info">Verifikasi</div></td>';
                        } elseif ($p->status == 'tindaklanjut') {
                            echo '<td><div class="btn btn-warning">Tindak Lanjut</div></td>';
                        } else {
                            echo '<td><div class="btn btn-danger">Tertunda</div></td>';
                        } ?>
                <?php
                        if (!empty($p->berkas)) {
                            $tipe = pathinfo(base_url('upload/' . $p->berkas), PATHINFO_EXTENSION);
                            echo '<td><a target = "_blank" href="' . base_url('upload/' . $p->berkas) . '"class="btn btn-info btn-xs">Download</a></td>';
                        } else {
                            echo '<td></td>';
                        }    
                        echo '</tr>';
                    }
                endif; ?>
            </tbody>
        </table>
    </div>
</div><br><br><br><br>

<?php
$this->load->view('footer');
?>