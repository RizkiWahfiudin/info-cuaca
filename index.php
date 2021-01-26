<?php
	include "function.php";

	$date= date("d-m-Y");
	$exten= explode("-", $date);
	$lastupdate= $exten[0].' '.bulan($exten[1]).' '.$exten[2];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="icon" href="assets/img/favicon.jpg" type="image/png">
    <title>Informasi Cuaca | Rizki Wahfiudin</title>
  </head>
  <body>
  	<?php $kota = ["assets/img/logo/jakarta.png"=>"Jakarta","assets/img/logo/surabaya.png"=>"Surabaya","assets/img/logo/bandung.jpg"=>"Bandung","assets/img/logo/yogyakarta.png"=>"Yogyakarta"]; ?>
	<div class="row">
  		<?php foreach ($kota as $key=>$val): ?>
  		<div class="col-sm-3">
		    <div class="card mb-3" style="max-width: 500px;">
			  <div class="row g-0">
			    <div class="col-md-4">
			      <img src=<?php echo $key; ?> width="100px" class="mt-4 img-thumbnail rounded mx-auto d-block">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h5 class="card-title"><?php echo $val; ?></h5>
			        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content</p>
			        <p class="card-text"><small class="text-muted">Last updated <?php echo $lastupdate ?></small></p>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
		<?php endforeach ?>
	</div>

	<footer class="bg-light text-center text-lg-start">
		<div class="text-center p-3" style="background-color: cyan;">
		© <?php echo date('Y'); ?> Created By <a class="text-dark" href="https://rizkiwahfiudin.my.id/">Rizki Wahfiudin</a>
		</div>
	</footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>