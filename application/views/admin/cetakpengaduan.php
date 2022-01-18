<?php $this->load->view('admin/header') ?>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Laporan Data Pengaduan</h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Nomor Telp/Hp</th>
                            <th>Email</th>
                            <th>Pekerjaan</th>
                            <th>Hal yang diadukan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($pengaduan)) :
                            foreach ($pengaduan as $key => $p) {
                                $no = $key + 1;
                                echo '<tr>';
                                echo '<td>' . $no . '</td>';
                                echo '<td>' . $p->NIK . '</td>';
                                echo '<td>' . $p->nama . '</td>';
                                echo '<td>' . $p->alamat . '</td>';
                                echo '<td>' . $p->nomorhp . '</td>';
                                echo '<td>' . $p->email . '</td>';
                                echo '<td>' . $p->pekerjaan . '</td>';
                                echo '<td>' . $p->hal . '</td>';
                                echo '<td>' . $p->status . '</td>';
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