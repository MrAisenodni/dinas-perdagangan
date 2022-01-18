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
                        <h2>DAFTAR BAHAN POKOK</h2>
                        <p>home . Informasi layanan . Daftar Bahan Pokok</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- breadcrumb start-->
<div class="row justify-content-center">
    <div class="col-lg-8"><br><br>
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

                </tr>
            </thead>
            <tbody>
                <?php if (!empty($bahanpokok)) :
                    foreach ($bahanpokok as $key => $p) {
                        $no = $key + 1;
                        echo '<tr>';
                        echo '<td>' . $no . '</td>';
                        // echo '<td>' . $p->namabarang . '</td>';
                        echo '<td><a href="' . base_url('home/grafikbahanpokok/' . $p->namabarang) . '">' . $p->namabarang . '</a>
                        </td>';
                        echo '<td>' . $p->satuan . '</td>';
                        echo '<td>' . $this->models->format_harga($p->hargakemarin) . '</td>';
                        echo '<td>' . $this->models->format_harga($p->hargahariini) . '</td>';
                        echo '<td>' . $p->perubahanrp . '</td>';
                        echo '<td>' . $p->perubahanpersen . '</td>';

                        echo '</tr>';
                    }
                endif; ?>
            </tbody>
        </table><br><br>
    </div>
</div>

<?php
$this->load->view('footer');
?>