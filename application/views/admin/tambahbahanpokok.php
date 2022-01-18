<?php $this->load->view('admin/header') ?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tambah Bahan Pokok</h3>
            </div>
            <div class="box-body">
                <form data-parsley-validate action="<?php echo base_url('layanan/simpanbahanpokok') ?>" method="post" enctype="multipart/form-data">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" type="hidden" name="idbahanpokok" value="<?php echo (!empty($bahanpokok[0]->idbahanpokok)) ? $bahanpokok[0]->idbahanpokok : '' ?>" required><br>
                            <label for="exampleFormControlSelect1">Nama Barang</label>
                            <select class="form-control" name="namabarang" id="exampleFormControlSelect1">
                                <option value="Beras Naga">Beras Naga</option>
                                <option value="Beras Mawar Melati">Beras Mawar Melati</option>
                                <option value="Beras Talia">Beras Talia</option>
                                <option value="Beras Mawar">Beras Mawar</option>
                                <option value="Beras Ketupat">Beras Ketupat</option>
                                <option value="Beras Dua Hati">Beras Dua Hati</option>
                                <option value="Beras Kapal">Beras Kapal</option>
                                <option value="Beras Kupu Kupu">Beras Kupu Kupu</option>
                                <option value="Beras Slyp Super">Beras Slyp Super</option>
                                <option value="Beras Bambu">Beras Bambu</option>
                                <option value="Gula Pasir">Gula Pasir</option>
                                <option value="Gula Merah">Gula Merah</option>
                                <option value="Bimoli Spesial Botol">Bimoli Spesial Botol</option>
                                <option value="Kunci Mas">Kunci Mas</option>
                                <option value="Bimoli Spesial">Bimoli Spesial</option>
                                <option value="Bimoli Spesial">Bimoli Spesial</option>
                                <option value="Viola">Viola</option>
                                <option value="Periswell">Periswell</option>
                                <option value="Tropikal">Tropikal</option>
                                <option value="Tropikal">Tropikal</option>
                                <option value="Glamor">Glamor</option>
                                <option value="Kapal Malaysia">Kapal Malaysia</option>
                                <option value="Mas Malaysia">Mas Malaysia</option>
                                <option value="Rama-Rama">Rama-Rama</option>
                                <option value="Bola">Bola</option>
                                <option value="Gatot Kaca">Gatot Kaca</option>
                                <option value="Ketan Putih">Ketan Putih</option>
                                <option value="Kanji">Kanji</option>
                                <option value="Daging Sapi Lokal">Daging Sapi Lokal</option>
                                <option value="Daging Sapi Beku">Daging Sapi Beku</option>
                                <option value="Daging Ayam Broiler">Daging Ayam Broiler</option>
                                <option value="Daging Ayam Kampung">Daging Ayam Kampung</option>
                                <option value="Telur Ayam Boiler">Telur Ayam Boiler</option>
                                <option value="Telur Ayam Kampung">Telur Ayam Kampung</option>
                                <option value="Telur Bebek">Telur Bebek</option>
                                <option value="Cabe Merah Besarg">Cabe Merah Besar</option>
                                <option value="Cabe Keriting">Cabe Keriting</option>
                                <option value="Cabe Biasa/Tiung Lokal">Cabe Biasa/Tiung Lokal</option>
                                <option value="Bawang Merah">Bawang Merah</option>
                                <option value="Bawang Putih">Bawang Putih</option>
                                <option value="Kasar">Kasar</option>
                                <option value="Halus">Halus</option>
                                <option value="Kacang Kedelai Ekspor dan Impor">Kacang Kedelai Ekspor dan Impor</option>
                                <option value="Lokal">Lokal</option>
                                <option value="Kacang Hijau">Kacang Hijau</option>
                                <option value="Kacang Tanah">Kacang Tanah</option>
                                <option value="Kacang Merah">Kacang Merah</option>
                                <option value="Indomie Rasa Kari Ayam">Indomie Rasa Kari Ayam</option>
                                <option value="Ikan Asin teri kecil">Ikan Asin teri kecil</option>
                                <option value="Ikan Asin teri besar">Ikan Asin teri besar</option>
                                <option value="Ikan Bandeng">Ikan Bandeng</option>
                                <option value="Ikan layang">Ikan layang</option>
                                <option value="Ikan Tongkol">Ikan Tongkol</option>
                                <option value="Ikan Kakap Merah">Ikan Kakap Merah</option>
                                <option value="Ikan Kembung">Ikan Kembung</option>
                                <option value="Mujair">Mujair</option>
                                <option value="Ketela Pohon">Ketela Pohon</option>
                                <option value="Kentang">Kentang</option>
                                <option value="Kol">Kol</option>
                                <option value="Tomat">Tomat</option>
                                <option value="Kol">Wortel</option>
                                <option value="Tomat">Pipilan</option>
                                <option value="Tomat">Pecah</option>
                            </select>
                            <div class="form-group">
                                <label>Satuan</label>
                                <input class="form-control" type="text" name="satuan" value="<?php echo (!empty($bahanpokok[0]->satuan)) ? $bahanpokok[0]->satuan : '' ?>" required><br>
                                <label>Harga Kemarin</label>
                                <input class="form-control" type="text" name="hargakemarin" value="<?php echo (!empty($bahanpokok[0]->hargakemarin)) ? $bahanpokok[0]->hargakemarin : '' ?>" required><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Harga Hari ini</label>
                            <input class="form-control" type="text" name="hargahariini" value="<?php echo (!empty($bahanpokok[0]->hargahariini)) ? $bahanpokok[0]->hargahariini : '' ?>" required><br>
                            <label>Perubahan Rupiah</label>
                            <input class="form-control" type="text" name="perubahanrp" value="<?php echo (!empty($bahanpokok[0]->perubahanrp)) ? $bahanpokok[0]->perubahanrp : '' ?>" required><br>
                            <label>Perubahan % </label>
                            <input class="form-control" type="text" name="perubahanpersen" value="<?php echo (!empty($bahanpokok[0]->perubahanpersen)) ? $bahanpokok[0]->perubahanpersen : '' ?>" required><br>
                            <label>Tanggal</label>
                            <input class="form-control" type="date" name="tanggalbahan" value="<?php echo (!empty($bahanpokok[0]->tanggalbahan)) ? $bahanpokok[0]->tanggalbahan : '' ?>" required><br>
                        </div>
                    </div>

                    <div class="form-group">
                        <label></label>
                        <button class="btn btn-info" type="submit">Simpan</button>
                        <a class="btn btn-default" href="<?php echo base_url('layanan/daftarbahanpokok') ?>">Kembali</a>
                    </div>

            </div>


            </form>
        </div>
    </div>
</div>
</div>
<?php $this->load->view('admin/footer') ?>