<?php
$this->load->view('header');
?>

<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item text-center">
                        <h2>VIDEO</h2>
                        <p>home . Galeri . Video</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!-- Start Gallery -->
<div id="gallery" class="gallery-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-box text-center">
                    <h2>Video Kegiatan Dinas Perdagangan Kabupaten Nunukan</h2>
                    <p>Berikut adalah dokumentasi keseluruhan kegiatan yang ada pada Dinas Perdagangan</p>
                    <br><br>
                </div>
            </div>
        </div>
        <div class="row">
            <ul class="popup-gallery clearfix">
                <?php if (!empty($galerivideo)) :
                    foreach ($galerivideo as $key => $p) {
                ?>
                        <li>
                            <!-- <a href="<?php echo base_url('assets/img/services_1.png') ?>"> -->
                            <video controls width="100%">
                                <source src="<?php echo base_url('upload/' . $p->video) ?>">
                            </video>
                            <!-- </a> -->
                        </li>
                <?php }

                endif; ?>

            </ul>
        </div>
    </div>
</div>
<!-- End Gallery -->
<?php
$this->load->view('footer');
?>