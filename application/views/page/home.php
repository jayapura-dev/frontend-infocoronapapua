<script src="<?php echo base_url()?>assets/frontend/js/highcharts.js"></script>
<script src="<?php echo base_url()?>assets/frontend/js/exporting.js"></script>
<script src="<?php echo base_url()?>assets/frontend/js/export-data.js"></script>
<script src="<?php echo base_url()?>assets/backend/js/jquery-1.11.3.min.js"></script>

<style>
    body {
    padding: 0;
    margin: 0;
    }
    html, body, #map {
    height: 100%;
    width: 100%;
    }
</style>

<?php foreach($suspect as $i){
    $confirm = $i->Confirm;
    $positif = $i->Positif;
    $sembuh = $i->Sembuh;
    $meninggal = $i->Meninggal;
} ?>
<?php foreach($prosentase as $p){
    $p_positif = $p->p_positif;
    $p_sembuh = $p->p_sembuh;
    $p_meninggal = $p->p_meninggal;

} ?>
<?php
foreach($sus as $l){
    $nama_kab[] = $l->nama_kab;
    $jumlah_suspect[] = (float)$l->confirm;
    $jumlah_rawat[] = (float)$l->positif;
    $jumlah_sembuh[] = (float)$l->sembuh;
    $jumlah_meninggal[] = (float)$l->meninggal;
}
foreach($dataindo as $indo){
    $indo_positif = $indo->positif;
    $indo_sembuh = $indo->sembuh;
    $indo_meninggal = $indo->meninggal;
}
?>

<div class="hero-section app-hero">
    <div class="container">
        <div class="hero-content app-hero-content text-center">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <h1 class="wow fadeInUp" data-wow-delay="0s">INFO CORONA PAPUA</h1>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        COVID 19 PAPUA & INDONESIA LIVE DATA
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex-features" id="features">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card-counter yellow">
                    <img src="<?php echo base_url()?>assets/frontend/images/sedih2.png" width="70px" alt="sedih" />
                    <span class="count-numbers"><?php echo $confirm ?></span>
                    <span class="count-prosentase">100 %</span>
                    <span class="count-name">TOTAL SUSPECT</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-counter pink">
                    <img src="<?php echo base_url()?>assets/frontend/images/terluka.png" width="70px" alt="terluka" />
                    <span class="count-numbers"><?php echo $positif ?></span>
                    <span class="count-prosentase"><?php echo number_format($p_positif,2) ?> %</span>
                    <span class="count-name">TOTAL DIRAWAT</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-counter lightgreen">
                    <img src="<?php echo base_url()?>assets/frontend/images/senang.png" width="70px" alt="senang" />
                    <span class="count-numbers"><?php echo $sembuh ?></span>
                    <span class="count-prosentase"><?php echo number_format($p_sembuh,2) ?> %</span>
                    <span class="count-name">TOTAL SEMBUH</span>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-counter darkgreen">
                    <img src="<?php echo base_url()?>assets/frontend/images/menangis.png" width="70px" alt="menangis" />
                    <span class="count-numbers"><?php echo $meninggal ?></span>
                    <span class="count-prosentase"><?php echo number_format($p_meninggal,2) ?> %</span>
                    <span class="count-name">TOTAL MENINGGAL</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex-features" id="features">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 mt-12">
                <div class="card">
                    <div class="card-header">
                        <h3>GRAFIK PASIEN SUSPECT</h3>
                    </div>
                    <div class="card-block">
                        <div id="info" style="height: 350px; auto"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex-features" id="features">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 mt-12">
                <div class="card">
                    <div class="card-header">
                        <h3>MAPS</h3>
                    </div>
                    <div class="card-block">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex-features" id="features">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>REKAP KABUPATEN / KOTA</h5>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Kabupaten/Kota</th>
                                    <th class="text-center">Positif</th>
                                    <th class="text-center">Dirawat</th>
                                    <th class="text-center">Sembuh</th>
                                    <th class="text-center">Meninggal</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1; 
                                foreach($suskab as $pos){?>
                                <tr>
                                    <td class="text-center">
                                        <a href="#viewsuspectkabkota" data-id="<?php echo $pos->id_kabupaten ?>" data-toggle="modal" title="Get Data"><img src="<?php echo base_url()?>assets/backend/images/kabkota/<?php echo $pos->logo ?>" width="20px" /></a>
                                    </td>
                                    <td class="text-uppercase"><?php echo $pos->nama_kab ?></td>
                                    <td class="text-center"><?php echo $pos->jumlah_suspect ?></td>
                                    <td class="text-center"><?php echo $pos->positif ?></td>
                                    <td class="text-center"><?php echo $pos->sembuh ?></td>
                                    <td class="text-center"><?php echo $pos->meninggal ?></td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex-features" id="features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>LIVE DATA KASUS INDONESIA (Data : Kawal Corona Indonesia)</h3>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card-counter yellow">
                                    <img src="<?php echo base_url()?>assets/frontend/images/sedih2.png" width="70px" alt="sedih" />
                                    <span class="count-numbers"><?php echo $indo_positif ?></span>
                                    <span class="count-prosentase">INDONESIA</span>
                                    <span class="count-name">TOTAL SUSPECT</span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card-counter lightgreen">
                                    <img src="<?php echo base_url()?>assets/frontend/images/senang.png" width="70px" alt="senang" />
                                    <span class="count-numbers"><?php echo $indo_sembuh ?></span>
                                    <span class="count-prosentase">INDONESIA</span>
                                    <span class="count-name">TOTAL SEMBUH</span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card-counter darkgreen">
                                    <img src="<?php echo base_url()?>assets/frontend/images/menangis.png" width="70px" alt="senang" />
                                    <span class="count-numbers"><?php echo $indo_meninggal ?></span>
                                    <span class="count-prosentase">INDONESIA</span>
                                    <span class="count-name">TOTAL MENINGGAL</span>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 mt-12">
                                <div class=table-responsive>
                                    <!--<table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center"><strong>NO</strong></th>
                                                <th><strong>PROVINSI</strong></th>
                                                <th class="text-center">POSITIF</th>
                                                <th class="text-center">SEMBUH</th>
                                                <th class="text-center">MENINGGAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no = 1;
                                        foreach($dataprovinsi as $item){?>
                                            <tr></tr>
                                                <td class="text-center"><?php echo $no++ ?></td>
                                                <td class="text-uppercase"><?php echo $item->attributes->Provinsi ?></td>
                                                <td class="text-center"><?php echo $item->attributes->Kasus_Posi ?></td>
                                                <td class="text-center"><?php echo $item->attributes->Kasus_Semb ?></td>
                                                <td class="text-center"><?php echo $item->attributes->Kasus_Meni ?></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>!-->
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="viewsuspectkabkota" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
              <div class="v_suspect">
                
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect btn-sm " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    Highcharts.chart('info', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'DATA PASIEN SUSPECT KABUPATEN / KOTA'
    },
    xAxis: {
        categories: <?php echo json_encode($nama_kab); ?>,
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'ORANG'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.0f} Orang</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Confirm',
        data: <?php echo json_encode($jumlah_suspect); ?>

    },
    {
        name: 'Dirawat',
        data: <?php echo json_encode($jumlah_rawat); ?>

    },
    {
        name: 'Sembuh',
        data: <?php echo json_encode($jumlah_sembuh); ?>

    },
    {
        name: 'Meninggal',
        data: <?php echo json_encode($jumlah_meninggal); ?>

    }]
});

</script>

<script>
  $(document).ready(function(){
    $('#viewsuspectkabkota').on('show.bs.modal', function (e) {
        var idkabupaten = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'POST',
            url : '<?php echo base_url();?>home/get_suspect_kabkota/'+idkabupaten,
            data :  'idkabupaten='+ idkabupaten,
            success : function(data){
            $('.v_suspect').html(data);
            }
        });
    });
  });
</script>

<script>
    var L = window.L;
    var map = L.map('map').setView([51.505, -0.09], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([51.5, -0.09]).addTo(map)
        .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
        .openPopup();
</script>