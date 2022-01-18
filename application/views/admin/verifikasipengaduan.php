<?php $this->load->view('admin/header') ?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">verifikasi pengaduan</h3>
            </div>
            <div class="box-body">
                <form data-parsley-validate action="<?php echo base_url('layanan/simpanverifikasi') ?>" method="post" enctype="multipart/form-data">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status</label>
                            <input class="form-control" type="hidden" name="idpengaduan" value="<?php echo (!empty($pengaduan[0]->idpengaduan)) ? $pengaduan[0]->idpengaduan : '' ?>" required><br>
                            <select class="form-control" name="status" id="exampleFormControlSelect1">
                                <option value="tulis">Tulis Laporan</option>
                                <option value="verifikasi">Proses Verifikasi</option>
                                <option value="tindaklanjut">Proses Tindak Lanjut</option>
                                <option value="pending">Beri Tanggapan</option>
                                <option value="selesai">Selesai</option>
                            </select>
                            <br>
                            <div class="form-group">
                                <label>Berkas</label>
                                <input type="file" name="berkas" required><br>
                            </div><br>
                            <div class="form-group">
                                <label></label>
                                <button class="btn btn-info" type="submit">Simpan</button>
                                <a class="btn btn-default" href="<?php echo base_url('layanan/daftarpengaduan') ?>">Kembali</a>
                            </div>
                        </div>
                    </div>




            </div>


            </form>
        </div>
    </div>
</div>
</div>
<?php $this->load->view('admin/footer') ?>