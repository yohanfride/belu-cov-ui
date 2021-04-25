<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="google-site-verification" content="fddyRKTavZo0HGhiughmRABhLVl-rwKOHkMvI6YS9Es" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="Situs Informasi dan Pemantauan COVID-19 | Kabupten Belu">
  <meta property="og:description" content="Informasi resmi mengenai COVID-19 di Kabupten Belu">
  <meta property="og:image" content="<?= base_url();?>assets-front/img/logo.png">
  <meta property="og:url" content="<?= base_url();?>">
  <meta name="twitter:card" content="summary_large_image">
  <meta property="og:site_name" content="Situs Informasi dan Pemantauan COVID-19 | Kabupten Belu">
  <meta name="twitter:image:alt" content="Situs Informasi dan Pemantauan COVID-19 | Kabupten Belu">

  <title>Situs Informasi dan Pemantauan COVID-19 | Kabupten Belu </title>
  <meta content="Monitoring Data COVID-19 Kabupaten Belu - Nusa Tenggara Timur. Update Terakhir : <?= $day; ?>,  <?= $tanggal; ?> | Pukul <?= $jam?> WIB (Data dapat berubah sewaktu-waktu)." name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url();?>assets-front/img/logo.png" rel="icon">
  <link href="<?= base_url();?>assets-front/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url();?>assets-front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url();?>assets-front/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url();?>assets-front/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url();?>assets-front/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url();?>assets-front/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url();?>assets-front/vendor/owl.carousel/assets-front/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url();?>assets-front/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url();?>assets-front/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url();?>assets-front/css/style.css" rel="stylesheet">

  <!--MAPS HU-->
  <link rel="stylesheet" href="<?= base_url();?>assets-front/vendor/leaflet/dist/leaflet.css" />
  
  <!-- Chart -->
  <!-- <link rel="stylesheet" href="<?= base_url();?>assets-front/vendor/chart/utils.css" /> -->
  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
      <div style="display: flex; flex-direction:row;" bis_skin_checked="1">
        <img src="<?= base_url();?>assets-front/img/logo.png" style="height:4rem; float:left;">
          <div id="title-teks" style="display: flex; flex-direction:column; padding-left: 10px;font-weight: bold;line-height:1em;margin-top: 5px;/*! margin-top:1rem; */" bis_skin_checked="1">
          <span style="color: #fff;">
            <span class="logo mr-auto" style="font-size: 14px">Posko Covid-19</span><br>
            <span class="logo mr-auto" style="font-weight: normal;font-size: 17.8px;">Kabupaten Belu</span>
          </span>
        </div>
      </div>
   
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Beranda</a></li>
          <li><a href="#data-pemantauan">Data Pemantauan</a></li>
          <li><a href="#peta-sebaran">Peta Sebaran</a></li>
          <li><a href="#trend-grafik">Trend Grafik</a></li>
          <li><a href="#per-kecamatan">Data Per Kecamatan</a></li>
          <li><a href="#faskes">Fasilitas Kesehatan</a></li>
          <li class="drop-down"><a data-role="disabled" style="cursor: pointer;">Publikasi</a>
            <ul>
              <li><a href="#video-pub">Video</a></li>
              <li><a href="#infografis">Infografis</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Beranda Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <?php $no=0; foreach($homeslide as $hm){ $no++; ?>
      <!-- Slide <?= $no?> -->
      <div class="carousel-item <?= ($no==1)?'active':''; ?>" >
        <div class="carousel-container" style="width:80%;margin: auto;">
          <div class="animated fadeInDown">
            <a href="<?= base_url();?>public/media/homeslide/<?= $hm->gambar; ?>" data-gall="portfolioGallery" class="venobox preview-link" title="Home Slide 1">
              <img src="<?= base_url();?>public/media/homeslide/<?= $hm->gambar; ?>" style="max-height: 500px;" class="img-fluid" alt="">
            </a>
          </div>
        </div>
      </div>
      <?php } ?>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Data Pemantauan Section ======= -->
    <section id="data-pemantauan" class="pricing">
      <div class="container">

        <div class="row">
          
          <div class="col-lg-6 col-md-6 aos-init aos-animate mb-md-2" data-aos="fade-up" data-aos-delay="200">
            <div class="box ">
              <h3 class="bg-blue-lighten-1">Kontak Erat</h3>
              <h4 class="count text-blue-lighten-1"><?= $current->kontak_erat->total; ?></h4>
              <h6 class="font-weight-light">Total Kasus</h6>
              <div class="row">
                <div class="col-lg-6 col-md-6 mt-4">
                    <h5 class="count text-blue-lighten-1"><?= $current->kontak_erat->isolasi; ?></h5>
                    <h6 class="sub-count font-weight-light">Isolasi</h6>
                </div>
                <div class="col-lg-6 col-md-6 mt-4">
                    <h5 class="count text-blue-lighten-1"><?= $current->kontak_erat->{'selesai-isolasi'}; ?></h5>
                    <h6 class="sub-count font-weight-light">Selesai Isolasi</h6>
                </div>
              </div>
              <div class="btn-wrap">
                <span  class="btn-buy"><?= $tanggal; ?></span>
              </div>
            </div>
          </div>

           <div class="col-lg-6 col-md-6 aos-init aos-animate mb-md-2" data-aos="fade-up" data-aos-delay="200">
            <div class="box ">
              <h3 class="bg-purple-darken-1">Pelaku Perjalan</h3>
              <h4 class="count text-purple-darken-1"><?= $current->pelaku_perjalanan->total; ?></h4>
              <h6 class="font-weight-light">Total Kasus</h6>
              <div class="row">
                <div class="col-lg-6 col-md-6 mt-4">
                    <h5 class="count text-purple-darken-1"><?= $current->pelaku_perjalanan->isolasi; ?></h5>
                    <h6 class="sub-count font-weight-light">Masih isolasi</h6>
                </div>
                <div class="col-lg-6 col-md-6 mt-4">
                    <h5 class="count text-purple-darken-1"><?= $current->pelaku_perjalanan->{"selesai-isolasi"}; ?></h5>
                    <h6 class="sub-count font-weight-light">Selesai Isolasi</h6>
                </div>
              </div>
              <div class="btn-wrap">
                <span  class="btn-buy"><?= $tanggal; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 aos-init aos-animate mb-md-2" data-aos="fade-up" data-aos-delay="200">
            <div class="box ">
              <h3 class="bg-yellow-darken-2">Probable</h3>
              <h4 class="count text-yellow-darken-2  "><?= $current->probable->total; ?></h4>
              <h6 class="font-weight-light">Total Kasus</h6>
              <div class="row">
                <div class="col-lg-4 col-md-6 mt-4">
                    <h5 class="count text-yellow-darken-2"><?= $current->probable->isolasi; ?></h5>
                    <h6 class="sub-count font-weight-light">Isolasi</h6>
                </div>
                <div class="col-lg-4 col-md-6 mt-4">
                    <h5 class="count text-yellow-darken-2"><?= $current->probable->{"selesai-isolasi"}; ?></h5>
                    <h6 class="sub-count font-weight-light">Selesai Isolasi</h6>
                </div>
                <div class="col-lg-4 col-md-6 mt-4">
                    <h5 class="count text-yellow-darken-2"><?= $current->probable->meninggal; ?></h5>
                    <h6 class="sub-count font-weight-light">Meninggal</h6>
                </div>
              </div>
              <div class="btn-wrap">
                <span  class="btn-buy"><?= $tanggal; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 aos-init aos-animate mb-md-2" data-aos="fade-up" data-aos-delay="200">
            <div class="box ">
              <h3 class="bg-amber-darken-2">Suspek</h3>
              <h4 class="count text-amber-darken-2"><?= $current->suspek->total; ?></h4>
              <h6 class="font-weight-light">Total Kasus</h6>
              <div class="row">
                <div class="col-lg-4 col-md-6 mt-4">
                    <h5 class="count text-amber-darken-2"><?= $current->suspek->isolasi; ?></h5>
                    <h6 class="sub-count font-weight-light">Masih isolasi</h6>
                </div>
                <div class="col-lg-4 col-md-6 mt-4">
                    <h5 class="count text-amber-darken-2"><?= $current->suspek->{"selesai-isolasi"}; ?></h5>
                    <h6 class="sub-count font-weight-light">Sembuh</h6>
                </div>
                <div class="col-lg-4 col-md-6 mt-4">
                    <h5 class="count text-amber-darken-2"><?= $current->suspek->meninggal; ?></h5>
                    <h6 class="sub-count font-weight-light">Meninggal</h6>
                </div>
              </div>
              <div class="btn-wrap">
                <span  class="btn-buy"><?= $tanggal; ?></span>
              </div>
            </div>
          </div>

         

          <div class="col-lg-12 col-md-12 aos-init aos-animate mb-md-2" data-aos="fade-up" data-aos-delay="200">
            <div class="box ">
              <h3 class="bg-red-lighten-1">Terkonfimasi Positif Covid-19</h3>
              <h4 class="count text-red-lighten-1"><?= $current->terkonfirmasi->total; ?></h4>
              <h6 class="font-weight-light">Total Positif</h6>
              <div class="row">
                <div class="col-lg-3 col-md-6 mt-4">
                    <h5 class="count text-red-lighten-1"><?= $current->terkonfirmasi->dirawat; ?></h5>
                    <h6 class="sub-count font-weight-light">Dalam Perawatan</h6>
                </div>
                <div class="col-lg-3 col-md-6 mt-4">
                    <h5 class="count text-red-lighten-1"><?= $current->terkonfirmasi->pengawasan; ?></h5>
                    <h6 class="sub-count font-weight-light">Dalam Pengawasan</h6>
                </div>
                <div class="col-lg-3 col-md-6 mt-4">
                    <h5 class="count text-red-lighten-1"><?= $current->terkonfirmasi->sembuh; ?></h5>
                    <h6 class="sub-count font-weight-light">Sembuh</h6>
                </div>
                <div class="col-lg-3 col-md-6 mt-4">
                    <h5 class="count text-red-lighten-1"><?= $current->terkonfirmasi->meninggal; ?></h5>
                    <h6 class="sub-count font-weight-light">Meninggal</h6>
                </div>
                <div class="col-lg-6 col-md-6 mt-4">
                    <h5 class="count text-red-lighten-1"><?= $current->terkonfirmasi->{"dengan-gejala"}; ?></h5>
                    <h6 class="sub-count font-weight-light">Kasus Dengan Gejala</h6>
                </div>
                <div class="col-lg-6 col-md-6 mt-4">
                    <h5 class="count text-red-lighten-1"><?= $current->terkonfirmasi->{"tanpa-gejala"}; ?></h5>
                    <h6 class="sub-count font-weight-light">Kasus Tanpa Gejala</h6>
                </div>
              </div>
              <div class="btn-wrap">
                <span  class="btn-buy"><?= $tanggal; ?></span>
              </div>
            </div>
          </div>  

          <div class="col-lg-6 col-md-6 aos-init aos-animate mb-md-2" data-aos="fade-up" data-aos-delay="200" style="display: none;" id="data-global"> 
            <div class="box ">
              <h3 class="bg-red-darken-4">Positif Covid-19 Nusa Tenggara Timur</h3>
              <h4 class="count text-light-blue-darken-4" id="jatim-positif">0</h4>
              <h6 class="font-weight-light">Total Positif</h6>
              <div class="row">
                 <div class="col-lg-4 col-md-6 mt-4">
                    <h5 class="count text-light-blue-darken-4" id="jatim-isolasi">0</h5>
                    <h6 class="sub-count font-weight-light">Masih isolasi</h6>
                </div>
                <div class="col-lg-4 col-md-6 mt-4">
                    <h5 class="count text-light-blue-darken-4" id="jatim-sembuh">0</h5>
                    <h6 class="sub-count font-weight-light">Sembuh</h6>
                </div>
                <div class="col-lg-4 col-md-6 mt-4">
                    <h5 class="count text-light-blue-darken-4" id="jatim-meninggal">0</h5>
                    <h6 class="sub-count font-weight-light">Meninggal</h6>
                </div>
              </div>
              <div class="btn-wrap">
                <span  class="btn-buy">Sumber: <a style="color: #fff"; href="https://kawalcorona.com/" target="__blank">kawalcorona.com</a></span>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 aos-init aos-animate mb-md-2" data-aos="fade-up" data-aos-delay="200" style="display: none;" id="data-jatim">
            <div class="box ">
              <h3 class="bg-red-darken-4">Positif Covid-19 Indonesia</h3>
              <h4 class="count text-red-darken-4" id="indo-positif">0</h4>
              <h6 class="font-weight-light">Total Positif</h6>
              <div class="row">
                 <div class="col-lg-4 col-md-6 mt-4">
                    <h5 class="count text-red-darken-4" id="indo-isolasi">0</h5>
                    <h6 class="sub-count font-weight-light">Masih isolasi</h6>
                </div>
                <div class="col-lg-4 col-md-6 mt-4">
                    <h5 class="count text-red-darken-4" id="indo-sembuh">0</h5>
                    <h6 class="sub-count font-weight-light">Sembuh</h6>
                </div>
                <div class="col-lg-4 col-md-6 mt-4">
                    <h5 class="count text-red-darken-4" id="indo-meninggal">0</h5>
                    <h6 class="sub-count font-weight-light">Meninggal</h6>
                </div>
              </div>
              <div class="btn-wrap">
                <span  class="btn-buy">Sumber: <a style="color: #fff" href="https://kawalcorona.com/" target="__blank">kawalcorona.com</a></span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Data Pemantauan Section -->

    <!-- ======= Peta Sebaran Section ======= -->
    <section id="peta-sebaran" class="about">
      <div class="container" data-aos="fade-up" style="max-width: 98%;">
        <div class="section-title" style="padding-bottom: 0px;">
          <h2>Peta Perserbaran Covid-19 Kabupaten Belu</h2>
        </div>
        <div class="row" bis_skin_checked="1">
          <div class="info-peta" bis_skin_checked="1">
              <span class="info-peta-zonk"></span> Tidak Ada Kasus &nbsp;&nbsp;
              <span class="info-peta-odr"></span> Ada Kasus Kontak Erat &nbsp;&nbsp;
              <span class="info-peta-odp"></span> Ada Kasus Probable &nbsp;&nbsp;
              <span class="info-peta-pdp"></span> Ada Kasus Suspek &nbsp;&nbsp;
              <span class="info-peta-pj"></span> Ada Kasus Pelaku Perjalanan &nbsp;&nbsp;
              <span class="info-peta-positif"></span> Ada Kasus Positif Covid-19
          </div>
          <div bis_skin_checked="1"></div>
        </div>

        <div class="row content">
          
          <div class="maps-box col-md-12 d-flex align-items-stretch mt-4 mt-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
            
            <div class="icon-box" id="map"></div>

          </div>
        </div>

      </div>
    </section><!-- End Peta Sebaran Section -->

    <!-- ======= Trend Grafik Section ======= -->
    <section id="trend-grafik" class="trend-graph section-bg">
      <div class="container container-fluid">
        <div class="section-title" style="padding-bottom: 0px;">
          <h2>Trend Grafik Covid-19 Kabupaten Belu</h2>
        </div>
        <div class="row">
          
          <div class="col-lg-12 col-md-12 aos-init aos-animate mb-md-2" data-aos="fade-up" data-aos-delay="200">
            <div class="box ">
              <h3 class=".bg-gray text-blue">Trend Grafik Total </h3>
              <div class="row">
                <div  id="chart-kasus" class="chart-canvas"></div >  
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 aos-init aos-animate mb-md-2" data-aos="fade-up" data-aos-delay="200">
            <div class="box ">
              <h3 class=".bg-gray text-blue-lighten-1">Trend Grafik Kontak Erat</h3>
              <div class="row">
                <div  id="chart-kasus-kontak_erat" class="chart-canvas"></div >  
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 aos-init aos-animate mb-md-2" data-aos="fade-up" data-aos-delay="200">
            <div class="box ">
              <h3 class=".bg-gray text-purple-darken-1">Trend Grafik Pelaku Perjalanan</h3>
              <div class="row">
                <div  id="chart-kasus-pelaku_perjalanan" class="chart-canvas"></div >  
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 aos-init aos-animate mb-md-2" data-aos="fade-up" data-aos-delay="200">
            <div class="box ">
              <h3 class=".bg-gray text-yellow-darken-2">Trend Grafik Probable</h3>
              <div class="row">
                <div id="chart-kasus-probable" class="chart-canvas"></div >  
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 aos-init aos-animate mb-md-2" data-aos="fade-up" data-aos-delay="200">
            <div class="box ">
              <h3 class=".bg-gray text-amber-darken-2">Trend Grafik Suspek</h3>
              <div class="row">
                <div  id="chart-kasus-suspek" class="chart-canvas"></div >  
              </div>
            </div>
          </div>

          <div class="col-lg-12 col-md-12 aos-init aos-animate mb-md-2" data-aos="fade-up" data-aos-delay="200">
            <div class="box ">
              <h3 class=".bg-gray text-red-lighten-1">Trend Grafik Terkonfimasi Positif Covid-19</h3>
              <div class="row">
                <div  id="chart-kasus-positif" class="chart-canvas"></div>  
              </div>
            </div>
          </div>

          

        </div>
      </div>
    </section><!-- End Trend Grafik Section -->
    
    <!-- ======= Per Kecamatan Section ======= -->
    <section id="per-kecamatan" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Data Per Kecamatan</h2>
          <ul class="nav nav-pills " id="pills-tab" role="tablist" style="margin:auto; width:300px;">
            <li class="nav-item">
              <a class="nav-link active" id="pills-table-tab" data-toggle="pill" href="#pills-table" role="tab" aria-controls="pills-table" aria-selected="true" style="border-radius: 50px;">Tampilan Tabel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " id="pills-graph-tab" data-toggle="pill" href="#pills-graph" role="tab" aria-controls="pills-graph" aria-selected="false" style="border-radius: 50px;">Tampilan Grafik</a>
            </li>
          </ul>
        </div>

        <div class="row">
          <div class="tab-content col-md-12" id="pills-tabContent">
              <div class="tab-pane fade  show active" id="pills-table" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                  <div class="col-md-12 d-flex align-items-stretch mt-4 mt-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon-box" style="width: 100%;">
                      <h3 class=".bg-gray text-center">Tabel Data Covid-19 Per Kecamatan</h3>
                        <table id="example" class="table table-striped" style="font-size: 14px !important; width:100%">
                          <thead>
                            <tr>
                              <th style="text-align:center">No</th>
                              <th >Kecamatan</th>
                              <th style="text-align:center">Kontak Erat</th>
                              <th style="text-align:center">Probable</th>
                              <th style="text-align:center">Suspek</th>
                              <th style="text-align:center">Pelaku Perjalanan</th>
                              <th style="text-align:center">Terkonfirmasi Positif</th>
                              <th style="text-align:center">Terkonfirmasi Dengan Gejala</th>
                              <th style="text-align:center">Terkonfirmasi Tanpa Gejala</th>
                              <th style="text-align:center">Total</th>
                            </tr>
                          </thead>
                           <tbody>
                            <?php $no=0; foreach($current->kecamatan as $kec => $kecdata ){ $no++; ?>
                            <tr>
                              <td style="text-align:center"><?= $no;?></td>
                              <td><?= $kec ?></td>
                              <td style="text-align:center"> <?= $kecdata->kontak_erat ?> </td>
                              <td style="text-align:center"> <?= $kecdata->probable ?></td>
                              <td style="text-align:center"> <?= $kecdata->suspek ?></td>
                              <td style="text-align:center"> <?= $kecdata->pelaku_perjalanan ?></td>
                              <td style="text-align:center"> <?= $kecdata->terkonfirmasi ?></td>
                              <td style="text-align:center"> <?= $kecdata->{"terkonfirmasi-dengan-gejala"} ?></td>
                              <td style="text-align:center"> <?= $kecdata->{"terkonfirmasi-tanpa-gejala"} ?></td>
                              <td style="text-align:center"> <?= $kecdata->total ?></td>
                            </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                    </div>
                  </div>  
                </div>
              </div>
              <div class="tab-pane fade" id="pills-graph" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <div class="col-md-12 d-flex align-items-stretch mt-4 mt-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon-box" style="width: 100%;">
                      <h3 class=".bg-gray text-center">Grafik Data Covid-19 Per Kecamatan</h3>
                      <div  id="barChart" class="chart-canvas"></div >
                      <!-- <canvas id="barChart"></canvas> -->
                    </div>
                  </div>  
              </div>
          </div>
        </div>
      </div>
    </section><!-- End Per Kecamatan Section -->

    <!-- =======  Fasilitas Kesehatan Section ======= -->
    <section id="faskes" class="cta">
      <div class="container">
        <div class="row" data-aos="zoom-in">
          <div class="col-md-12 text-center mb-2">
            <h3>Peta Fasilitas Kesehatan</h3>
          </div>
          <div class="col-md-12 row content">
            <div class="maps-box col-md-12 d-flex align-items-stretch mt-4 mt-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
              <div class="icon-box" id="map-faskes"></div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Fasilitas Kesehatan Section -->

    <!-- ======= Video Pub Section ======= -->
    <section id="video-pub" class="services">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-title">
          <h2>Video Publikasi</h2>
        </div>
        <div class="row">
          <?php $no=0; foreach($video as $vd){ $no++; ?>
          <div class="col-lg-4 col-md-6 col-sm-12 mt-2 aos-init aos-animate" style="margin: auto;">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="<?= $vd->link;?>" allowfullscreen></iframe>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section><!-- End Video Pub Section -->
   
    <!-- ======= Infografis Section ======= -->
    <section id="infografis" class="portfoio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Infografis</h2>
        </div>
        <!-- Layout 1 -->
        <div class="row portfolio-container">
          <?php foreach($infografis as $inf){ 
            if($inf->layout == '1'){
          ?>
          <div class="col-lg-12 col-md-12 portfolio-item">
            <a href="<?= base_url();?>public/media/infografis/<?= $inf->gambar; ?>" data-gall="portfolioGallery" class="venobox preview-link" title="Infografis">
              <img src="<?= base_url();?>public/media/infografis/<?= $inf->gambar; ?>" class="img-fluid" alt="">
            </a>
          </div>
          <?php } } ?>
        </div>

        <!-- Layout 2 -->
        <div class="row portfolio-container">
          <?php foreach($infografis as $inf){ 
            if($inf->layout == '2'){
          ?>
          <div class="col-lg-6 col-md-6 portfolio-item">
            <a href="<?= base_url();?>public/media/infografis/<?= $inf->gambar; ?>" data-gall="portfolioGallery" class="venobox preview-link" title="App 1">
              <img src="<?= base_url();?>public/media/infografis/<?= $inf->gambar; ?>" class="img-fluid" alt="">
            </a>
          </div>
          <?php } } ?>
        </div>

        <!-- Layout 3 -->
        <div class="row portfolio-container">
          <?php foreach($infografis as $inf){ 
            if($inf->layout == '3'){
          ?>
          <div class="col-lg-4 col-md-6 portfolio-item">
            <a href="<?= base_url();?>public/media/infografis/<?= $inf->gambar; ?>" data-gall="portfolioGallery" class="venobox preview-link" title="App 1">
              <img src="<?= base_url();?>public/media/infografis/<?= $inf->gambar; ?>" class="img-fluid" alt="">
            </a>
          </div>
          <?php } } ?>

        </div>

      </div>
    </section><!-- End Infografis Section -->

  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Pemerintah Kabupaten Belu</h4>
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <p>  Jl. El Tari No.1, Umanen, Atambua Bar., Kabupaten Belu -  Nusa Tenggara Tim.</p>
              </div>
              <div class="email">
                <i class="icofont-envelope"></i>
                <p>info@Belukab.go.id</p>
              </div>
              <div class="phone">
                <i class="icofont-phone"></i>
                <p>Telpon/Fax: (0323) 325987 / 321550</p>
              </div>
              <div class="phone">
                <i class="icofont-web"></i>
                <p><a href="https://belukab.go.id/" target="__blank" style="color:#fff;">https://belukab.go.id/</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Posko Covid-19</span></strong> - Pemerintah Kabupaten Belu
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?= base_url();?>assets-front/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url();?>assets-front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url();?>assets-front/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url();?>assets-front/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url();?>assets-front/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url();?>assets-front/vendor/venobox/venobox.min.js"></script>
  <script src="<?= base_url();?>assets-front/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url();?>assets-front/vendor/aos/aos.js"></script>

  <!-- Maps -->
  <script type="text/javascript" src="<?= base_url();?>assets-front/vendor/leaflet/dist/leaflet-src.js"></script>
  <script src='<?= base_url();?>assets-front/js/Leaflet.GoogleMutant.js'></script>

  <script src='<?= base_url();?>assets-front/js/sampang-maps.js'></script>

  <!-- Chart -->
  <script type="text/javascript" src="<?= base_url();?>assets-front/vendor/chart/chart.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <!-- Template Main JS File -->
  <script src="<?= base_url();?>assets-front/js/main.js"></script>


  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>


  <script type="text/javascript">
    jQuery(function($){
      ///Global Data////
      var getNational=$.getJSON("<?= base_url()?>home/getNasional", function (data) {
        if(data){
          $("#indo-positif").html(data.positif);
          $("#indo-sembuh").html(data.sembuh);
          $("#indo-meninggal").html(data.meninggal);  
          $("#indo-isolasi").html(data.isolasi);  
          $("#data-global").attr("style", "");
        }
      });
      var getJatim=$.getJSON("<?= base_url()?>home/getJatim", function (data) {
        if(data){
          $("#jatim-positif").html(data.Kasus_Posi);
          $("#jatim-sembuh").html(data.Kasus_Semb);
          $("#jatim-meninggal").html(data.Kasus_Meni);  
          $("#jatim-isolasi").html(data.Kasus_Posi - data.Kasus_Semb - data.Kasus_Meni);  
          $("#data-jatim").attr("style", "");
        }
      });

      //var maps = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', { 
      // Maps ///
      var maps = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { 
            //attribution: 'Data © <a href="http://Belukab.go.id">SIM PUPR Kabupaten Belu</a>',
            maxZoom: 18,
            minZoom: 10,
            id: 'mapbox.streets',
            accessToken: 'pk.eyJ1IjoiYWRlc3VsYWltYW4iLCJhIjoiY2prcWFqcW85MW00YzNsbW54ZThscmpvdSJ9.ai7YM6Pj5ayquazYjHnOCA'
          }),
        satelit = L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/satellite-v9/tiles/256/{z}/{x}/{y}?access_token={accessToken}', { 
            //attribution: 'Data © <a href="http://Belukab.go.id">SIM PUPR Kabupaten Belu</a>',
            maxZoom: 18,
            minZoom: 10,
            accessToken: 'pk.eyJ1IjoiYWRlc3VsYWltYW4iLCJhIjoiY2prcWFqcW85MW00YzNsbW54ZThscmpvdSJ9.ai7YM6Pj5ayquazYjHnOCA'
          });
      var bounds_group = new L.featureGroup([]);

      var map = L.map('map',  {
        editable: true,
        center: [-9.107193,124.8882573],
        zoom: 12,
        //scrollWheelZoom: false,
        zoomControl: true,
        layers: [maps, bounds_group]
      });

      <?php
      $js_array = json_encode($current->kecamatan);
      echo "var dataKecamatan = ". $js_array . ";\n";
      ?>

      function pop_kecamatan(feature, layer) {
        var fitur = dataKecamatan[feature.properties['kecamatan']];

        var nama = feature.properties['kecamatan'];
        var jumlah_kontak_erat = fitur['kontak_erat'];
        var kontak_erat_pantau = fitur['kontak_erat-dipantau'];
        var kontak_erat_selesai = fitur['kontak_erat-selesai-dipantau'];

        var jumlah_probable = fitur['probable'];
        var probable_pantau = fitur['probable-isolasi'];
        var probable_selesai = fitur['probable-selesai-isolasi'];
        var probable_meninggal = fitur['probable-meninggal'];

        var jumlah_suspek = fitur['suspek'];
        var jumlah_suspek_rawat = fitur['suspek-isolasi'];
        var jumlah_suspek_sembuh = fitur['suspek-selesai-isolasi'];
        var suspek_meninggal = fitur['suspek-meninggal'];

        var covid_sembuh = fitur['konfirmasi-sembuh'];
        var jumlah_covid = fitur['konfirmasi'];
        var covid_meninggal = fitur['konfirmasi-meninggal'];
        var covid_awas = fitur['konfirmasi-pengawasan'];
        var covid_perawatan = fitur['konfirmasi-isolasi'];

        var contentPopup =
            "<h5 style='margin-bottom:5px;'>Kecamatan <b>" + nama + "</b></h5>" +
            "<br><strong>Jumlah Kontak Erat :</strong> " + jumlah_kontak_erat + " Kasus" +
            "<br><strong>Jumlah Kontak Erat Isolasi :</strong> " + kontak_erat_pantau + " Kasus" +
            "<br><strong>Jumlah Kontak Erat Selesai Isolasi :</strong> " + kontak_erat_selesai + " Kasus" +
            "<br><strong>Jumlah Probable :</strong> " + jumlah_probable + " Kasus" +
            "<br><strong>Jumlah Probable Isolasi :</strong> " + probable_pantau + " Kasus" +
            "<br><strong>Jumlah Probable Selesai Isolasi :</strong> " + probable_selesai + " Kasus" +
            "<br><strong>Jumlah Probable Meninggal :</strong> " + probable_meninggal + " Kasus" +
            "<br><strong>Jumlah Suspek :</strong> " + jumlah_suspek + " Kasus" +
            "<br><strong>Jumlah Suspek Isolasi:</strong> " + jumlah_suspek_rawat + " Kasus" +
            "<br><strong>Jumlah Suspek Selesai Isolasi :</strong> " + jumlah_suspek_sembuh + " Kasus" +
            "<br><strong>Jumlah Suspek Meninggal :</strong> " + suspek_meninggal + " Kasus" +
            "<br><strong>Terkonfirmasi Covid-19 :</strong> " + jumlah_covid + " Kasus" +
            "<br><strong>Dalam Perawatan Covid-19 :</strong> " + covid_perawatan + " Kasus" +
            "<br><strong>Dalam Pengawasan Covid-19 :</strong> " + covid_awas + " Kasus" +
            "<br><strong>Sembuh Covid-19 :</strong> " + covid_sembuh + " Kasus" +
            "<br><strong>Meninggal Covid-19 :</strong> " + covid_meninggal + " Kasus";

        layer.bindPopup(contentPopup, { className : 'popup'});  //maxHeight: '400', maxWidth: '700',
        layer.bindTooltip(feature.properties['kecamatan'], {permanent: true, direction:"center", className: 'kecText'});
      }

      // var layer_kecamatan = new L.geoJson(kecamatan, {
      //   onEachFeature: pop_kecamatan,
      //   style: function(feature) {
      //     var color;
      //     var fitur = dataKecamatan[feature.properties['kecamatan']];
          
      //     if( fitur.konfirmasi > 0){
      //       color = '#ef5350';
      //     } else if( fitur.suspek > 0){
      //       color = '#ff8f00';
      //     } else if( fitur.probable > 0){
      //       color = '#ffeb3b';
      //     } else if( fitur.kontak_erat > 0){
      //       color = '#42a5f5';
      //     } else {
      //       color = '#4caf50';
      //     }
      //     return {fillOpacity: 0.5,color: "black", fillColor: color, weight:0.5};
      //   }
      // });

      // bounds_group.addLayer(layer_kecamatan);
      // map.addLayer(layer_kecamatan);
      // End Maps ///

      var chartColors ={
        orange:"#42a5f5",
        blue:"#fdd835",
        purple:"#ffa000",
        red:"#ef5350",
      }
      <?php  
        $hari = array(); 
        $summary_kontak_erat = array(); $summary_probable = array(); $summary_suspek = array(); $summary_konfirmasi = array();
        $kontak_erat_dipantau = array(); $kontak_erat_selesai_dipantau = array();
        $probable_dipantau = array(); $probable_selesai_dipantau = array(); $probable_meninggal = array();
        $suspek_isolasi = array(); $suspek_sembuh = array(); $suspek_meninggal = array();
        $konfirmasi_isolasi = array(); $konfirmasi_sembuh = array(); $konfirmasi_pengawasan = array();  $konfirmasi_meninggal = array();
        foreach($dailes as $dl){
          $hari[] = $dl->date_only;
          $summary_kontak_erat[] = $dl->kontak_erat->total;
          $summary_probable[] = $dl->probable->total;
          $summary_suspek[] = $dl->suspek->total;
          $summary_pelaku_perjalanan[] = $dl->pelaku_perjalanan->total;
          $summary_konfirmasi[] = $dl->terkonfirmasi->total;
          $kontak_erat_dipantau[] = $dl->kontak_erat->isolasi;
          $kontak_erat_selesai_dipantau[] = $dl->kontak_erat->{"selesai-isolasi"};
          $probable_dipantau[] = $dl->probable->isolasi;
          $probable_selesai_dipantau[] = $dl->probable->{"selesai-isolasi"};
          $probable_meninggal[] = $dl->probable->meninggal;
          $suspek_isolasi[] = $dl->suspek->isolasi;
          $suspek_selesai_isolasi[] = $dl->suspek->{"selesai-isolasi"};
          $suspek_meninggal[] = $dl->suspek->meninggal;
          $konfirmasi_isolasi[] = $dl->terkonfirmasi->dirawat;
          $konfirmasi_sembuh[] = $dl->terkonfirmasi->sembuh;
          $konfirmasi_meninggal[] = $dl->terkonfirmasi->meninggal;
          $konfirmasi_pengawasan[] = $dl->terkonfirmasi->pengawasan;
          $pelaku_perjalanan_isolasi[] = $dl->pelaku_perjalanan->isolasi;
          $pelaku_perjalanan_selesai_isolasi[] = $dl->pelaku_perjalanan->{"selesai-isolasi"};
        }
      ?>       
      var kasustotal = {
          series: [{
                  name: 'kontak_erat',
                  type: 'line',
                  data: [<?= implode(',', $summary_kontak_erat); ?>]
              },{
                  name: 'pelaku_perjalanan',
                  type: 'line',
                  data: [<?= implode(',', $summary_pelaku_perjalanan); ?>]
              }, {
                  name: 'probable',
                  type: 'line',
                  data: [<?= implode(',', $summary_probable); ?>]
              }, {
                  name: 'suspek',
                  type: 'line',
                  data: [<?= implode(',', $summary_suspek); ?>]
              },
              {
                  name: 'Postif',
                  type: 'line',
                  data: [<?= implode(',', $summary_konfirmasi); ?> ]
              }
          ],
          chart: {
              height: 350,
              type: 'line',
              stacked: false,
          },
          colors: [chartColors.orange, chartColors.blue, chartColors.purple, chartColors.red],
          // stroke: {
          //     width: [0, 5, 5, 5],
          //     colors: [chartColors.orange, chartColors.blue, chartColors.purple, chartColors.red],
          //     curve: 'smooth',
          //     // colors:['']
          // },
          plotOptions: {
              bar: {
                  columnWidth: '50%'
              }
          },

          fill: {
              colors: [chartColors.orange, chartColors.blue, chartColors.purple, chartColors.red],
              opacity: [0.85, 0.25, 1],
              gradient: {
                  inverseColors: false,
                  // shade: 'light',
                  type: "vertical",
                  // opacityFrom: 0.85,
                  // opacityTo: 0.55,
                  stops: [0, 100, 100, 100]
              }
          },
          labels: ['<?= implode("','", $hari); ?>'],
          legend: {
              show: true,
              showForSingleSeries: false,
              showForNullSeries: true,
              showForZeroSeries: true,
              position: 'bottom',
              horizontalAlign: 'center',
              floating: false,
              fontSize: '14px',
              fontFamily: 'Helvetica, Arial',
              fontWeight: 400,
              formatter: undefined,
              inverseOrder: false,
              width: undefined,
              height: undefined,
              tooltipHoverFormatter: undefined,
              offsetX: 0,
              offsetY: 0,
              labels: {
                  colors: ['#000000'],
                  useSeriesColors: false
              },
              markers: {
                  width: 12,
                  height: 12,
                  strokeWidth: 0,
                  //strokeColor: '#fff',
                  fillColors: [chartColors.orange, chartColors.blue, chartColors.purple, chartColors.red],
                  radius: 12,
                  customHTML: undefined,
                  onClick: undefined,
                  offsetX: 0,
                  offsetY: 0
              },
              itemMargin: {
                  horizontal: 5,
                  vertical: 0
              },
              onItemClick: {
                  toggleDataSeries: true
              },
              onItemHover: {
                  highlightDataSeries: true
              },
          },
          markers: {

              size: 5,
              hover: {
                  size: 9
              }
          },
          xaxis: {
              // type: 'datetime'
          },
          yaxis: {
              title: {
                  text: 'Orang',
              },
              labels: {
                  formatter: function(val) {
                      return val.toFixed(0)
                  }
              },
              min: 0
          },
          tooltip: {
              shared: true,
              intersect: false,
              y: {
                  formatter: function(y) {
                      if (typeof y !== "undefined") {
                          return y.toFixed(0) + " Orang";
                      }
                      return y;

                  }
              }
          }
      };

      var kasus_kontak_erat = {
          series: [{
                  name: 'Kasus kontak_erat',
                  type: 'column',
                  data: [<?= implode(',', $summary_kontak_erat); ?>]
              }, {
                  name: 'Selesai Isolasi',
                  type: 'line',
                  data: [<?= implode(',', $kontak_erat_selesai_dipantau); ?>]
              }, {
                  name: 'Isolasi',
                  type: 'line',
                  data: [<?= implode(',', $kontak_erat_dipantau); ?>]
              }
          ],
          chart: {
              height: 350,
              type: 'line',
              stacked: false,
          },
          colors: [chartColors.orange, '#35FD0B', '#f2f700'],
          stroke: {
              width: [0, 5, 5, 5],
              colors: ['#000000', '#2Cff00', '#04A7FF'],
              curve: 'smooth',
              // colors:['']
          },
          plotOptions: {
              bar: {
                  columnWidth: '50%'
              }
          },

          fill: {
              colors: [chartColors.orange, '#35FD0B', '#2303c2'],
              opacity: [0.85, 0.25, 1],
              gradient: {
                  inverseColors: false,
                  // shade: 'light',
                  type: "vertical",
                  // opacityFrom: 0.85,
                  // opacityTo: 0.55,
                  stops: [0, 100, 100, 100]
              }
          },
          labels: ['<?= implode("','", $hari); ?>'],
          legend: {
              show: true,
              showForSingleSeries: false,
              showForNullSeries: true,
              showForZeroSeries: true,
              position: 'bottom',
              horizontalAlign: 'center',
              floating: false,
              fontSize: '14px',
              fontFamily: 'Helvetica, Arial',
              fontWeight: 400,
              formatter: undefined,
              inverseOrder: false,
              width: undefined,
              height: undefined,
              tooltipHoverFormatter: undefined,
              offsetX: 0,
              offsetY: 0,
              labels: {
                  colors: ['#000000'],
                  useSeriesColors: false
              },
              markers: {
                  width: 12,
                  height: 12,
                  strokeWidth: 0,
                  strokeColor: '#fff',
                  fillColors: [chartColors.orange, '#35FD0B', '#2303c2'],
                  radius: 12,
                  customHTML: undefined,
                  onClick: undefined,
                  offsetX: 0,
                  offsetY: 0
              },
              itemMargin: {
                  horizontal: 5,
                  vertical: 0
              },
              onItemClick: {
                  toggleDataSeries: true
              },
              onItemHover: {
                  highlightDataSeries: true
              },
          },
          markers: {

              size: 5,
              hover: {
                  size: 9
              }
          },
          xaxis: {
              // type: 'datetime'
          },
          yaxis: {
              title: {
                  text: 'Orang',
              },
              labels: {
                  formatter: function(val) {
                      return val.toFixed(0)
                  }
              },
              min: 0
          },
          tooltip: {
              shared: true,
              intersect: false,
              y: {
                  formatter: function(y) {
                      if (typeof y !== "undefined") {
                          return y.toFixed(0) + " Orang";
                      }
                      return y;

                  }
              }
          }
      };

      var kasus_probable = {
          series: [{
                  name: 'Kasus probable',
                  type: 'column',
                  data: [<?= implode(',', $summary_probable); ?>]
              }, {
                  name: 'Selesai Dipantau',
                  type: 'line',
                  data: [<?= implode(',', $probable_selesai_dipantau); ?>]
              }, {
                  name: 'Dipantau',
                  type: 'line',
                  data: [<?= implode(',', $probable_dipantau); ?>]
              }, {
                  name: 'Meninggal',
                  type: 'line',
                  data: [<?= implode(',', $probable_meninggal); ?>]
              }
          ],
          chart: {
              height: 350,
              type: 'line',
              stacked: false,
          },
          colors: [chartColors.blue, '#35FD0B', '#2303c2', '#000000'],
          stroke: {
              width: [0, 5, 5, 5],
              colors: ['#000000', '#2303c2', '#04A7FF'],
              curve: 'smooth',
              // colors:['']
          },
          plotOptions: {
              bar: {
                  columnWidth: '50%'
              }
          },

          fill: {
              colors: [chartColors.blue, '#35FD0B', '#2303c2', '#000000'],
              opacity: [0.85, 0.25, 1],
              gradient: {
                  inverseColors: false,
                  // shade: 'light',
                  type: "vertical",
                  // opacityFrom: 0.85,
                  // opacityTo: 0.55,
                  stops: [0, 100, 100, 100]
              }
          },
          labels: ['<?= implode("','", $hari); ?>'],
          legend: {
              show: true,
              showForSingleSeries: false,
              showForNullSeries: true,
              showForZeroSeries: true,
              position: 'bottom',
              horizontalAlign: 'center',
              floating: false,
              fontSize: '14px',
              fontFamily: 'Helvetica, Arial',
              fontWeight: 400,
              formatter: undefined,
              inverseOrder: false,
              width: undefined,
              height: undefined,
              tooltipHoverFormatter: undefined,
              offsetX: 0,
              offsetY: 0,
              labels: {
                  colors: ['#000000'],
                  useSeriesColors: false
              },
              markers: {
                  width: 12,
                  height: 12,
                  strokeWidth: 0,
                  strokeColor: '#fff',
                  fillColors: [chartColors.blue, '#35FD0B', '#2303c2', '#000000'],
                  radius: 12,
                  customHTML: undefined,
                  onClick: undefined,
                  offsetX: 0,
                  offsetY: 0
              },
              itemMargin: {
                  horizontal: 5,
                  vertical: 0
              },
              onItemClick: {
                  toggleDataSeries: true
              },
              onItemHover: {
                  highlightDataSeries: true
              },
          },
          markers: {

              size: 5,
              hover: {
                  size: 9
              }
          },
          xaxis: {
              // type: 'datetime'
          },
          yaxis: {
              title: {
                  text: 'Orang',
              },
              labels: {
                  formatter: function(val) {
                      return val.toFixed(0)
                  }
              },
              min: 0
          },
          tooltip: {
              shared: true,
              intersect: false,
              y: {
                  formatter: function(y) {
                      if (typeof y !== "undefined") {
                          return y.toFixed(0) + " Orang";
                      }
                      return y;

                  }
              }
          }
      };

      var kasus_suspek = {
          series: [{
                  name: 'Kasus suspek',
                  type: 'column',
                  data: [<?= implode(',', $summary_suspek); ?>]
              }, {
                  name: 'Selesai Isolasi',
                  type: 'line',
                  data: [<?= implode(',', $suspek_selesai_isolasi); ?>]
              }, {
                  name: 'Isolasi',
                  type: 'line',
                  data: [<?= implode(',', $suspek_isolasi); ?>]
              }, {
                  name: 'Meninggal',
                  type: 'line',
                  data: [<?= implode(',', $suspek_meninggal); ?>]
              }
          ],
          chart: {
              height: 350,
              type: 'line',
              stacked: false,
          },
          colors: [chartColors.purple, '#35FD0B', '#2303c2', '#000000'],
          stroke: {
              width: [0, 5, 5, 5],
              colors: ['#000000', '#2Cff00', '#04A7FF'],
              curve: 'smooth',
              // colors:['']
          },
          plotOptions: {
              bar: {
                  columnWidth: '50%'
              }
          },

          fill: {
              colors: [chartColors.purple, '#35FD0B', '#2303c2', '#000000'],
              opacity: [0.85, 0.25, 1],
              gradient: {
                  inverseColors: false,
                  // shade: 'light',
                  type: "vertical",
                  // opacityFrom: 0.85,
                  // opacityTo: 0.55,
                  stops: [0, 100, 100, 100]
              }
          },
          labels: ['<?= implode("','", $hari); ?>'],
          legend: {
              show: true,
              showForSingleSeries: false,
              showForNullSeries: true,
              showForZeroSeries: true,
              position: 'bottom',
              horizontalAlign: 'center',
              floating: false,
              fontSize: '14px',
              fontFamily: 'Helvetica, Arial',
              fontWeight: 400,
              formatter: undefined,
              inverseOrder: false,
              width: undefined,
              height: undefined,
              tooltipHoverFormatter: undefined,
              offsetX: 0,
              offsetY: 0,
              labels: {
                  colors: ['#000000'],
                  useSeriesColors: false
              },
              markers: {
                  width: 12,
                  height: 12,
                  strokeWidth: 0,
                  strokeColor: '#fff',
                  fillColors: [chartColors.purple, '#35FD0B', '#2303c2', '#000000'],
                  radius: 12,
                  customHTML: undefined,
                  onClick: undefined,
                  offsetX: 0,
                  offsetY: 0
              },
              itemMargin: {
                  horizontal: 5,
                  vertical: 0
              },
              onItemClick: {
                  toggleDataSeries: true
              },
              onItemHover: {
                  highlightDataSeries: true
              },
          },
          markers: {

              size: 5,
              hover: {
                  size: 9
              }
          },
          xaxis: {
              // type: 'datetime'
          },
          yaxis: {
              title: {
                  text: 'Orang',
              },
              labels: {
                  formatter: function(val) {
                      return val.toFixed(0)
                  }
              },
              min: 0
          },
          tooltip: {
              shared: true,
              intersect: false,
              y: {
                  formatter: function(y) {
                      if (typeof y !== "undefined") {
                          return y.toFixed(0) + " Orang";
                      }
                      return y;

                  }
              }
          }
      };

      var kasus_konfirmasi = {
          series: [{
                  name: 'Positif COVID-19',
                  type: 'column',
                  data: [<?= implode(',', $summary_konfirmasi); ?>]
              }, {
                  name: 'Sembuh',
                  type: 'line',
                  data: [<?= implode(',', $konfirmasi_sembuh); ?>]
              }, {
                  name: 'Pengawasan',
                  type: 'line',
                  data: [<?= implode(',', $konfirmasi_pengawasan); ?>]
              }, {
                  name: 'Meninggal',
                  type: 'line',
                  data: [<?= implode(',', $probable_meninggal); ?>]
              }, {
                  name: 'Dalam Perawatan',
                  type: 'line',
                  data: [<?= implode(',', $konfirmasi_isolasi); ?>]
              }
          ],
          chart: {
              height: 350,
              type: 'line',
              stacked: false,
          },
          colors: [chartColors.red, '#35FD0B', '#2303c2', '#000000', '#f2f700'],
          stroke: {
              width: [0, 5, 5, 5],
              colors: ['#000000', '#2Cff00', '#04A7FF'],
              curve: 'smooth',
              // colors:['']
          },
          plotOptions: {
              bar: {
                  columnWidth: '50%'
              }
          },

          fill: {
              colors: [chartColors.red, '#35FD0B', '#2303c2', '#000000', '#f2f700'],
              opacity: [0.85, 0.25, 1],
              gradient: {
                  inverseColors: false,
                  // shade: 'light',
                  type: "vertical",
                  // opacityFrom: 0.85,
                  // opacityTo: 0.55,
                  stops: [0, 100, 100, 100]
              }
          },
          labels: ['<?= implode("','", $hari); ?>'],
          legend: {
              show: true,
              showForSingleSeries: false,
              showForNullSeries: true,
              showForZeroSeries: true,
              position: 'bottom',
              horizontalAlign: 'center',
              floating: false,
              fontSize: '14px',
              fontFamily: 'Helvetica, Arial',
              fontWeight: 400,
              formatter: undefined,
              inverseOrder: false,
              width: undefined,
              height: undefined,
              tooltipHoverFormatter: undefined,
              offsetX: 0,
              offsetY: 0,
              labels: {
                  colors: ['#000000'],
                  useSeriesColors: false
              },
              markers: {
                  width: 12,
                  height: 12,
                  strokeWidth: 0,
                  strokeColor: '#fff',
                  fillColors: [chartColors.red, '#35FD0B', '#2303c2', '#000000', '#f2f700'],
                  radius: 12,
                  customHTML: undefined,
                  onClick: undefined,
                  offsetX: 0,
                  offsetY: 0
              },
              itemMargin: {
                  horizontal: 5,
                  vertical: 0
              },
              onItemClick: {
                  toggleDataSeries: true
              },
              onItemHover: {
                  highlightDataSeries: true
              },
          },
          markers: {

              size: 5,
              hover: {
                  size: 9
              }
          },
          xaxis: {
              // type: 'datetime'
          },
          yaxis: {
              title: {
                  text: 'Orang',
              },
              labels: {
                  formatter: function(val) {
                      return val.toFixed(0)
                  }
              },
              min: 0
          },
          tooltip: {
              shared: true,
              intersect: false,
              y: {
                  formatter: function(y) {
                      if (typeof y !== "undefined") {
                          return y.toFixed(0) + " Orang";
                      }
                      return y;

                  }
              }
          }
      };


      var kasus_pelaku_perjalanan = {
          series: [{
                  name: 'Kasus Pelaku Perjalanan',
                  type: 'column',
                  data: [<?= implode(',', $summary_pelaku_perjalanan); ?>]
              }, {
                  name: 'Selesai Isolasi',
                  type: 'line',
                  data: [<?= implode(',', $pelaku_perjalanan_selesai_isolasi); ?>]
              }, {
                  name: 'Isolasi',
                  type: 'line',
                  data: [<?= implode(',', $pelaku_perjalanan_isolasi); ?>]
              }
          ],
          chart: {
              height: 350,
              type: 'line',
              stacked: false,
          },
          colors: ['#ab47bc', '#35FD0B', '#2303c2', '#000000'],
          stroke: {
              width: [0, 5, 5, 5],
              colors: ['#000000', '#2Cff00', '#04A7FF'],
              curve: 'smooth',
              // colors:['']
          },
          plotOptions: {
              bar: {
                  columnWidth: '50%'
              }
          },

          fill: {
              colors: ['#ab47bc', '#35FD0B', '#2303c2', '#000000'],
              opacity: [0.85, 0.25, 1],
              gradient: {
                  inverseColors: false,
                  // shade: 'light',
                  type: "vertical",
                  // opacityFrom: 0.85,
                  // opacityTo: 0.55,
                  stops: [0, 100, 100, 100]
              }
          },
          labels: ['<?= implode("','", $hari); ?>'],
          legend: {
              show: true,
              showForSingleSeries: false,
              showForNullSeries: true,
              showForZeroSeries: true,
              position: 'bottom',
              horizontalAlign: 'center',
              floating: false,
              fontSize: '14px',
              fontFamily: 'Helvetica, Arial',
              fontWeight: 400,
              formatter: undefined,
              inverseOrder: false,
              width: undefined,
              height: undefined,
              tooltipHoverFormatter: undefined,
              offsetX: 0,
              offsetY: 0,
              labels: {
                  colors: ['#000000'],
                  useSeriesColors: false
              },
              markers: {
                  width: 12,
                  height: 12,
                  strokeWidth: 0,
                  strokeColor: '#fff',
                  fillColors: ['#ab47bc', '#35FD0B', '#2303c2', '#000000'],
                  radius: 12,
                  customHTML: undefined,
                  onClick: undefined,
                  offsetX: 0,
                  offsetY: 0
              },
              itemMargin: {
                  horizontal: 5,
                  vertical: 0
              },
              onItemClick: {
                  toggleDataSeries: true
              },
              onItemHover: {
                  highlightDataSeries: true
              },
          },
          markers: {

              size: 5,
              hover: {
                  size: 9
              }
          },
          xaxis: {
              // type: 'datetime'
          },
          yaxis: {
              title: {
                  text: 'Orang',
              },
              labels: {
                  formatter: function(val) {
                      return val.toFixed(0)
                  }
              },
              min: 0
          },
          tooltip: {
              shared: true,
              intersect: false,
              y: {
                  formatter: function(y) {
                      if (typeof y !== "undefined") {
                          return y.toFixed(0) + " Orang";
                      }
                      return y;

                  }
              }
          }
      };

      var chart = new ApexCharts(document.querySelector("#chart-kasus"), kasustotal);
      chart.render();

      var chart2 = new ApexCharts(document.querySelector("#chart-kasus-kontak_erat"), kasus_kontak_erat);
      chart2.render();

      var chart = new ApexCharts(document.querySelector("#chart-kasus-probable"), kasus_probable);
      chart.render();

      var chart2 = new ApexCharts(document.querySelector("#chart-kasus-suspek"), kasus_suspek);
      chart2.render();

      var chart2 = new ApexCharts(document.querySelector("#chart-kasus-positif"), kasus_konfirmasi);
      chart2.render();

      var chart2 = new ApexCharts(document.querySelector("#chart-kasus-pelaku_perjalanan"), kasus_pelaku_perjalanan);
      chart2.render();


      <?php  
        $kecamatan = array(); 
        $kec_kontak_erat = array(); $kec_probable = array(); $kec_suspek = array(); $kec_konfirmasi = array();
        foreach($current->kecamatan as $kec_key => $kec_value){
          $kecamatan[] = $kec_key;
          $kec_kontak_erat[] = $kec_value->kontak_erat;
          $kec_probable[] = $kec_value->probable;
          $kec_suspek[] = $kec_value->suspek;
          $kec_konfirmasi[] = $kec_value->terkonfirmasi;
          $kec_pelaku_perjalanan[] = $kec_value->pelaku_perjalanan;
        }
      ?> 
      
      var options = {
        series: [
          { name: 'Kasus kontak erat',data: [<?= implode(',', $kec_kontak_erat); ?>]}, 
          { name: 'Kasus pelaku perjalanan',data: [<?= implode(',', $kec_pelaku_perjalanan); ?>]}, 
          { name: 'Kasus probable',data: [<?= implode(',', $kec_probable); ?>]},
          { name: 'Kasus suspek',data: [<?= implode(',', $kec_suspek); ?>]}, 
          { name: 'Kasus Positif',data: [<?= implode(',', $kec_konfirmasi); ?>]}
        ],
        colors:[chartColors.orange,chartColors.blue,chartColors.purple,chartColors.red],
        chart: {
          type: 'bar',
          height: 430
        },
        plotOptions: {
          bar: {
            vertical: true,
            dataLabels: {
              position: 'top',
            },
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          show: true,
          width: 1,
          colors: ['#fff']
        },
        xaxis: {
          categories: ["<?= implode('","', $kecamatan); ?>"],
        },
        tooltip: {
              shared: true,
              intersect: false,
              x: {
                  formatter: function(x) {
                      if (typeof x !== "undefined") {
                          return "Kecamatan <b>" + x+"</b>";
                      }
                      return x;
                  }
              },
              y: {
                  formatter: function(y) {
                      if (typeof y !== "undefined") {
                          return y.toFixed(0) + " Orang";
                      }
                      return y;
                  }
              }
          }
      };
      var chart3 = new ApexCharts(document.querySelector("#barChart"), options);
      chart3.render();

      // End Chart ///
      $('#example').DataTable({
        "scrollY":"400px",
        "scrollCollapse":true,
        "paging":false,
        "searching": false,
        "lengthChange": false
      }).columns.adjust();

      /// Faskes Maps///
      var url_jsaon='<?= base_url()?>home/faskes/';

      var map_faskes = L.map('map-faskes',{
        center: [-7.07336, 113.2487],
        zoom:1,
        scrollWheelZoom: false,
        zoomControl: true
      }).setView([-7.07336, 113.2487], 11);

      new L.tileLayer('https://{s}.tile.osm.org/{z}/{x}/{y}.png').addTo(map_faskes);
          
      var hasilpasien=$.getJSON(url_jsaon, function (data) {
        //var blueIcon = L.icon({ iconUrl: 'public/blue.png', iconSize:[20, 20],});
        for (var i = 0; i < data.length; i++) {
          var lat =data[i].latitude;
          var lng =data[i].longitude;
          var namarumahsakit=data[i].nama;
          var no_tel=data[i].phone;
          var alamat=data[i].alamat;
          var greenIcon = L.icon({ iconUrl: '<?= base_url(); ?>assets-front/img/hospital.png', iconSize:[30, 30],});
          var customPopup =
              "<h5 style='margin-bottom:5px;'>Faskes : "+ namarumahsakit + "</h5>"
              +"Alamat : "+alamat+"<br>"
              +"Telepon : <a href='tel:"+no_tel+"'>"+no_tel +"</a><br>"
          ;
          L.marker([lat, lng],{icon:greenIcon}).addTo(map_faskes).bindPopup(customPopup);
        }
      });
      ///End Faskes Maps


    });
  </script>

</body>
</html>