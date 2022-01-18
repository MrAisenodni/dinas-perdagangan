<?php $this->load->view('admin/header') ?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tambah Foto</h3>
            </div>
            <div class="box-body">
                <form data-parsley-validate action="<?php echo base_url('galeri/simpanfoto') ?>" method="post" enctype="multipart/form-data">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nama Kegiatan</label>
                            <input class="form-control" type="text" name="namakegiatan" value="<?php echo (!empty($galeri[0]->nama_kegiatan)) ? $galeri[0]->nama_kegiatan : '' ?>" required><br>
                            <label>Tanggal Kegiatan</label>
                            <input class="form-control" type="date" name="tanggalkegiatan" value="<?php echo (!empty($galeri[0]->tanggal_kegiatan)) ? $galeri[0]->tanggal_kegiatan : '' ?>" required>
                        </div>
                        <div class="form-group">
                            <label></label>
                            <button class="btn btn-info" type="submit">Simpan</button>
                            <a class="btn btn-default" href="<?php echo base_url('galeri/daftarfoto') ?>">Kembali</a>
                        </div>

                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar" accept="image/*" required><br>
                            <?php if (!empty($galerifoto[0]->gambar)) : ?>
                                <img src="<?php echo base_url('upload/' . $produk[0]->gambar); ?>" width="100" alt="">
                            <?php endif; ?>
                        </div><br>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('admin/footer') ?>