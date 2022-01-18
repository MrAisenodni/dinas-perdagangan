<?php $this->load->view('admin/header') ?>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data SOP dan Regulasi</h3>
                <div class="box-tools pull-right">
                    <a href="<?php echo base_url('layanan/tambahsop') ?>" class="btn btn-primary ">Tambah</a>
                </div>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama SOP</th>
                            <th>Tahun</th>
                            <th>Berkas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($keputusan)) :
                            foreach ($keputusan as $key => $p) {
                                $no = $key + 1;
                                echo '<tr>';
                                echo '<td>' . $no . '</td>';
                                // $name = $p->nama;
                                // $result3  = substr($p->nama, 0, 20); //dari kalimat depan 20 huruf ke belakang
                                // echo '<td>' . $result3  .   '</td>';
                                echo '<td>' . $p->nama . '</td>';
                                echo '<td>' . $p->tahun . '</td>';
                                // echo '<td><source src="' . base_url('upload/' . $p->berkas) . '"  width="150px">  </td>';
                        ?>
                                <?php if (!empty($p->berkas)) {
                                    $tipe = pathinfo(base_url('upload/' . $p->berkas), PATHINFO_EXTENSION);
                                ?>
                                    <?php if ($tipe == 'mp4') { ?>
                                        <td>
                                            <video width="100%" height="200px" src="<?php echo base_url(); ?>upload/<?php echo $p->berkas; ?>" controls>
                                        </td>
                                    <?php } elseif ($tipe == 'jpg') { ?>
                                        <td>
                                            <image width="100%" height="300px" src="<?php echo base_url(); ?>upload/<?php echo $p->berkas; ?>">
                                        </td>
                                    <?php } elseif ($tipe == 'jpeg') { ?>
                                        <td>
                                            <image width="100%" height="300px" src="<?php echo base_url(); ?>upload/<?php echo $p->berkas; ?>">
                                        </td>ss
                                    <?php } elseif ($tipe == 'PNG') { ?>
                                        <td>
                                            <image width="100%" height="300px" src="<?php echo base_url(); ?>upload/<?php echo $p->berkas; ?>">
                                        </td>
                                    <?php } elseif ($tipe == 'JPEG') { ?>
                                        <td>
                                            <image width="100%" height="300px" src="<?php echo base_url(); ?>upload/<?php echo $p->berkas; ?>">
                                        </td>
                                    <?php } elseif ($tipe == 'png') { ?>
                                        <td>
                                            <image width="100%" height="300px" src="<?php echo base_url(); ?>upload/<?php echo $p->berkas; ?>">
                                        </td>
                                    <?php } elseif ($tipe == 'JPG') { ?>
                                        <td>
                                            <image width="100%" height="300px" src="<?php echo base_url(); ?>upload/<?php echo $p->berkas; ?>">
                                        </td>
                                    <?php } elseif ($tipe == 'MP4') { ?>
                                        <td>
                                            <image width="100%" height="300px" src="<?php echo base_url(); ?>upload/<?php echo $p->berkas; ?>">
                                        </td>
                                    <?php } elseif ($tipe == 'MP4') { ?>
                                        <td>
                                            <image width="100%" height="300px" src="<?php echo base_url(); ?>upload/<?php echo $p->berkas; ?>">
                                        </td>
                                    <?php } elseif ($tipe == 'pdf') { ?>
                                        <td>
                                            <iframe width="100%" height="300px" src="<?php echo base_url(); ?>upload/<?php echo $p->berkas; ?>">
                                            </iframe>
                                        </td>
                                <?php }
                                }
                                ?>
                        <?php

                                echo '<td><a href="' . base_url('layanan/editsop/' . $p->idkeputusan) . '"class="btn btn-info btn-xs">Edit</a>
                    <a href="' . base_url('layanan/hapussop/' . $p->idkeputusan) . '" class="btn btn-danger btn-xs">Hapus</a>              
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