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
<!-- <div id="modal_kategori" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Kategori</h4>
            </div>
            <form class="" action="<?php echo base_url('data_kategori_sewa/simpan') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="hidden" name="kategori_id" id="kategori_id" class="form-control">
                        <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">Simpan</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>

    </div>
</div> -->
<script type="text/javascript">
    $('#example1').DataTable();

    function edit_kat(id) {
        $('#modal_kategori').modal('toggle');
        $('#kategori_id').val($('#' + id).data('id'));
        $('#nama_kategori').val($('#' + id).data('name'));
    }
</script>

<?php $this->load->view('admin/footer') ?>