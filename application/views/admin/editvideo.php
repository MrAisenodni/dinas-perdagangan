<?php $this->load->view('admin/header') ?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Edit Video</h3>
            </div>
            <div class="box-body">
                <form data-parsley-validate action="<?php echo base_url('galeri/simpaneditvideo') ?>" method="post" enctype="multipart/form-data">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" type="hidden" name="idvideo" value="<?php echo (!empty($galerivideo[0]->idvideo)) ? $galerivideo[0]->idvideo : '' ?>" required><br>
                            <input class="form-control" type="text" name="namakegiatan" value="<?php echo (!empty($galerivideo[0]->namakegiatan)) ? $galerivideo[0]->namakegiatan : '' ?>" required><br>
                            <label>Tanggal Kegiatan</label>
                            <input class="form-control" type="date" name="tanggalkegiatan" value="<?php echo (!empty($galerivideo[0]->tanggalkegiatan)) ? $galerivideo[0]->tanggalkegiatan : '' ?>" required>
                        </div>

                        <div class="form-group">
                            <label></label>
                            <button class="btn btn-info" type="submit">Simpan</button>
                            <a class="btn btn-default" href="<?php echo base_url('daftarvideo') ?>">Kembali</a>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Video</label>
                            <input type="file" name="gambar" accept="image/*"><br>
                            <?php if (!empty($galerivideo[0]->video)) : ?>
                                <video src="<?php echo base_url('upload/' . $galerivideo[0]->video); ?>" width="100" alt="">
                                <?php endif; ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('admin/footer') ?>