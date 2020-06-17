<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="google-site-verification" content="fddyRKTavZo0HGhiughmRABhLVl-rwKOHkMvI6YS9Es" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="Situs Informasi dan Pemantauan COVID-19 | Kabupten Sampang">
  <meta property="og:description" content="Informasi resmi mengenai COVID-19 di Kabupten Sampang">
  <meta property="og:image" content="<?= base_url();?>assets-front/img/logo.png">
  <meta property="og:url" content="<?= base_url();?>">
  <meta name="twitter:card" content="summary_large_image">
  <meta property="og:site_name" content="Situs Informasi dan Pemantauan COVID-19 | Kabupten Sampang">
  <meta name="twitter:image:alt" content="Situs Informasi dan Pemantauan COVID-19 | Kabupten Sampang">

  <title>Situs Informasi dan Pemantauan COVID-19 | Kabupten Sampang </title>
  <meta content="Monitoring Data COVID-19 Kabupaten Sampang - Jawa Timur. Update Terakhir : <?= $day; ?>,  <?= $tanggal; ?> | Pukul <?= $jam?> WIB (Data dapat berubah sewaktu-waktu)." name="descriptison">
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
            <span class="logo mr-auto" style="font-weight: normal;font-size: 17.8px;">Kabupaten Sampang</span>
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
              <h3 class="bg-blue-lighten-1">Orang Dalam Resiko (ODR)</h3>
              <h4 class="count text-blue-lighten-1"><?= $current->odr->total; ?></h4>
              <h6 class="font-weight-light">Total ODR</h6>
              <div class="row">
                <div class="col-lg-6 col-md-6 mt-4">
                    <h5 class="count text-blue-lighten-1"><?= $current->odr->dipantau; ?></h5>
                    <h6 class="sub-count font-weight-light">Proses Pemantauan</h6>
                </div>
                <div class="col-lg-6 col-md-6 mt-4">
                    <h5 class="count text-blue-lighten-1"><?= $current->odr->{'selesai-dipantau'}; ?></h5>
                    <h6 class="sub-count font-weight-light">Selesai Pemantauan</h6>
                </div>
              </div>
              <div class="btn-wrap">
                <span  class="btn-buy"><?= $tanggal; ?></span>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 aos-init aos-animate mb-md-2" data-aos="fade-up" data-aos-delay="200">
            <div class="box ">
              <h3 class="bg-yellow-darken-2">Orang Dalam Pemantauan (ODP)</h3>
              <h4 class="count text-yellow-darken-2  "><?= $current->odp->total; ?></h4>
              <h6 class="font-weight-light">Total ODP</h6>
              <div class="row">
                <div class="col-lg-4 col-md-6 mt-4">
                    <h5 class="count text-yellow-darken-2"><?= $current->odp->dipantau; ?></h5>
                    <h6 class="sub-count font-weight-light">Proses Pemantauan</h6>
                </div>
                <div class="col-lg-4 col-md-6 mt-4">
                    <h5 class="count text-yellow-darken-2"><?= $current->odp->{'selesai-dipantau'}; ?></h5>
                    <h6 class="sub-count font-weight-light">Selesai Pemantauan</h6>
                </div>
                <div class="col-lg-4 col-md-6 mt-4">
                    <h5 class="count text-yellow-darken-2"><?= $current->odp->meninggal; ?></h5>
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
              <h3 class="bg-amber-darken-2">Pasien Dalam Pengawasan (PDP)</h3>
              <h4 class="count text-amber-darken-2"><?= $current->pdp->total; ?></h4>
              <h6 class="font-weight-light">Total PDP</h6>
              <div class="row">
                <div class="col-lg-4 col-md-6 mt-4">
                    <h5 class="count text-amber-darken-2"><?= $current->pdp->dirawat; ?></h5>
                    <h6 class="sub-count font-weight-light">Masih Dirawat</h6>
                </div>
                <div class="col-lg-4 col-md-6 mt-4">
                    <h5 class="count text-amber-darken-2"><?= $current->pdp->sembuh; ?></h5>
                    <h6 class="sub-count font-weight-light">Sembuh</h6>
                </div>
                <div class="col-lg-4 col-md-6 mt-4">
                    <h5 class="count text-amber-darken-2"><?= $current->pdp->meninggal; ?></h5>
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
              <h3 class="bg-red-lighten-1">Terkonfimasi Positif Covid-19</h3>
              <h4 class="count text-red-lighten-1"><?= $current->confirm->total; ?></h4>
              <h6 class="font-weight-light">Total Positif</h6>
              <div class="row">
                 <div class="col-lg-3 col-md-6 mt-4">
                    <h5 class="count text-red-lighten-1"><?= $current->confirm->dirawat; ?></h5>
                    <h6 class="sub-count font-weight-light">Masih Dirawat</h6>
                </div>
                <div class="col-lg-3 col-md-6 mt-4">
                    <h5 class="count text-red-lighten-1"><?= $current->confirm->pengawasan; ?></h5>
                    <h6 class="sub-count font-weight-light">Pengawasan</h6>
                </div>
                <div class="col-lg-3 col-md-6 mt-4">
                    <h5 class="count text-red-lighten-1"><?= $current->confirm->sembuh; ?></h5>
                    <h6 class="sub-count font-weight-light">Sembuh</h6>
                </div>
                <div class="col-lg-3 col-md-6 mt-4">
                    <h5 class="count text-red-lighten-1"><?= $current->confirm->meninggal; ?></h5>
                    <h6 class="sub-count font-weight-light">Meninggal</h6>
                </div>
              </div>
              <div class="btn-wrap">
                <span  class="btn-buy"><?= $tanggal; ?></span>
              </div>
            </div>
          </div>  

          <div class="col-lg-6 col-md-6 aos-init aos-animate mb-md-2" data-aos="fade-up" data-aos-delay="200" style="display: none;" id="data-global"> 
            <div class="box ">
              <h3 class="bg-red-darken-4">Positif Covid-19 Jawa Timur</h3>
              <h4 class="count text-light-blue-darken-4" id="jatim-positif">0</h4>
              <h6 class="font-weight-light">Total Positif</h6>
              <div class="row">
                 <div class="col-lg-4 col-md-6 mt-4">
                    <h5 class="count text-light-blue-darken-4" id="jatim-dirawat">0</h5>
                    <h6 class="sub-count font-weight-light">Masih Dirawat</h6>
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
                    <h5 class="count text-red-darken-4" id="indo-dirawat">0</h5>
                    <h6 class="sub-count font-weight-light">Masih Dirawat</h6>
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
          <h2>Peta Perserbaran Covid-19 Kabupaten Sampang</h2>
        </div>
        <div class="row" bis_skin_checked="1">
          <div class="info-peta" bis_skin_checked="1">
              <span class="info-peta-zonk"></span> Tidak Ada Kasus &nbsp;&nbsp;
              <span class="info-peta-odr"></span> Ada ODR &nbsp;&nbsp;
              <span class="info-peta-odp"></span> Ada ODP &nbsp;&nbsp;
              <span class="info-peta-pdp"></span> Ada PDP &nbsp;&nbsp;
              <span class="info-peta-positif"></span> Ada Positif Covid-19
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
          <h2>Trend Grafik Covid-19 Kabupaten Sampang</h2>
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
              <h3 class=".bg-gray text-blue-lighten-1">Trend Grafik Orang Dalam Resiko (ODR)</h3>
              <div class="row">
                <div  id="chart-kasus-odr" class="chart-canvas"></div >  
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 aos-init aos-animate mb-md-2" data-aos="fade-up" data-aos-delay="200">
            <div class="box ">
              <h3 class=".bg-gray text-yellow-darken-2">Trend Grafik Orang Dalam Pemantauan (ODP)</h3>
              <div class="row">
                <div id="chart-kasus-odp" class="chart-canvas"></div >  
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 aos-init aos-animate mb-md-2" data-aos="fade-up" data-aos-delay="200">
            <div class="box ">
              <h3 class=".bg-gray text-amber-darken-2">Trend Grafik Pasien Dalam Pengawasan (PDP)</h3>
              <div class="row">
                <div  id="chart-kasus-pdp" class="chart-canvas"></div >  
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 aos-init aos-animate mb-md-2" data-aos="fade-up" data-aos-delay="200">
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
                              <th style="text-align:center">ODR</th>
                              <th style="text-align:center">ODP</th>
                              <th style="text-align:center">PDP</th>
                              <th style="text-align:center">Positif</th>
                              <th style="text-align:center">Total</th>
                            </tr>
                          </thead>
                           <tbody>
                            <?php $no=0; foreach($current->kecamatan as $kec => $kecdata ){ $no++; ?>
                            <tr>
                              <td style="text-align:center"><?= $no;?></td>
                              <td><?= $kec ?></td>
                              <td style="text-align:center"> <?= $kecdata->odr ?> </td>
                              <td style="text-align:center"> <?= $kecdata->odp ?></td>
                              <td style="text-align:center"> <?= $kecdata->pdp ?></td>
                              <td style="text-align:center"> <?= $kecdata->confirm ?></td>
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
            <h4>Pemerintah Kabupaten Sampang</h4>
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <p> Jl. Jamaluddin No. 1A, Sampang – Jawa Timur</p>
              </div>
              <div class="email">
                <i class="icofont-envelope"></i>
                <p>info@sampangkab.go.id</p>
              </div>
              <div class="phone">
                <i class="icofont-phone"></i>
                <p>Telpon/Fax: (0323) 325987 / 321550</p>
              </div>
              <div class="phone">
                <i class="icofont-web"></i>
                <p><a href="https://sampangkab.go.id" target="__blank" style="color:#fff;">https://sampangkab.go.id</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Posko Covid-19</span></strong> - Pemerintah Kabupaten Sampang
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
          $("#indo-dirawat").html(data.dirawat);  
          $("#data-global").attr("style", "");
        }
      });
      var getJatim=$.getJSON("<?= base_url()?>home/getJatim", function (data) {
        if(data){
          $("#jatim-positif").html(data.Kasus_Posi);
          $("#jatim-sembuh").html(data.Kasus_Semb);
          $("#jatim-meninggal").html(data.Kasus_Meni);  
          $("#jatim-dirawat").html(data.Kasus_Posi - data.Kasus_Semb - data.Kasus_Meni);  
          $("#data-jatim").attr("style", "");
        }
      });

      //var maps = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', { 
      // Maps ///
      var maps = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', { 
            attribution: 'Data © <a href="http://sampangkab.go.id">SIM PUPR Kabupaten sampang</a>',
            maxZoom: 18,
            minZoom: 10,
            id: 'mapbox.streets',
            accessToken: 'pk.eyJ1IjoiYWRlc3VsYWltYW4iLCJhIjoiY2prcWFqcW85MW00YzNsbW54ZThscmpvdSJ9.ai7YM6Pj5ayquazYjHnOCA'
          }),
        satelit = L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/satellite-v9/tiles/256/{z}/{x}/{y}?access_token={accessToken}', { 
            attribution: 'Data © <a href="http://sampangkab.go.id">SIM PUPR Kabupaten sampang</a>',
            maxZoom: 18,
            minZoom: 10,
            accessToken: 'pk.eyJ1IjoiYWRlc3VsYWltYW4iLCJhIjoiY2prcWFqcW85MW00YzNsbW54ZThscmpvdSJ9.ai7YM6Pj5ayquazYjHnOCA'
          });
      var bounds_group = new L.featureGroup([]);

      var map = L.map('map',  {
        editable: true,
        center: [-7.07336, 113.2487],
        zoom: 11,
        scrollWheelZoom: false,
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
        var jumlah_odp = fitur['odp'];
        var odp_pantau = fitur['odp-dipantau'];
        var odp_selesai = fitur['odp-selesai-dipantau'];
        var odp_meninggal = fitur['odp-meninggal'];

        var jumlah_pdp = fitur['pdp'];
        var jumlah_pdp_rawat = fitur['pdp-dirawat'];
        var jumlah_pdp_sembuh = fitur['pdp-sembuh'];
        var pdp_meninggal = fitur['pdp-meninggal'];

        var covid_sembuh = fitur['confirm-sembuh'];
        var jumlah_covid = fitur['confirm'];
        var covid_meninggal = fitur['confirm-meninggal'];
        var covid_awas = fitur['confirm-pengawasan'];
        var covid_perawatan = fitur['confirm-dirawat'];

        var contentPopup =
            "<h5 style='margin-bottom:5px;'>Kecamatan <b>" + nama + "</b></h5>" +
            "<br><strong>Jumlah ODP :</strong> " + jumlah_odp + " Kasus" +
            "<br><strong>Jumlah ODP Masa Pantau :</strong> " + odp_pantau + " Kasus" +
            "<br><strong>Jumlah ODP Selesai Masa Pantau :</strong> " + odp_selesai + " Kasus" +
            "<br><strong>Jumlah ODP Meninggal :</strong> " + odp_meninggal + " Kasus" +
            "<br><strong>Jumlah PDP :</strong> " + jumlah_pdp + " Kasus" +
            "<br><strong>Jumlah PDP Dirawat:</strong> " + jumlah_pdp_rawat + " Kasus" +
            "<br><strong>Jumlah PDP Sembuh :</strong> " + jumlah_pdp_sembuh + " Kasus" +
            "<br><strong>Jumlah PDP Meninggal :</strong> " + pdp_meninggal + " Kasus" +
            "<br><strong>Terkonfirmasi Covid-19 :</strong> " + jumlah_covid + " Kasus" +
            "<br><strong>Dalam Perawatan Covid-19 :</strong> " + covid_perawatan + " Kasus" +
            "<br><strong>Dalam Pengawasan Covid-19 :</strong> " + covid_awas + " Kasus" +
            "<br><strong>Sembuh Covid-19 :</strong> " + covid_sembuh + " Kasus" +
            "<br><strong>Meninggal Covid-19 :</strong> " + covid_meninggal + " Kasus";

        layer.bindPopup(contentPopup, { className : 'popup'});  //maxHeight: '400', maxWidth: '700',
        layer.bindTooltip(feature.properties['kecamatan'], {permanent: true, direction:"center", className: 'kecText'});
      }

      var layer_kecamatan = new L.geoJson(kecamatan, {
        onEachFeature: pop_kecamatan,
        style: function(feature) {
          var color;
          var fitur = dataKecamatan[feature.properties['kecamatan']];
          
          if( fitur.confirm > 0){
            color = '#ef5350';
          } else if( fitur.pdp > 0){
            color = '#ff8f00';
          } else if( fitur.odp > 0){
            color = '#ffeb3b';
          } else if( fitur.odr > 0){
            color = '#42a5f5';
          } else {
            color = '#4caf50';
          }
          return {fillOpacity: 0.5,color: "black", fillColor: color, weight:0.5};
        }
      });

      bounds_group.addLayer(layer_kecamatan);
      map.addLayer(layer_kecamatan);
      // End Maps ///

      var chartColors ={
        orange:"#42a5f5",
        blue:"#fdd835",
        purple:"#ffa000",
        red:"#ef5350",
      }
      <?php  
        $hari = array(); 
        $summary_odr = array(); $summary_odp = array(); $summary_pdp = array(); $summary_confirm = array();
        $odr_dipantau = array(); $odr_selesai_dipantau = array();
        $odp_dipantau = array(); $odp_selesai_dipantau = array(); $odp_meninggal = array();
        $pdp_dirawat = array(); $pdp_sembuh = array(); $pdp_meninggal = array();
        $confirm_dirawat = array(); $confirm_sembuh = array(); $confirm_pengawasan = array();  $confirm_meninggal = array();
        foreach($dailes as $dl){
          $hari[] = $dl->date_only;
          $summary_odr[] = $dl->odr->total;
          $summary_odp[] = $dl->odp->total;
          $summary_pdp[] = $dl->pdp->total;
          $summary_confirm[] = $dl->confirm->total;
          $odr_dipantau[] = $dl->odr->dipantau;
          $odr_selesai_dipantau[] = $dl->odr->{"selesai-dipantau"};
          $odp_dipantau[] = $dl->odp->dipantau;
          $odp_selesai_dipantau[] = $dl->odp->{"selesai-dipantau"};
          $odp_meninggal[] = $dl->odp->meninggal;
          $pdp_dirawat[] = $dl->pdp->dirawat;
          $pdp_sembuh[] = $dl->pdp->sembuh;
          $pdp_meninggal[] = $dl->pdp->meninggal;
          $confirm_dirawat[] = $dl->confirm->dirawat;
          $confirm_sembuh[] = $dl->confirm->sembuh;
          $confirm_meninggal[] = $dl->confirm->meninggal;
          $confirm_pengawasan[] = $dl->confirm->pengawasan;
        }
      ?>       
      var kasustotal = {
          series: [{
                  name: 'ODR',
                  type: 'line',
                  data: [<?= implode(',', $summary_odr); ?>]
              }, {
                  name: 'ODP',
                  type: 'line',
                  data: [<?= implode(',', $summary_odp); ?>]
              }, {
                  name: 'PDP',
                  type: 'line',
                  data: [<?= implode(',', $summary_pdp); ?>]
              },
              {
                  name: 'Postif',
                  type: 'line',
                  data: [<?= implode(',', $summary_confirm); ?> ]
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

      var kasus_odr = {
          series: [{
                  name: 'Kasus ODR',
                  type: 'column',
                  data: [<?= implode(',', $summary_odr); ?>]
              }, {
                  name: 'Selesai Dipantau',
                  type: 'line',
                  data: [<?= implode(',', $odr_selesai_dipantau); ?>]
              }, {
                  name: 'Dipantau',
                  type: 'line',
                  data: [<?= implode(',', $odr_dipantau); ?>]
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

      var kasus_odp = {
          series: [{
                  name: 'Kasus ODP',
                  type: 'column',
                  data: [<?= implode(',', $summary_odp); ?>]
              }, {
                  name: 'Selesai Dipantau',
                  type: 'line',
                  data: [<?= implode(',', $odp_selesai_dipantau); ?>]
              }, {
                  name: 'Dipantau',
                  type: 'line',
                  data: [<?= implode(',', $odp_dipantau); ?>]
              }, {
                  name: 'Meninggal',
                  type: 'line',
                  data: [<?= implode(',', $odp_meninggal); ?>]
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

      var kasus_pdp = {
          series: [{
                  name: 'Kasus PDP',
                  type: 'column',
                  data: [<?= implode(',', $summary_odp); ?>]
              }, {
                  name: 'Selesai Dipantau',
                  type: 'line',
                  data: [<?= implode(',', $odp_selesai_dipantau); ?>]
              }, {
                  name: 'Dipantau',
                  type: 'line',
                  data: [<?= implode(',', $odp_dipantau); ?>]
              }, {
                  name: 'Meninggal',
                  type: 'line',
                  data: [<?= implode(',', $odp_meninggal); ?>]
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

      var kasus_confirm = {
          series: [{
                  name: 'Positif COVID-19',
                  type: 'column',
                  data: [<?= implode(',', $summary_confirm); ?>]
              }, {
                  name: 'Sembuh',
                  type: 'line',
                  data: [<?= implode(',', $confirm_sembuh); ?>]
              }, {
                  name: 'Pengawasan',
                  type: 'line',
                  data: [<?= implode(',', $confirm_pengawasan); ?>]
              }, {
                  name: 'Meninggal',
                  type: 'line',
                  data: [<?= implode(',', $odp_meninggal); ?>]
              }, {
                  name: 'Dalam Perawatan',
                  type: 'line',
                  data: [<?= implode(',', $confirm_dirawat); ?>]
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


      var chart = new ApexCharts(document.querySelector("#chart-kasus"), kasustotal);
      chart.render();

      var chart2 = new ApexCharts(document.querySelector("#chart-kasus-odr"), kasus_odr);
      chart2.render();

      var chart = new ApexCharts(document.querySelector("#chart-kasus-odp"), kasus_odp);
      chart.render();

      var chart2 = new ApexCharts(document.querySelector("#chart-kasus-pdp"), kasus_pdp);
      chart2.render();

      var chart2 = new ApexCharts(document.querySelector("#chart-kasus-positif"), kasus_confirm);
      chart2.render();

      <?php  
        $kecamatan = array(); 
        $kec_odr = array(); $kec_odp = array(); $kec_pdp = array(); $kec_confirm = array();
        foreach($current->kecamatan as $kec_key => $kec_value){
          $kecamatan[] = $kec_key;
          $kec_odr[] = $kec_value->odr;
          $kec_odp[] = $kec_value->odp;
          $kec_pdp[] = $kec_value->pdp;
          $kec_confirm[] = $kec_value->confirm;
        }
      ?> 
      
      var options = {
        series: [
          { name: 'Kasus ODR',data: [<?= implode(',', $kec_odr); ?>]}, 
          { name: 'Kasus ODP',data: [<?= implode(',', $kec_odp); ?>]},
          { name: 'Kasus PDP',data: [<?= implode(',', $kec_pdp); ?>]}, 
          { name: 'Kasus Positif',data: [<?= implode(',', $kec_confirm); ?>]}
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