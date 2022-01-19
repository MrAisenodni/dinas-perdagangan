<?php
$this->load->view('header');
?>

<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item text-center">
                        <h2>REGISTRASI</h2>
                        <p>home . Registrasi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-lg-4"><br><br>
            <h1>Pendaftaran</h1>
            <?php echo $this->session->flashdata('msg'); ?>
            <form data-parsley-validate action="<?php echo base_url('login/tambahuser') ?>" method="post">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" id="nama" aria-describedby="emailHelp">
                </div><br>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp">
                </div><br>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div><br>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div><br><br><br><br>

<?php $this->load->view('footer');
?>