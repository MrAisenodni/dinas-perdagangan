<?php $this->load->view('admin/header') ?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tambah Pengaduan</h3>
            </div>
            <div class="box-body">
                <form data-parsley-validate action="<?php echo base_url('daftarpengaduan/simpanpengaduan') ?>" method="post" enctype="multipart/form-data">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" type="text" name="nama" value="<?php echo (!empty($produk[0]->nama_produk)) ? $produk[0]->nama_produk : '' ?>" required><br>
                            <label>Alamat</label>
                            <input class="form-control" type="text" name="alamat" value="<?php echo (!empty($produk[0]->nama_produk)) ? $produk[0]->nama_produk : '' ?>" required><br>
                            <label>Nomor Telp/Hp</label>
                            <input class="form-control" type="text" name="nomorhp" value="<?php echo (!empty($produk[0]->nama_produk)) ? $produk[0]->nama_produk : '' ?>" required><br>
                        </div>
                        <div class="form-group">
                            <label></label>
                            <button class="btn btn-info" type="submit">Simpan</button>
                            <a class="btn btn-default" href="<?php echo base_url('daftarpengaduan') ?>">Kembali</a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="text" name="email" value="<?php echo (!empty($produk[0]->nama_produk)) ? $produk[0]->nama_produk : '' ?>" required><br>
                            <label>Pekerjaan</label>
                            <input class="form-control" type="text" name="pekerjaan" value="<?php echo (!empty($produk[0]->nama_produk)) ? $produk[0]->nama_produk : '' ?>" required><br>
                            <label>Deskripsi</label>
                            <textarea class="form-control" type="text" name="deskripsi" required><?php echo (!empty($produk[0]->deskripsi)) ? $produk[0]->deskripsi : '' ?></textarea>
                        </div>

                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('admin/footer') ?>