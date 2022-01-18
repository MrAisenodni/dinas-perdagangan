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
                        <h2>SOP & KEPUTUSAN</h2>
                        <p>home . Informasi layanan . Sop & Keputusan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->
<br>
<div class="row justify-content-center">
    <div class="col-lg-8"><br><br>
        <table id="example1" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama SOP</th>
                    <th>Berkas</th>
                    <th>Download</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($keputusan)) :
                    foreach ($keputusan as $key => $p) {
                        $no = $key + 1;
                        echo '<tr>';
                        echo '<td>' . $no . '</td>';
                        echo '<td>' . $p->nama . '</td>';

                ?>
                        <?php if (!empty($p->berkas)) {
                            $tipe = pathinfo(base_url('upload/' . $p->berkas), PATHINFO_EXTENSION);
                        ?>
                            <?php if ($tipe == 'mp4') { ?>
                                <td>
                                    <video width="100%" height="500px" src="<?php echo base_url(); ?>upload/<?php echo $p->berkas; ?>" controls>
                                </td>
                            <?php } elseif ($tipe == 'jpg') { ?>
                                <td>
                                    <image width="100%" height="300px" src="<?php echo base_url(); ?>upload/<?php echo $p->berkas; ?>">
                                </td>
                            <?php } elseif ($tipe == 'jpeg') { ?>
                                <td>
                                    <image width="100%" height="300px" src="<?php echo base_url(); ?>upload/<?php echo $p->berkas; ?>">
                                </td>ss
                            <?php } elseif ($tipe == 'PNG') { ?>
                                <td>
                                    <image width="100%" height="300px" src="<?php echo base_url(); ?>upload/<?php echo $p->berkas; ?>">
                                </td>
                            <?php } elseif ($tipe == 'JPEG') { ?>
                                <td>
                                    <image width="100%" height="300px" src="<?php echo base_url(); ?>upload/<?php echo $p->berkas; ?>">
                                </td>
                            <?php } elseif ($tipe == 'png') { ?>
                                <td>
                                    <image width="100%" height="300px" src="<?php echo base_url(); ?>upload/<?php echo $p->berkas; ?>">
                                </td>
                            <?php } elseif ($tipe == 'JPG') { ?>
                                <td>
                                    <image width="100%" height="300px" src="<?php echo base_url(); ?>upload/<?php echo $p->berkas; ?>">
                                </td>
                            <?php } elseif ($tipe == 'MP4') { ?>
                                <td>
                                    <image width="100%" height="300px" src="<?php echo base_url(); ?>upload/<?php echo $p->berkas; ?>">
                                </td>
                            <?php } elseif ($tipe == 'MP4') { ?>
                                <td>
                                    <image width="100%" height="300px" src="<?php echo base_url(); ?>upload/<?php echo $p->berkas; ?>">
                                </td>
                            <?php } elseif ($tipe == 'pdf') { ?>
                                <td>
                                    <iframe width="100%" height="300px" src="<?php echo base_url(); ?>upload/<?php echo $p->berkas . '?page=hsn#toolbar=0' ?>">
                                    </iframe>
                                    <!-- <iframe src="kd/kd.pdf?page=hsn#toolbar=0" width="100%" height="1000" <?php echo base_url(); ?>upload/<?php echo $p->berkas; ?>">
                                    </iframe> -->
                                </td>
                        <?php }
                        }
                        ?>
                <?php
                        echo '<td><a target = "_blank" href="' . base_url('upload/' . $p->berkas) . '"class="btn btn-info btn-xs">Download</a>
                              
                    </td>';
                        echo '</tr>';
                    }
                endif; ?>
            </tbody>
        </table>
    </div>
</div>
<br>
<?php
$this->load->view('footer');
?>