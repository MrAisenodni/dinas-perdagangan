<?php $this->load->view('admin/header') ?>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Berita</h3>
                <div class="box-tools pull-right">
                    <a href="<?php echo base_url('berita/tambahberita') ?>" class="btn btn-primary ">Tambah</a>
                </div>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Berita</th>
                            <th>Tanggal</th>
                            <th>Foto</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($berita)) :
                            foreach ($berita as $key => $p) {
                                $no = $key + 1;
                                echo '<tr>';
                                echo '<td>' . $no . '</td>';
                                $name = $p->namaberita;
                                $result  = substr($p->namaberita, 0, 20); //dari kalimat depan 20 huruf ke belakang
                                echo '<td>' . $result  .   '</td>';
                                // echo '<td>' . $p->namaberita . '</td>';
                                echo '<td>' . $this->models->format_tanggal($p->tanggalberita) . '</td>';
                                echo '<td><img src="' . base_url('upload/' . $p->foto) . '"  width="150px">  </td>';
                                $name = $p->deskripsi;
                                $result1  = substr($p->deskripsi, 0, 10); //dari kalimat depan 20 huruf ke belakang
                                echo '<td>' . $result1  .   '</td>';
                                echo '<td><a href="' . base_url('berita/edit/' . $p->idberita) . '"class="btn btn-info btn-xs">Edit</a>
                    <a href="' . base_url('berita/hapus/' . $p->idberita) . '" class="btn btn-danger btn-xs">Hapus</a>              
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