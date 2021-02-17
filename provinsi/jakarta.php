<?php
  include "../function.php";
  $file = '../assets/data/jakarta.json';
  $result = file_get_contents($file);
  $data = json_decode($result, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Informasi Cuaca | Rizki Wahfiudin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="../assets/img/favicon.jpg" rel="icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/grid.css" rel="stylesheet">
</head>

<body>
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="index.php">Informasi Cuaca</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="https://rizkiwahfiudin.my.id">Home</a></li>
          <li><a href="https://rizkiwahfiudin.my.id/blog">Blog</a></li>
          <li><a href="https://rizkiwahfiudin.my.id/covid19">Info Covid-19</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main id="main">

    <section>
      <div class="row">
        <?php foreach ($data as $val): ?>
          <div class="container-fluid px-1 px-md-3 py-5 mx-auto">
            <div class="row d-flex justify-content-center px-3">
              <div class="col-sm-4">
                <div class="card">
                  <h2 class="ml-auto mr-4 mt-3 mb-0"><?= $val['Kota']; ?></h2>
                  <p class="ml-auto mr-4 mb-0 med-font">Snow</p>
                  <h1 class="ml-auto mr-4 large-font"><?= $val['Suhu']; ?>&#176;</h1>
                  <h1 class="ml-auto mr-4 med-font"><?= $val['Kelembaban']; ?></h1>
                  <p class="time-font mb-0 ml-4 mt-auto"> <?= waktu(); ?> <span class="sm-font">WIB</span></p>
                  <p class="ml-4 mb-4"><?= tanggalLengkap(); ?></p>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </section>

  </main>

  <footer id="footer">
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; <?= date('Y'); ?> | <strong><span><a class="text-dark" href="https://rizkiwahfiudin.my.id/">Rizki Wahfiudin</a></span></strong>
      </div>
      <div class="credits">
        Available On <a href="https://github.com/rizkiwahfiudin">GitHub</a>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/js/main.js"></script>

</body>
</html>