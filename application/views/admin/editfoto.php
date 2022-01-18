<?php $this->load->view('admin/header') ?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Edit Foto</h3>
            </div>
            <div class="box-body">
                <form data-parsley-validate action="<?php echo base_url('galeri/simpaneditfoto') ?>" method="post" enctype="multipart/form-data">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nama Kegiatan</label>
                            <input class="form-control" type="hidden" name="idfoto" value="<?php echo (!empty($galerifoto[0]->idfoto)) ? $galerifoto[0]->idfoto : '' ?>" required><br>
                            <input class="form-control" type="text" name="namakegiatan" value="<?php echo (!empty($galerifoto[0]->namakegiatan)) ? $galerifoto[0]->namakegiatan : '' ?>" required><br>
                            <label>Tanggal Kegiatan</label>
                            <input class="form-control" type="date" name="tanggalkegiatan" value="<?php echo (!empty($galerifoto[0]->tanggalkegiatan)) ? $galerifoto[0]->tanggalkegiatan : '' ?>" required>
                        </div>
                        <div class="form-group">
                            <label></label>
                            <button class="btn btn-info" type="submit">Simpan</button>
                            <a class="btn btn-default" href="<?php echo base_url('galerifoto') ?>">Kembali</a>
                        </div>

                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar" accept="image/*"><br>
                            <?php if (!empty($galerifoto[0]->foto)) : ?>
                                <img src="<?php echo base_url('upload/' . $galerifoto[0]->foto); ?>" width="100" alt="">
                            <?php endif; ?>
                        </div><br>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('admin/footer') ?>