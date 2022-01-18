<?php $this->load->view('admin/header') ?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Edit SOP dan Regulasi</h3>
            </div>
            <div class="box-body">
                <form data-parsley-validate action="<?php echo base_url('layanan/simpaneditsop') ?>" method="post" enctype="multipart/form-data">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nama SOP</label>
                            <input class="form-control" type="hidden" name="idkeputusan" value="<?php echo (!empty($keputusan[0]->idkeputusan)) ? $keputusan[0]->idkeputusan : '' ?>" required><br>
                            <input class="form-control" type="text" name="nama" value="<?php echo (!empty($keputusan[0]->nama)) ? $keputusan[0]->nama : '' ?>" required><br>
                        </div>
                        <div class="form-group">
                            <label></label>
                            <button class="btn btn-info" type="submit">Simpan</button>
                            <a class="btn btn-default" href="<?php echo base_url('daftarsop') ?>">Kembali</a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Berkas</label>
                            <input type="file" name="gambar" accept="image/*"><br>
                            <?php if (!empty($keputusan[0]->berkas)) : ?>
                                <img src="<?php echo base_url('upload/' . $keputusan[0]->berkas); ?>" width="100" alt="">
                            <?php endif; ?>
                        </div><br>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('admin/footer') ?>