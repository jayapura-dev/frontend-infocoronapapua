<link href="<?php echo base_url()?>assets\frontend\css\higligts.css" rel="stylesheet" type="text/css">

<div class="hero-section app-hero">
    <div class="container">
        <div class="hero-content app-hero-content text-center">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <h1 class="wow fadeInUp" data-wow-delay="0s">INFO CORONA PAPUA</h1>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        API FOR DEVELOPERS
                    </p>
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
                        <h3>API DATA PAPUA ( GET )</h3>
                    </div>
                    <div class="card-block">
                        <h1>END POINT : <text class="label badge-info">https://api.infocoronapapua.com</text></h1>
                        <br/>
                        <br/>
                        <p>SAMPLE RESPONSE :</p>
                        <div class="card-counter" style="height:220px; background-color: #F8F8FF;">
                        
                            <pre class="language-json"><code class="language-json">
                                {
                                    "status": true,
                                    "result": [
                                        {
                                            "name": "papua",
                                            "confirm": "240",
                                            "positif": "174",
                                            "sembuh": "59",
                                            "meninggal": "7"
                                        }
                                    ]
                                }
                            </code></pre>
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
            <div class="col-sm-12 col-md-12 col-lg-12 mt-12">
                <div class="card">
                    <div class="card-header">
                        <h3>API DATA KABUPATEN ( GET )</h3>
                    </div>
                    <div class="card-block">
                        <h1>END POINT : <text class="label badge-info">https://api.infocoronapapua.com/kabupaten</text></h1>
                        <br/>
                        <br/>
                        <p>SAMPLE RESPONSE :</p>
                        <div class="card-counter" style="height:370px; background-color: #F8F8FF;">
                            <pre class="language-json"><code class="language-json">
                                {
                                    "status": true,
                                    "result": [
                                        {
                                            "id_kabupaten": "1",
                                            "kabkota": "Jayapura",
                                            "confirm": "36",
                                            "positif": "25",
                                            "meninggal": "1",
                                            "sembuh": "10",
                                            "logo_thumb": "http://localhost/KawalCoronaPapua/assets/backend/images/kabkota/Jayapura.png"
                                        },
                                        {
                                            "id_kabupaten": "2",
                                            "kabkota": "Kota Jayapura",
                                            "confirm": "54",
                                            "perawatan": "29",
                                            "meninggal": "3",
                                            "sembuh": "22",
                                            "logo_thumb": "http://localhost/KawalCoronaPapua/assets/backend/images/kabkota/KotaJayapura.png"
                                        }
                                    ]
                                }
                            </code></pre>
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
            <div class="col-sm-12 col-md-12 col-lg-12 mt-12">
                <div class="card">
                    <div class="card-header">
                        <h3>API DATA KABUPATEN Parameter ID Kabupaten ( GET )</h3>
                    </div>
                    <div class="card-block">
                        <h1>END POINT : <text class="label badge-info">https://api.infocoronapapua.com/kabupaten?id_kabupaten=2</text></h1>
                        <br/>
                        <br/>
                        <p>SAMPLE RESPONSE :</p>
                        <div class="card-counter" style="height:250px; background-color: #F8F8FF;">
                            <pre class="language-json"><code class="language-json">
                                {
                                    "status": true,
                                    "id_kabupaten": "2"
                                    "result": [
                                        {
                                            "id_kabupaten": "2",
                                            "kabkota": "Kota Jayapura",
                                            "confirm": "54",
                                            "perawatan": "29",
                                            "meninggal": "3",
                                            "sembuh": "22",
                                            "logo_thumb": "http://localhost/KawalCoronaPapua/assets/backend/images/kabkota/KotaJayapura.png"
                                        }
                                    ]
                                }
                            </code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

