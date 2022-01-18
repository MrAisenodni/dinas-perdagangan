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

<!-- load library jquery dan highcharts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<!-- end load library -->
<?php
/* Mengambil query report*/
foreach ($report as $result) {
    $bulan[] = $this->models->bulan($result->bulan); //ambil bulan
    $value[] = (float) $result->nilai; //ambil nilai
}
/* end mengambil query*/

?>

<!-- Load chart dengan menggunakan ID -->
<div id="report"></div>
<!-- END load chart -->

<!-- Script untuk memanggil library Highcharts -->
<script type="text/javascript">
    $(function() {
        $('#report').highcharts({
            chart: {
                type: 'column',
                margin: 75,
                options3d: {
                    enabled: false,
                    alpha: 10,
                    beta: 25,
                    depth: 70
                }
            },
            title: {
                text: 'Report Januari- Desember',
                style: {
                    fontSize: '18px',
                    fontFamily: 'Verdana, sans-serif'
                }
            },
            subtitle: {
                text: 'Grafik Kenaikan Harga <?php echo $result->namabarang; ?>',
                style: {
                    fontSize: '15px',
                    fontFamily: 'Verdana, sans-serif'
                }
            },
            plotOptions: {
                column: {
                    depth: 25
                }
            },
            credits: {
                enabled: false
            },
            xAxis: {
                categories: <?php echo json_encode($bulan); ?>
            },
            exporting: {
                enabled: false
            },
            yAxis: {
                title: {
                    text: 'Harga Pokok'
                },
            },
            tooltip: {
                formatter: function() {
                    return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y, 0) + '</b>, in ' + this.series.name;
                }
            },
            series: [{
                name: 'Report Data',
                data: <?php echo json_encode($value); ?>,
                shadow: true,
                dataLabels: {
                    enabled: true,
                    color: '#045396',
                    align: 'center',
                    formatter: function() {
                        return Highcharts.numberFormat(this.y, 0);
                    }, // one decimal
                    y: 0, // 10 pixels down from the top
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            }]
        });
    });
</script>