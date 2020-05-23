<script src="<?php echo base_url()?>assets/frontend/js/highcharts.js"></script>
<script src="<?php echo base_url()?>assets/frontend/js/exporting.js"></script>
<script src="<?php echo base_url()?>assets/frontend/js/export-data.js"></script>
<script src="<?php echo base_url()?>assets/frontend/js/jquery-1.11.3.min.js"></script>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-plugins/3.3.1/layer/vector/KML.min.js"></script>
<script src="<?php echo base_url('assets/leaflet-providers/leaflet-providers.js')?>"></script>
<script src="https://rawgithub.com/ismyrnow/Leaflet.groupedlayercontrol/master/src/leaflet.groupedlayercontrol.js"></script>

  <style>
        #map { height: 400px; }
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

foreach($jumlah_harian as $h){
    $tanggal = $h->date_created;
    $jumlah[] = (float)$h->jumlah;
}

$tanggal_harian = $this->indo_tanggal->tgl_indo($tanggal);

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
                        <div id="harian" style="height: 300px; auto"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<div class="flex-features" id="features">
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
</div>!-->

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
                                foreach($suskab as $pos){
                                $idkab = $pos->id_kabupaten;
                                ?>
                                <tr>
                                    <td class="text-center">
                                        <a href="#viewsuspectkabkota" data-id="<?php echo $pos->id_kabupaten ?>" data-toggle="modal" title="Get Data"><img src="<?php echo base_url()?>assets/frontend/images/kabkota/<?php echo $pos->logo ?>" width="20px" /></a>
                                    </td>
                                    <td class="text-uppercase"><?php echo $pos->nama_kab ?></td>
                                    <td class="text-center">
                                    <?php echo $pos->jumlah_suspect ?>                
                                        <?php foreach($tambah_harian as $h){
                                            if($idkab==$h->id_kabupaten){ ?>
                                                 <text class="small" style="color:red;"> +<?php echo $h->jumlah ?></text>
                                        <?php } ?>
                                    <?php } ?>
                                    </td>
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
                                    <table class="table table-bordered">
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
                                    </table>
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

<!--<script type="text/javascript">
    Highcharts.chart('harian', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Monthly Average Temperature'
    },
    xAxis: {
        type: 'datetime',
        categories: <?php echo json_encode($tanggal); ?>
    },
    yAxis: {
        title: {
            text: 'Orang'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Penambahan',
        data: <?php echo json_encode($jumlah); ?>

    }]
});
</script>!-->

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

    var map = L.map('map', {
        center: [39.73, -104.99],
        zoom: 10,
        layers: [papua]
    });

    L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=G2IbtGpTNFctQvmZhidF', {
        attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',

    }).addTo(map);

    var base_url = <?php echo base_url()?>

    var papua = new L.LayerGroup();

    $.getJSON(base_url+"home/papua",function(data){
        $.each(data, function(i, field){
            var lat = parseFloat(data[i].latitude);
            var lon = parseFloat(data[i].longitude);

            var iconLogo = L.icon({
                iconUrl: base_url+'assets/images/kabkota/'+logo
                iconSize: [30, 30]
            });

            L.marker([lon,lat]).addTo(papua)
                .bindPopup(data[i].nama_kab)
                .openPopup('');
        });
    });

    var baseLayers = {
        'Satelite': L.tileLayer.provider('Esri.WorldImagery'),
        'OpenStreetMap': L.tileLayer.provider('OpenStreetMap.HOT').addTo(map)
    };

    var overlayMaps = {
        "Papua": papua
    };

    L.control.groupedLayers(overlayMaps).addTo(map);
  });
</script>