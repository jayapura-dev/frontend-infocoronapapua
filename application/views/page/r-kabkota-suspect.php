<link href="<?php echo base_url()?>assets\frontend\css\card-small.css" rel="stylesheet" type="text/css">

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <img src="<?php echo base_url()?>assets/backend/images/kabkota/<?php echo $kabupaten['logo_path'] ?>" width="30px" /> PASIEN SUSPECT <strong> <text class="text-uppercase">( <?php echo $kabupaten['nama_kab'] ?> )</text></strong>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card-small yellow">
                        <img src="<?php echo base_url()?>assets/frontend/images/sedih2.png" width="40px" alt="sedih" />
                        <span class="count-numbers-small"><?php echo $countsuspect['confirm'] ?></span>
                        <span class="count-prosentase-small">100 %</span>
                        <span class="count-name-small">CONFIRM</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-small pink">
                        <img src="<?php echo base_url()?>assets/frontend/images/terluka.png" width="40px" alt="sedih" />
                        <span class="count-numbers-small"><?php echo $countsuspect['positif'] ?></span>
                        <span class="count-prosentase-small"><?php echo number_format($prosuspect['p_positif'],1) ?> %</span>
                        <span class="count-name-small">PERAWATAN</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-small lightgreen">
                        <img src="<?php echo base_url()?>assets/frontend/images/senang.png" width="40px" alt="sedih" />
                        <span class="count-numbers-small"><?php echo $countsuspect['sembuh'] ?></span>
                        <span class="count-prosentase-small"><?php echo number_format($prosuspect['p_sembuh'],1) ?> %</span>
                        <span class="count-name-small">SEMBUH</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-small darkgreen">
                        <img src="<?php echo base_url()?>assets/frontend/images/menangis.png" width="40px" alt="sedih" />
                        <span class="count-numbers-small"><?php echo $countsuspect['meninggal'] ?></span>
                        <span class="count-prosentase-small"><?php echo number_format($prosuspect['p_meninggal'],1) ?> %</span>
                        <span class="count-name-small">MENINGGAL</span>
                    </div>
                </div>
                
            </div>
        </div>
        <br/>
        <div class="table-responsive">
            <table class="table small table-bordered">
                <thead></thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Umur</th>
                        <th class="text-center">Gender</th>
                        <th class="text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    foreach($kabkotasuspect as $item){ ?>
                    <tr>
                        <td class="text-center"><?php echo $no++ ?></td>
                        <td class="text-center"><?php echo $item->umur ?></td>
                        <td class="text-center">
                            <?php if($item->gender == 'L'):?>
                            <img src="<?php echo base_url()?>assets/frontend/images/male2.png" width="20px" alt="male" />
                            <?php else: ?>
                                <img src="<?php echo base_url()?>assets/frontend/images/female2.png" width="20px" alt="female" />
                            <?php endif ?>
                        </td>
                        <td class="text-center">
                            <?php if($item->status == 'POSITIF'): ?>
                            <label class="label label-danger">POSITIF</label>
                            <?php elseif($item->status == 'MENINGGAL'): ?>
                            <label class="label label-inverse">MENINGGAL</label>
                            <?php else: ?>
                            <label class="label label-success">SEMBUH</label>
                            <?php endif ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>