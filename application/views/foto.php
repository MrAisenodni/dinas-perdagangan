<?php
$this->load->view('header');
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<style>
    .imggallery {
        max-height: 250px;
    }
</style>
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item text-center">
                        <h2>FOTO</h2>
                        <p>home . Galeri . Foto </p>
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
                    <h2>Gallery Kegiatan Dinas Perdagangan Kabupaten Nunukan</h2>
                    <p>Berikut adalah dokumentasi keseluruhan kegiatan yang ada pada Dinas Perdagangan</p>
                    <br><br>
                </div>
            </div>
        </div>
        <div id="gallery">

            <div class="row">
                <ul class="popup-gallery clearfix">
                    <?php if (!empty($galerifoto)) :
                        foreach ($galerifoto as $key => $p) {
                    ?>

                            <li>
                                <!-- <div class="gallery-item">
                                    <img style="max-width: 100%; height: 250px" src="<?php echo base_url('upload/' . $p->foto) ?>" alt="-" />
                                    <div class="gallery-desc">
                                        <a class="image-popup" href="<?php echo base_url('upload/' . $p->foto) ?>" title="-">
                                            <span class="overlay"><i class="fa fa-search" aria-hidden="true"></i></span>
                                        </a>
                                    </div>
                                </div> -->

                                <a href="<?php echo base_url('upload/' . $p->foto) ?>" data-toggle="lightbox" data-gallery="gallery" data-max-width="600">
                                    <img id="img<?php echo $p->idfoto ?>" src="<?php echo  base_url('upload/' . $p->foto) ?>" width="400" height="250" alt="">
                                    <span class="overlay"><i class="fa fa-search" aria-hidden="true"></i></span>
                                </a>
                                <a class="image-popup" href="<?php echo base_url('upload/' . $p->foto) ?>" title="-">
                            </li>
                    <?php }

                    endif; ?>

                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Gallery -->

<script>
    $(document).on("click", '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>

<?php
$this->load->view('footer');
?>