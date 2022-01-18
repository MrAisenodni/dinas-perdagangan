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
                        <h2>PENGADUAN</h2>
                        <p>home . Informasi layanan . pengaduan</p>
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
            <h1>Pengaduan Layanan</h1>
            <span>Silahkan melakukan pengaduan, Jika sudah Cek status pengaduan Klik &nbsp
                <a class="btn btn-info" href="<?php echo base_url('layanan/statuspengaduan') ?>">Di sini</a>
            </span><br><br><br>
            <!-- <?php echo $this->session->flashdata('msg'); ?>
            <form data-parsley-validate action="<?php echo base_url('login/aksi_login') ?>" method="post"> -->
            <form class="" action="<?php echo base_url('layanan/simpanpengaduan') ?>" method="post" autocomplete="off">
                <div class="mb-3">
                    <label for="exampleInputNama" class="form-label">NIK</label>
                    <input class="form-control" type="text" name="NIK" value="<?php echo (!empty($pengaduan[0]->NIK)) ? $pengaduan[0]->NIK : '' ?>" required><br>
                </div><br>

                <div class="mb-3">
                    <label for="exampleInputNama" class="form-label">Nama</label>
                    <input class="form-control" type="text" name="nama" value="<?php echo (!empty($pengaduan[0]->nama)) ? $pengaduan[0]->nama : '' ?>" required><br>
                </div><br>

                <div class="mb-3">
                    <label for="exampleInputAlamat" class="form-label">Alamat</label>
                    <input class="form-control" type="text" name="alamat" value="<?php echo (!empty($pengaduan[0]->alamat)) ? $pengaduan[0]->alamat : '' ?>" required><br>
                </div><br>

                <div class="mb-3">
                    <label for="exampleInputNomor" class="form-label">Nomor Telp/Hp</label>
                    <input class="form-control" type="text" name="nomorhp" value="<?php echo (!empty($pengaduan[0]->nomorhp)) ? $pengaduan[0]->nomorhp : '' ?>" required><br>
                </div><br>

                <div class="mb-3">
                    <label>Email</label>
                    <input class="form-control" type="text" placeholder="name@example.com" name=" email" value="<?php echo (!empty($pengaduan[0]->email)) ? $pengaduan[0]->email : '' ?>" required><br>
                </div>

                <div class="mb-3">
                    <label>Pekerjaan</label>
                    <input class="form-control" type="text" name="pekerjaan" value="<?php echo (!empty($pengaduan[0]->pekerjaan)) ? $pengaduan[0]->pekerjaan : '' ?>" required><br>
                </div><br>

                <div class="mb-3">
                    <label>Hal yang diadukan</label>
                    <textarea class="form-control" type="text" name="hal" value="<?php echo (!empty($pengaduan[0]->hal)) ? $pengaduan[0]->hal : '' ?>" required rows="5"></textarea><br>
                </div>

                <div class="form-group">
                    <label></label>
                    <button class="btn btn-info" type="submit">Simpan</button>
                    <!-- <a class="btn btn-default" href="<?php echo base_url('layanan/daftarpengaduan') ?>">Kembali</a> -->
                </div>
            </form>
        </div>
    </div>
</div><br><br><br><br>

<?php
$this->load->view('footer');
?>