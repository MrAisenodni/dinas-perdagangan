<?php $this->load->view('admin/header') ?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tambah Berita</h3>
            </div>
            <div class="box-body">
                <form data-parsley-validate action="<?php echo base_url('berita/simpan') ?>" method="post" enctype="multipart/form-data">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nama Berita</label>
                            <input class="form-control" type="text" name="namaberita" value="<?php echo (!empty($berita[0]->namaberita)) ? $berita[0]->namaberita : '' ?>" required><br>
                            <label>Tanggal Berita</label>
                            <input class="form-control" type="date" name="tanggalberita" value="<?php echo (!empty($berita[0]->tanggalberita)) ? $berita[0]->tanggalberita : '' ?>" required><br>
                            <label>Deskripsi</label>
                            <textarea class="form-control" type="text" name="deskripsi" value="<?php echo (!empty($berita[0]->deskripsi)) ? $berita[0]->deskripsi : '' ?>" required rows="5"></textarea><br>
                        </div>
                        <div class="form-group">
                            <label></label>
                            <button class="btn btn-info" type="submit">Simpan</button>
                            <a class="btn btn-default" href="<?php echo base_url('berita/daftarberita') ?>">Kembali</a>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="gambar" accept="image/*" required><br>
                            <?php if (!empty($berita[0]->gambar)) : ?>
                                <img src="<?php echo base_url('upload/' . $berita[0]->gambar); ?>" width="100" alt="">
                            <?php endif; ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('admin/footer') ?>