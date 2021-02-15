<?php
  include "function.php";

  $kota = ["assets/img/logo/jakarta.png"=>"Jakarta","assets/img/logo/surabaya.png"=>"Surabaya","assets/img/logo/bandung.jpg"=>"Bandung","assets/img/logo/yogyakarta.png"=>"Yogyakarta"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Informasi Cuaca | Rizki Wahfiudin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/favicon.jpg" rel="icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="index.html">Info Cuaca</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="https://rizkiwahfiudin.my.id">Home</a></li>
          <li><a href="provinsi.php">Daftar Provinsi</a></li>
          <li><a href="https://rizkiwahfiudin.my.id/blog">Blog</a></li>
          <li><a href="https://rizkiwahfiudin.my.id/covid19">Info Covid-19</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main id="main">

    <section>
      <div class="row mt-4">
          <?php foreach ($kota as $key=>$val): ?>
          <div class="col-sm-3">
            <div class="card mb-3" style="max-width: 500px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src=<?= $key; ?> width="100px" class="mt-4 img-thumbnail rounded mx-auto d-block">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?= $val; ?></h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content</p>
                  <p class="card-text"><small class="text-muted">Last updated <?= tanggal(); ?></small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach ?>
      </div>
    </section>

    <section id="tampilan" class="tampilan">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor dolore, tenetur ut? Ducimus maxime incidunt voluptatum nobis corrupti eaque eum excepturi quam odio suscipit perspiciatis, eligendi possimus numquam hic ut.</h3>
            <p>
              Tampilan grid cuaca disini. Coming Soon!
            </p>
          </div>
        </div>
      </div>
    </section>

  </main>

  <footer id="footer">
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; <?= date('Y'); ?> Created By <strong><span><a class="text-dark" href="https://rizkiwahfiudin.my.id/">Rizki Wahfiudin</a></span></strong>
      </div>
      <div class="credits">
        Available On <a href="https://github.com/rizkiwahfiudin">GitHub</a>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>