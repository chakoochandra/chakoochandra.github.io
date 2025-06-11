<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Waroengkoe</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/glow.css" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid  position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <h1 class="sitename">Waroengkoe</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html" class="active">Beranda</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <?php
          $apps = [
            'etamu' => [
              'title' => 'e-Tamu (Dengan notifikasi whatsapp)',
              'screenshot' => [
                'etamu_form.png' => 'Form isian tamu',
                'etamu_riwayat_tamu.png' => 'Daftar tamu yang pernah berkunjung',
                'etamu_daftar_notifikasi.png' => 'Daftar notifikasi terkirim',
                'etamu_daftar_pejabat.png' => 'Menu pejabat yang dapat ditemui',
              ],
            ],
            'sipp_query' => [
              'title' => 'Query SIPP',
              'screenshot' => [
                'sipp_query.png' => 'Daftar query data SIPP, feel free to use',
              ],
            ],
            'noisy' => [
              'title' => 'Sistem Notifikasi Whatsapp',
              'screenshot' => [
                'noisy_dashboard.png' => 'Dashboard statistik perkara',
                'noisy_daftar_aplikasi.png' => 'Daftar aplikasi/inovasi satker',
                'noisy_riwayat.png' => 'Riwayat pengirimnan notifikasi Whatsapp',
                'noisy_ac.png' => 'Menu kirim notifikasi Akta Cerai',
                'noisy_court_calendar.png' => 'Menu kirim notifikasi Court Calendar',
                'noisy_psp.png' => 'Menu kirim notifikasi Pengembalian Sisa Panjar',
                'noisy_sidang.png' => 'Menu kirim notifikasi jadwal sidang',
                'noisy_sidang_h_1.png' => 'Menu kirim notifikasi jadwal sidang H-1',
              ],
            ],
            'tte_helper' => [
              'title' => 'e-Court TTE Helper',
              'paid' => true,
              'screenshot' => [
                'tte_helper.png' => 'Script untuk membantu proses penandatanganan TTE pada aplikasi e-Court',
              ],
            ],
            'perkara_dashboard' => [
              'title' => 'Dashboard',
              'paid' => true,
              'screenshot' => [
                'perkara_dashboard.png' => 'Tampilan dashboard statistik perkara'
              ],
            ],
            'perkara_kecamatan' => [
              'title' => 'Perkara Kecamatan',
              'paid' => true,
              'screenshot' => [
                'perkara_kecamatan_1.png' => 'Rekapitulasi bulanan perkara kecamatan',
                'perkara_kecamatan_2.png' => 'Daftar perkara bulanan per-kecamatan',
                'perkara_kecamatan_3.png' => 'Grafik perkara kecamatan bulan Januari',
                'perkara_kecamatan_4.png' => 'Grafik total perkara kecamatan',
                'perkara_kecamatan_5.png' => 'Grafik total perkara kecamatan (Grafik horizontal)',
                'perkara_kecamatan_6.png' => 'Grafik total perkara kecamatan (Grafik pie)',
                'perkara_kecamatan_7.png' => 'Grafik total perkara kecamatan (Grafik dougnut)',
              ],
            ],
            'perkara_bas' => [
              'title' => 'Monitoring BAS',
              'paid' => true,
              'screenshot' => [
                'perkara_bas_1.png' => 'Monitoring kinerja BAS tiap PP',
                'perkara_bas_2.png' => 'Daftar sidang per-PP',
                'perkara_bas_3.png' => 'Grafik kinerja BAS bulan kemarin',
                'perkara_bas_4.png' => 'Grafik kinerja BAS semua',
                'perkara_bas_5.png' => 'Grafik kinerja BAS (Grafik horizontal)',
              ],
            ],
            'perkara_ecourt' => [
              'title' => 'Rekapitulasi e-Court',
              'paid' => true,
              'screenshot' => [
                'perkara_ecourt_1.png' => 'Rekapitulasi bulanan perkara e-Court',
                'perkara_ecourt_2.png' => 'Daftar perkara e-Court perbulan',
                'perkara_ecourt_3.png' => 'Grafik perkara e-Court',
                'perkara_ecourt_4.png' => 'Grafik perkara e-Court (Grafik horizontal)',
                'perkara_ecourt_5.png' => 'Grafik perkara e-Court (Grafik doughnut)',
                'perkara_ecourt_6.png' => 'Grafik perkara e-Court (Grafik garis)',
                'perkara_ecourt_7.png' => 'Grafik perkara e-Court Putus',
                'perkara_ecourt_8.png' => 'Grafik perkara e-Court Putus (Grafik horizontal)',
                'perkara_ecourt_9.png' => 'Grafik perkara e-Court Putus (Grafik doughnut)',
              ],
            ],
          ];
          ?>

          <div class="row align-items-center">
            <div class="col portfolio-info">
              <h3>Halo, saya Chandra</h3>
              <p>Selamat datang di Waroengkoe, lapak aplikasi, modul, script, query dan lain-lain. Ada yang free, ada juga yang berbayar. Hitung-hitung beliin kopi ygy. Tapi bikin sendiri itu lebih menantang (kalau kamu suka tantangan dan PUNYA WAKTU, huehehehehe), butuh diskusi untuk bikin-bikin sendiri? Feel free to reach out to me :) </p>
            </div>
          </div>

          <div class="row align-items-center mt-4">
            <div class="col text-center text-lg-end">
              <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">Semua</li>

                <?php foreach ($apps as $key => $app) : ?>
                  <li data-filter=".filter-<?php echo $key ?>"><?php echo $app['title'] ?></li>
                <?php endforeach ?>
              </ul>
            </div>
          </div>

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200" style="position: relative; height: 1344px;">

            <?php foreach ($apps as $key => $app) : ?>
              <?php if (isset($app['screenshot']) && count($app['screenshot']) > 0): ?>
                <?php foreach ($app['screenshot'] as $filename => $caption) : ?>

                  <?php
                  $badgeText = isset($app['paid']) && $app['paid'] === true ? '' : 'Free';
                  $badgeClass = isset($app['paid']) && $app['paid'] === true ? 'bg-danger' : 'bg-success btn-glowing';
                  ?>

                  <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-<?php echo $key ?>" style="position: absolute; left: 0px; top: 0px;">
                    <div class="portfolio-content h-100">
                      <div class="position-relative">
                        <?php if ($badgeText): ?>
                          <span class="badge badge-overlay <?php echo $badgeClass; ?>"><?php echo $badgeText; ?></span>
                        <?php endif ?>
                        <img src="assets/img/portofolio/<?php echo ("$filename"); ?>" class="img-fluid" alt="<?php echo $app['title']; ?>">
                      </div>
                      <div class="portfolio-info">
                        <?php if ($badgeText): ?>
                          <span class="badge <?php echo $badgeClass; ?>"><?php echo $badgeText; ?></span>
                        <?php endif ?>
                        <h4><?php echo $app['title']; ?></h4>
                        <p><?php echo $caption ?: 'Waroengkoe'; ?></p>
                        <div>
                          <a href="assets/img/portofolio/<?php echo ("$filename"); ?>" title="<?php echo $caption; ?>" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                          <a href="https://wa.me/6287778299688?text=<?php echo urlencode('Halo, saya tertarik dengan aplikasi/modul ' . $app['title']) ?>" title="Pesan" class="details-link" target="_blank"><i class="bi bi-whatsapp"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

                <?php endforeach; ?>
              <?php endif; ?>
            <?php endforeach; ?>

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Waroengkoe</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>