<?php
  include "function.php";

  $provinsi = file_get_contents('https://ibnux.github.io/data-indonesia/propinsi.json');
  $result = json_decode($provinsi);
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

  <!-- Card -->
  <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
  <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
  <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
  <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <!-- End Card -->
</head>

<body>
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="index.html">Info Cuaca</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="https://rizkiwahfiudin.my.id">Home</a></li>
          <li><a href="https://rizkiwahfiudin.my.id/blog">Blog</a></li>
          <li><a href="https://rizkiwahfiudin.my.id/covid19">Info Covid-19</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main id="main">

    <div class="row mt-3"></div>
    <div class="grey-bg container-fluid">
      <section>
        <div class="row">
          <?php foreach ($result as $key=>$val): ?>
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card" style="height:160px">
                <div class="card-content">
                  <div class="card-body" style="max-width: 1000px;">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <i class="icon-pointer danger font-large-2 float-left"></i>
                      </div>
                      <div class="media-body text-right">
                        <h3><?= $val->nama; ?></h3>
                        <span><a href="#">Select</a></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </section>
    </div>

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