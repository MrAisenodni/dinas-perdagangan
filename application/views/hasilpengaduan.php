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
                        <h2>HASIL PENGADUAN</h2>
                        <p>home . Informasi layanan .Cari-Status pengaduan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->
<div class="row justify-content-center">
    <div class="col-lg-8"><br><br>
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
                        echo '<td>' . $p->status . '</td>';


                        echo '</tr>';
                    }
                endif; ?>
            </tbody>
        </table>
    </div>
</div><br>
<?php
$this->load->view('footer');
?>