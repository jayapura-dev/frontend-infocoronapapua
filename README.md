<p align="center"><img src="https://live.staticflickr.com/65535/49846512092_cd3986a7f6_b.jpg" width="600px"></p>

<p align="center">
  <a href="https://travis-ci.com/Ekhel/backend-kawal-corona-papua"><img src="https://travis-ci.com/Ekhel/backend-kawal-corona-papua.svg?branch=master" alt="Build Status" target="_blank"></a>
  <a href="https://gitter.im/jayapura_django/community?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge"><img src="https://badges.gitter.im/jayapura_django/community.svg" alt="Gitter" target="_blank"></a>
  <a href="https://github.com/Ekhel/frontend-kawal-corona-papua/blob/master/LICENSE"><img src="https://img.shields.io/badge/License-MIT-green.svg" alt="License: MIT" target="_blank"></a>
</p>

## Tentang Info Corona Papua :
  - Info Corona Papua adalah Web Applikasi sekaligus dapat Menjadi Portal Informasi Live Data Kasus Covid 19 di Papua, Sedikit Sumbangsih dari Kami untuk Papua, Project ini Open Source, Siapa Saja Boleh untuk Berkontribusi.

<p align="center"><img src="https://github.com/Ekhel/KawalCoronaPapua/blob/master/assets/backend/images/repo%20mockup%20dashboard.jpg" width="800px"></p>
------------------------------------------------------------------------------------------------------------------------

## System Requirements :
* Bahasa Utama :
  - PHP

* Framework :
  - CodeIgniter 3.1

* DBMS :
  - MySql
  - Postgre

* Library :
  - Indo Tanggal
  - REST_Controllers

* Backend :
  - [Kawal Corona Papua](https://github.com/Ekhel/frontend-kawal-corona-papua)

------------------------------------------------------------------------------

## API Services  :

* API Services Live Data Indonesia & Provinsi :
  - [Data Indonesia : https://api.kawalcorona.com/indonesia](https://api.kawalcorona.com/indonesia)

  - [Data Provinsi : https://api.kawalcorona.com/indonesia/provinsi](https://api.kawalcorona.com/indonesia/provinsi)

  - [Data Global Per Negara : https://api.kawalcorona.com/](https://api.kawalcorona.com/) 

  - [Data Global Positif : https://api.kawalcorona.com/positif/](https://api.kawalcorona.com/positif)

  - [Data Global Meninggal : https://api.kawalcorona.com/meningggal/](https://api.kawalcorona.com/meniggal)
  
  - [Data Global Sembuh : https://api.kawalcorona.com/sembuh/](https://api.kawalcorona.com/sembuh)

* API Services Kusus Data Papua :
  - [Data Papua : http://localhost/api](http://localhost/KawalCoronaPapua/api/)
    * Sample Response :

      ```javascripts
      {
        "status": true,
        "result": [
          {
            "name": "papua",
            "confirm": "240",
            "perawatan": "174",
            "sembuh": "59",
            "meninggal": "7"
          }
        ]
      }
      ```

  - [Data Kabupaten : http://localhost/api/kabupaten](http://localhost/KawalCoronaPapua/api/kabupaten)
  - [Data Kabupaten (Params) : http://localhost/api/kabupaten?id_kabupaten=1](http://localhost/KawalCoronaPapua/api/kabupaten?id_kabupaten=1)
    * Sample Response :
    * Dengan Parameter id_kabupaten

      ```javascripts
      {
        "status": true,
        "id_kabupaten": "1",
        "result": [
          {
            "id_kabupaten": "1",
            "kabupaten": "Jayapura",
            "confirm": "36",
            "perawatan": "25",
            "meninggal": "1",
            "sembuh": "10",
            "logo_thumb": "http://localhost/KawalCoronaPapua/assets/backend/images/kabkota/Jayapura.png"
          }
        ]
      }
      ```


----------------------------------------------------------------------------------------------------------

## Halaman Yang Tersedia :
  - [x] Dashboard
  - [x] Hotline
  - [x] API For developers

--------------------------------------------------------------------------------------------------------------


## Kontribusi Data & Project :
  - Saya Belum Memiliki Sumber Data yang benar" valid.
  - Sebagian Data Kasus di Provinsi Papua yang ada pada database backend diambil dari 60% Hasil Tracking Media.
  - Jika teman" ingin Berkontribusi terkait data dengan sangat senang hati saya akan menerima.
  - email saya terkait Data : **michaekarafir@gmail.com**
  - Atau bisa chat pada gitter klik pada badge gitter diatas, **chat on gitter**
  - Project ini Open Source siapa saja boleh untuk Berkontribusi Termasuk Data dan Repository.
  - Saran dan Masukan Sangat Saya butuhkan.

  Salam Sehat
  Michael.
    
