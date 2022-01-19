<?php $this->load->view('admin/header') ?>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Laporan Data Pengaduan</h3>
            </div>
            <div class="box-body">
            <form class="" action="" method="GET">
                    <!-- <div class="col-sm-3">
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" name="tgl1" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Sampai</label>
                            <input type="date" name="tgl2" class="form-control" required>
                        </div>
                    </div> -->
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label>Jenis Layanan</label>
                            <select name="jenis" id="jenis" class="form-control" required>
                                <option value="" hidden>--- PILIH JENIS LAYANAN ---</option>
                                <?php foreach ($jenis as $key => $p) { ?>
                                    <option value="<?php echo $p->id ?>"><?php echo $p->nama ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Aksi</label>
                            <button type="submit" class="btn btn-info form-control"> Cari</button>
                        </div>
                    </div>
                    <?php if (isset($_GET['jenis'])) : ?>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label>Cetak</label>
                                <!-- <a href="<?php echo base_url('laporan/cetaklaporanpengaduan?tgl1=' . $_GET['tgl1'] . '&tgl2=' . $_GET['tgl2'] . '&jenis=' .$_GET['jenis']) ?>" target="_blank" class="btn btn-info form-control"> Cetak</a> -->
                                <a href="<?php echo base_url('laporan/cetaklaporanpengaduan?jenis=' .$_GET['jenis']) ?>" target="_blank" class="btn btn-info form-control"> Cetak</a>
                            </div>
                        </div>
                    <?php endif; ?>
                </form>
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <!-- <th>NIK</th> -->
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Nomor Telp/Hp</th>
                            <th>Email</th>
                            <th>Pekerjaan</th>
                            <th>Jenis Layanan</th>
                            <th>Hal yang diadukan</th>
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
                                $no = $key + 1;
                                echo '<tr>';
                                echo '<td>' . $no . '</td>';
                                // echo '<td>' . $p->NIK . '</td>';
                                echo '<td>' . $p->nama . '</td>';
                                echo '<td>' . $p->alamat . '</td>';
                                echo '<td>' . $p->nomorhp . '</td>';
                                echo '<td>' . $p->email . '</td>';
                                echo '<td>' . $p->pekerjaan . '</td>';
                                echo '<td>' . $data[0]->nama . '</td>';
                                echo '<td>' . $p->hal . '</td>';
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
                                echo '<td><a href="' . base_url('laporan/cetak/' . $p->idpengaduan) . '"class="btn btn-danger btn-xs">Cetak</a> 
             
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

<script type="text/javascript">
    $('#example1').DataTable();

    function edit_kat(id) {
        $('#modal_kategori').modal('toggle');
        $('#kategori_id').val($('#' + id).data('id'));
        $('#nama_kategori').val($('#' + id).data('name'));
    }
</script>

<?php $this->load->view('admin/footer') ?>