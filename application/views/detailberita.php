<?php
$this->load->view('header');
?>
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item text-center">
                        <h2>Detail BERITA</h2>
                        <p>home . Berita. Detail Berita</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--::industries start::-->
<section class="best_services">
    <div class="container">
        <div class="row">
            <?php if (!empty($berita)) :
                foreach ($berita as $key => $p) {
            ?>
                    <div class="col-lg-12 col-sm-6">
                        <div class="single_ihotel_list"><br><br>
                            <h1><?php echo $p->namaberita ?></h1><br>
                            <center> <img src="<?php echo  base_url('upload/' . $p->foto) ?>" width="300" height="250" alt=""></center>
                            <h4 class="text-justify"><?php echo $p->deskripsi ?></h4><br><br>

                        </div>
                    </div>
            <?php
                }
            endif; ?>


        </div>
    </div>
</section>
<!--::industries end::-->
<?php
$this->load->view('footer');
?>