<!doctype html>
<?php include 'php/es.php'?>
<html lang="es">
<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<!-- Star Rating SVG -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<link rel="stylesheet" href="css/star-rating-svg.css" type="text/css" >
	
	<!-- CSS -->
	<link rel="stylesheet" href="css/flickity.css" media="screen">
	<link rel="stylesheet" href="css/home.css">
	<link rel="stylesheet" href="css/style.css">
 
	<!-- API key AIzaSyC9vti0RfcMWmz6j5Dhu1waCSTe1f3qbEM -->
    <title>bookslovers</title>
  </head>
  <body>
	  
<nav class="navbar">
  <a class="navbar-brand" href=""><img id="navbar-logo" src="img/bookslover_1_max.png"></a>
	<ul class="nav justify-content-end">
  <li class="nav-item">
    <button class="btn btn-sm btn-outline-secondary" type="button"><?php echo $nav_login?></button>
  </li>
	</ul>
</nav>
	  
<div class="container mt-3">
  <div class="row mb-5">
    <div class="col">
      <h1><?php echo $home_titulo_slider?></h1>
		<div class="carousel" data-flickity='{"cellAlign": "left", "prevNextButtons": false, "pageDots": false}'>
		  <div id="card_1" class="carousel-cell p-3">
		  	<div class="row">
				<div class="col-4">
				</div>
				<div class="col-8">
					<h2>Un cuento perfecto</h2>
					<h3>Elisabeth Benabent</h3>
					<div class="my-rating no-action"></div>
				</div>
			</div>
		  </div>
		  <div id="card_2" class="carousel-cell p-3">
		  	<div class="row">
				<div class="col-4">
				</div>
				<div class="col-8">
					<h2>Un cuento perfecto</h2>
					<h3>Elisabeth Benabent</h3>
				</div>
			</div>
		  </div>
			<div id="card_3" class="carousel-cell p-3">
		  	<div class="row">
				<div class="col-4">
				</div>
				<div class="col-8">
					<h2>Un cuento perfecto</h2>
					<h3>Elisabeth Benabent</h3>
				</div>
			</div>
		  </div>
			<div id="card_4" class="carousel-cell p-3">
		  	<div class="row">
				<div class="col-4">
				</div>
				<div class="col-8">
					<h2>Un cuento perfecto</h2>
					<h3>Elisabeth Benabent</h3>
				</div>
			</div>
		  </div>
			<div id="card_5" class="carousel-cell p-3">
		  	<div class="row">
				<div class="col-4">
				</div>
				<div class="col-8">
					<h2>Un cuento perfecto</h2>
					<h3>Elisabeth Benabent</h3>
				</div>
			</div>
		  </div>
			<div id="card_6" class="carousel-cell p-3">
		  	<div class="row">
				<div class="col-4">
				</div>
				<div class="col-8">
					<h2>Un cuento perfecto</h2>
					<h3>Elisabeth Benabent</h3>
				</div>
			</div>
		  </div>
		</div>
	</div>
  </div>
  <div class="row">
    <div class="col-8">
      <h1><?php echo $home_titulo_izquierda?><a href=""><small class="xs"><?php echo $ver_mas?></small></a></h1>
    </div>
    <div class="col-4">
      <h1><?php echo $home_titulo_derecha?><a href=""><small class="xs"><?php echo $ver_mas?></small></a></h1>
    </div>
  </div>
</div>
	  
	<!-- The core Firebase JS SDK is always required and must be listed first -->
	<script src="/__/firebase/7.13.2/firebase-app.js"></script>

	<!-- TODO: Add SDKs for Firebase products that you want to use
		 https://firebase.google.com/docs/web/setup#available-libraries -->
	<script src="/__/firebase/7.13.2/firebase-analytics.js"></script>

	<!-- Initialize Firebase -->
	<script src="/__/firebase/init.js"></script>
	  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="js/flickity.pkgd.min.js"></script>
	<script src="js/jquery.star-rating-svg.js"></script>
	<script src="js/my-rating.js"></script>
  </body>
</html>