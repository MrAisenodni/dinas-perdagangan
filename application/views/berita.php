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
                        <h2>BERITA</h2>
                        <p>home . Berita</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--::industries start::-->
<section class="best_services section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section_tittle text-center">
                    <h2>Berita Terbaru</h2>
                    <p>Berikut adalah berita keseluruhan yang ada pada Dinas Perdagangan</p>
                </div>
            </div>
        </div>


        <div class="row">
            <?php if (!empty($berita)) :
                foreach ($berita as $key => $p) {

            ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_ihotel_list">
                            <img src="<?php echo  base_url('upload/' . $p->foto) ?>" width="300" height="250" alt="">
                            <h4><?php echo $p->namaberita ?></h4>
                            <a href="<?php echo base_url('home/detailberita/' . $p->idberita) ?>" class="btn_1">Read More</a>
                            <br><br><br>
                        </div>
                    </div>
            <?php
                }
            endif; ?>

            <!-- <div class="col-lg-4 col-sm-6">
                <div class="single_ihotel_list">
                    <img src="<?php echo base_url('assets/img/berita2.jpg') ?>" width="300" height="250" alt="">
                    <h4> Kotaku Bangun Rumah Wisata Kuliner Di Pulau Nunukan</h4>
                    <a href="#" class="btn_1">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_ihotel_list">
                    <img src="<?php echo base_url('assets/img/berita3.jpg') ?>" width="300" height="250" alt="">
                    <h4>Camat Sebatik Tengah Harap Pasar Lokal Serap Produk UKM</h4>
                    <a href="#" class="btn_1">Read More</a>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single_ihotel_list">
                    <img src="<?php echo base_url('assets/img/berita1.jpg') ?>" width="300" height="250" alt="">
                    <h4>Disdag Nunukan Rapat Dengan Psdkp Bahas Perdagangan Legal</h4>
                    <a href="#" class="btn_1">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_ihotel_list">
                    <img src="<?php echo base_url('assets/img/berita2.jpg') ?>" width="300" height="250" alt="">
                    <h4> Kotaku Bangun Rumah Wisata Kuliner Di Pulau Nunukan</h4>
                    <a href="#" class="btn_1">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_ihotel_list">
                    <img src="<?php echo base_url('assets/img/berita3.jpg') ?>" width="300" height="250" alt="">
                    <h4>Camat Sebatik Tengah Harap Pasar Lokal Serap Produk UKM</h4>
                    <a href="#" class="btn_1">Read More</a>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!--::industries end::-->
<?php
$this->load->view('footer');
?>