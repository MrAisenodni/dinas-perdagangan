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

            <form class="" action="<?php echo base_url('layanan/cari') ?>" method="post" autocomplete="off">
                <div class="mb-3">
                    <label for="exampleInputNama" class="form-label">NIK</label>
                    <input class="form-control" type="text" name="NIK" required><br>
                    <button class="btn btn-info" type="submit">Cari</button>
                </div><br>

            </form>
        </div>
    </div>
</div><br><br><br><br>

<?php
$this->load->view('footer');
?>