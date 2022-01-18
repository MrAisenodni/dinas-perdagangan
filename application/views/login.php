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
                        <h2>LOGIN ADMIN</h2>
                        <p>home . Login</p>
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
            <h1>Login Administrator</h1>
            <?php echo $this->session->flashdata('msg'); ?>
            <form data-parsley-validate action="<?php echo base_url('login/aksi_login') ?>" method="post">
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your text with anyone else.</div>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                    </div>
                </div>

                <div class="row">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <p>Belum punya akun?<a href="<?php echo base_url('login/registration') ?>" class="text-primary"> Daftar Sekarang</a></p>
                </div>
            </form>
        </div>
    </div>
</div><br><br><br><br>

<?php $this->load->view('footer');
?>