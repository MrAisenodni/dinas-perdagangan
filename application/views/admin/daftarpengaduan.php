<?php $this->load->view('admin/header') ?>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Pengaduan</h3>
                <!-- <div class="box-tools pull-right">
                    <a href="<?php echo base_url('layanan/tambahpengaduan') ?>" class="btn btn-primary ">Tambah</a>
                </div> -->
            </div>
            <div class="box-body">
                <div class="row">
                    <form class="" action="" method="GET">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <select name="status" id="status" class="form-control">
                                    <option value="" hidden>--- PILIH STATUS ---</option>
                                    <option value="selesai">SELESAI</option>
                                    <option value="tulis">TULIS LAPORAN</option>
                                    <option value="verifikasi">VERIFIKASI</option>
                                    <option value="tindaklanjut">PROSES TINDAK LANJUT</option>
                                    <option value="pending">BERI TANGGAPAN</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <input type="text" name="keyword" class="form-control" placeholder="Masukkan kata kunci" />
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <button type="submit" class="btn btn-info form-control"> Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <!-- <th>NIK</th> -->
                                <th>Nama</th>
                                <!-- <th>Alamat</th> -->
                                <th>Nomor Telp/Hp</th>
                                <th>Email</th>
                                <!-- <th>Pekerjaan</th> -->
                                <th>Jenis Layanan</th>
                                <th>Hal yang diadukan</th>
                                <th>Balasan Pengaduan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $this->load->model('models');
                    
                            if (!empty($pengaduan)) :
                                foreach ($pengaduan as $key => $p) {
                                    $data = $this->models->getlayanan(array('id' => $p->idjenis), 'jenislayanan');
                                    $user = $this->models->cariadmin(
                                        array(
                                            'idadmin'     => $p->idadmin,
                                        ),
                                        'admin'
                                    );
    
                                    $no = $key + 1;
                                    echo '<tr>';
                                    echo '<td>' . $no . '</td>';
                                    // echo '<td>' . $p->NIK . '</td>';
                                    echo '<td>' . $user[0]->nama . '</td>';
                                    // echo '<td>' . $p->alamat . '</td>';
                                    echo '<td>' . $p->nomorhp . '</td>';
                                    echo '<td>' . $p->email . '</td>';
                                    // echo '<td>' . $p->pekerjaan . '</td>';
                                    echo '<td>' . $data[0]->nama . '</td>';
                                    echo '<td>' . $p->hal . '</td>';
                                    if (!empty($p->balas)) { echo '<td>'.$p->balas.'</td>'; } else { echo '<td></td>'; }
                                    if($p->status == 'selesai') {
                                        echo '<td><div class="btn btn-success">Selesai</div></td>';
                                    } elseif ($p->status == 'tulis') {
                                        echo '<td><div class="btn btn-warning">Tulis Laporan</div></td>';
                                    } elseif ($p->status == 'verifikasi') {
                                        echo '<td><div class="btn btn-info">Proses Verifikasi</div></td>';
                                    } elseif ($p->status == 'tindaklanjut') {
                                        echo '<td><div class="btn btn-warning">Proses Tindak Lanjut</div></td>';
                                    } else {
                                        echo '<td><div class="btn btn-danger">Beri Tanggapan</div></td>';
                                    }
                                    echo '<td><a href="' . base_url('layanan/verifikasi/' . $p->idpengaduan) . '"class="btn btn-info btn-xs">Verifikasi</a>
                        <a href="' . base_url('layanan/hapuspengaduan/' . $p->idpengaduan) . '" class="btn btn-danger btn-xs">Hapus</a>              
                        </td>';
                                    echo '</tr>';
                                }
                            endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#example1').DataTable();

    function edit_kat(id) {
        $('#modal_kategori').modal('toggle');
        $('#kategori_id').val($('#' + id).data('id'));
        $('#nama_kategori').val($('#' + id).data('name'));
    }
</script>

<?php $this->load->view('admin/footer') ?>