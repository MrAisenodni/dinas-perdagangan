<?php $this->load->view('admin/header') ?>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Laporan Data Bahan Pokok</h3>
            </div>
            <div class="box-body">
                <form class="" action="" method="GET">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" name="tgl1" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Sampai</label>
                            <input type="date" name="tgl2" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Aksi</label>
                            <button type="submit" class="btn btn-info form-control"> Cari</button>
                        </div>
                    </div>
                    <?php if (isset($_GET['tgl1'])) : ?>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label>Cetak</label>
                                <a href="<?php echo base_url('laporan/cetaklaporan?tgl1=' . $_GET['tgl1'] . '&tgl2=' . $_GET['tgl2']) ?>" target="_blank" class="btn btn-info form-control"> Cetak</a>
                            </div>
                        </div>
                    <?php endif; ?>
                </form>
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Satuan</th>
                            <th>Harga Kemarin</th>
                            <th>Harga Hari ini</th>
                            <th>Perubahan Rp</th>
                            <th>Perubahan %</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($bahanpokok)) :
                            foreach ($bahanpokok as $key => $p) {
                                $no = $key + 1;
                                echo '<tr>';
                                echo '<td>' . $no . '</td>';
                                echo '<td>' . $p->namabarang . '</td>';
                                echo '<td>' . $p->satuan . '</td>';
                                echo '<td>' . $this->models->format_harga($p->hargakemarin) . '</td>';
                                echo '<td>' . $this->models->format_harga($p->hargahariini) . '</td>';
                                echo '<td>' . $p->perubahanrp . '</td>';
                                echo '<td>' . $p->perubahanpersen . '</td>';
                                echo '<td>' . $p->tanggalbahan . '</td>';
                                echo '<td><a href="' . base_url('laporan/cetak2/' . $p->idbahanpokok) . '"class="btn btn-danger btn-xs">Cetak</a>           
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