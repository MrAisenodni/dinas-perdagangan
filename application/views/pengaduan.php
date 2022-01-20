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
                        <h2>PENGADUAN</h2>
                        <p>home . Informasi layanan . pengaduan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><br>
<!-- breadcrumb start-->

<div class="container">
    <div class="row m-n5">
        <div class="col-lg-6 col-sm-6">
            <img src="<?php echo base_url('upload/infografis-01.png') ?>" alt="Infografis" height="75%">
            <img src="<?php echo base_url('upload/layanan-02.png') ?>" alt="Infografis" height="25%" width="90%">
        </div>
        <div class="col-lg-6 col-sm-7 ml-6"><br><br>
            <h1>Pengaduan Layanan</h1>
            <span>Silahkan melakukan pengaduan, Jika sudah Cek status pengaduan Klik &nbsp
                <a class="btn btn-info" href="<?php echo base_url('layanan/statuspengaduan') ?>">Di sini</a>
            </span><br><br><br>
            <?php echo $this->session->flashdata('msg'); ?>
            <form class="" action="<?php echo base_url('layanan/simpanpengaduan') ?>" method="post" autocomplete="off">
                <!-- <div class="mb-3">
                    <label for="exampleInputNama" class="form-label">NIK</label>
                    <input class="form-control" type="text" name="NIK" value="<?php echo (!empty($pengaduan[0]->NIK)) ? $pengaduan[0]->NIK : '' ?>" required><br>
                </div><br> -->

                <div class="mb-3">
                    <label for="exampleInputNama" class="form-label">Nama</label>
                    <input class="form-control" type="text" name="nama" value="<?php echo $this->session->userdata('nama') ?>" required readonly><br>
                </div><br>

                <div class="mb-3">
                    <label for="exampleInputAlamat" class="form-label">Alamat</label>
                    <input class="form-control" type="text" name="alamat" value="<?php echo (!empty($pengaduan[0]->alamat)) ? $pengaduan[0]->alamat : '' ?>" required><br>
                </div><br>

                <div class="mb-3">
                    <label for="exampleInputNomor" class="form-label">Nomor Telp/Hp</label>
                    <input class="form-control" type="text" name="nomorhp" value="<?php echo (!empty($pengaduan[0]->nomorhp)) ? $pengaduan[0]->nomorhp : '' ?>" required><br>
                </div><br>

                <div class="mb-3">
                    <label>Email</label>
                    <input class="form-control" type="text" placeholder="name@example.com" name=" email" value="<?php echo (!empty($pengaduan[0]->email)) ? $pengaduan[0]->email : '' ?>" required><br>
                </div>

                <div class="mb-3">
                    <label>Pekerjaan</label>
                    <input class="form-control" type="text" name="pekerjaan" value="<?php echo (!empty($pengaduan[0]->pekerjaan)) ? $pengaduan[0]->pekerjaan : '' ?>" required><br>
                </div><br>

                <div class="mb-3">
                    <label>Jenis Layanan</label>
                    <select name="jenislayanan" id="jenislayanan" class="form-control" required onchange="getChange(this)">
                        <option value="" hidden>--- PILIH JENIS LAYANAN ---</option>
                        <?php foreach ($jenislayanan as $key => $p) { ?>
                            <option id="jlayanan" value="<?php echo $p->id ?>" data-id="<?php echo $p->id ?>" data-param="<?php echo $p->deskripsi ?>"><?php echo $p->nama ?></option>
                        <?php } ?>
                    </select>
                </div>
                <br>
                
                <div class="mb-3">
                    <label>Deskripsi Layanan</label>
                    <textarea id="textlayanan" class="form-control" type="text" name="hal" value="" disabled rows="5"></textarea><br>
                </div>
                
                <div class="mb-3">
                    <label>Hal yang diadukan</label>
                    <textarea class="form-control" type="text" name="hal" value="<?php echo (!empty($pengaduan[0]->hal)) ? $pengaduan[0]->hal : '' ?>" required rows="5"></textarea><br>
                </div>

                <div class="form-group">
                    <label></label>
                    <button class="btn btn-info" type="submit">Simpan</button>
                    <!-- <a class="btn btn-default" href="<?php echo base_url('layanan/daftarpengaduan') ?>">Kembali</a> -->
                </div>
            </form>
        </div>
    </div>
</div><br><br><br><br>
<script>
    function getChange(selectObject) {
        var pesan = document.getElementById('jenislayanan').options[document.getElementById('jenislayanan').selectedIndex].getAttribute('data-param'); 

        console.log(pesan)
        document.getElementById('textlayanan').value = pesan; 
    }
    // $('#jenislayanan').change(function() {
    //  var id = $('option:selected').attr('data-id'); 
    //  var pesan = $('option:selected').attr('data-param');  
    //  console.log(id); 
    //  $('#textlayanan').text(pesan); 
//   })
</script>

<?php
$this->load->view('footer');
?>