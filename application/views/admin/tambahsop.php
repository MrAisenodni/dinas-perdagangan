<?php $this->load->view('admin/header') ?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tambah SOP</h3>
            </div>
            <div class="box-body">
                <form data-parsley-validate action="<?php echo base_url('layanan/simpansop') ?>" method="post" enctype="multipart/form-data">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nama SOP</label>
                            <input class="form-control" type="text" name="nama" value="<?php echo (!empty($keputusan[0]->nama)) ? $keputusan[0]->nama : '' ?>" required><br>
                        </div>
                        <div class="form-group">
                            <label>Tahun SOP</label>
                            <input class="form-control" type="text" name="tahun" value="<?php echo (!empty($keputusan[0]->tahun)) ? $keputusan[0]->tahun : '' ?>" required><br>
                        </div>
                        <div class="form-group">
                            <label></label>
                            <button class="btn btn-info" type="submit">Simpan</button>
                            <a class="btn btn-default" href="<?php echo base_url('layanan/daftarsop') ?>">Kembali</a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Berkas</label>
                            <input type="file" name="berkas" accept="image/*" required><br>
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