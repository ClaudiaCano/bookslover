<!doctype html>
<?php
include "php/es.php";
include "php/bestsellers.php";
session_start();
?>
<html lang="es">

<head>
	<!-- Meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?php echo $home_description;?>">
</head>
<link rel="icon" type="image/png" href="img/icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- Star Rating SVG -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<link rel="stylesheet" href="css/star-rating-svg.css" type="text/css">

<!-- CSS -->
<link rel="stylesheet" href="css/flickity.css" media="screen">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/footer.css">

<title><?php echo $home_title;?></title>
</head>

<body>
	<div id="pre-sticky">
		<div id="sticky">
			<ul class="nav justify-content-center">
				<li class="nav-item">
					<button id="carrito" class="btn-navbar btn-sm btn-outline-secondary mr-5" onclick="">
						<img src="img/compraNav.png" class="align-text-top" width="20">
						<span id="num-items">0</span>
					</button>
				</li>
				<?php if (isset($_SESSION["id"])) {
					echo '<li class="nav-item">
							<button id="perfil" class="btn-navbar btn-sm btn-outline-secondary" onclick="window.location.href=' . "'profile/'" . '">
								<img src="img/userProfile.png" class="align-text-top" width="20">
								<span id="nom-user">' . $_SESSION["nom"] . '</span>
							</button>
						</li>';
				} else {
					echo '<li class="nav-item">
						<button class="btn-navbar btn-sm btn-outline-secondary" type="button" onclick="window.location.href=' . "'login/'" . '"><img src="img/userProfile.png" class="align-text-top" width="20"></button>
					</li>';
				}
				?>
			</ul>
		</div>
	</div>
	<div id="bg">
		<img src="img/background.png" alt="">
	</div>
	<div id="container">
		<nav class="navbar">
			<a class="navbar-brand" href=""><img id="navbar-logo" src="img/bookslover_white.png"></a>
			<ul class="nav justify-content-center">
				<div id="wrap">
					<form target="" action="./search" autocomplete="off" method="get">
						<input id="search" name="q" type="text" placeholder="¿Qué buscas?"><input id="search_submit" value="Buscar" type="submit">
					</form>
				</div>
			</ul>
			<ul id="nav-desk" class="nav justify-content-end">
				<?php if (isset($_SESSION["id"])) {
					echo '<li class="nav-item mr-2">
							<button id="perfil" class="btn-navbar btn-sm btn-outline-secondary" onclick="window.location.href=' . "'profile/'" . '">
								<img src="img/user.png" class="align-text-top" width="20">
								<span id="nom-user">' . $_SESSION["nom"] . '</span>
							</button>
						</li>';
				} else {
					echo '<li class="nav-item mr-2">
						<button class="btn-navbar btn-sm btn-outline-secondary" type="button" onclick="window.location.href=' . "'login/'" . '">' . $nav_login . '</button>
					</li>';
				}
				?>
				<li class="nav-item">
					<button id="carrito" class="btn-navbar btn-sm btn-outline-secondary" onclick="">
						<img src="img/compra.png" class="align-text-top" width="20">
						<span id="num-items">0</span>
					</button>
				</li>
			</ul>
		</nav>

		<div class="row myrow">
			<div id="slogan" class="col-12 mt-5 mb-5 mr-0 ml-0">
				<h1><?php echo $home_titulo_slogan ?></h1>
				<h3><?php echo $home_texto_slogan ?></h3>
			</div>
		</div>
		<div class="row myrow">
			<div class="col-12">
				<h1 id="best"><?php echo $home_titulo_slider ?></h1>
				<div class="carousel" data-flickity='{"cellAlign": "left", "prevNextButtons": false, "pageDots": false}'>
					<div id="card_1" class="carousel-cell p-3">
						<div class="row align-items-center mb-0">
							<div class="col-lg-4 col-sm-12 pre-cover">
								<a href="books/?id=<?php echo $book1['id'] ?>">
									<img class="img-fluid cover" src="<?php echo $book1['volumeInfo']['imageLinks']['thumbnail'] ?>">
								</a>
							</div>
							<div class="col-lg-8 col-sm-12 info">
								<div class="row mt-3" style="height: 50%;">
									<div class="col">
										<h2><?php echo $book1['volumeInfo']['title'] ?></h2>
										<h3><?php echo $book1['volumeInfo']['authors'][0] ?></h3>
									</div>
								</div>
								<div class="row align-items-end precio">
									<div class="col-lg-8 col-sm-10">
										<p class="mb-0"><?php echo $book1['saleInfo']['retailPrice']["amount"] . " €" ?></p>
										<div class="my-rating-4 no-action"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="card_2" class="carousel-cell p-3">
						<div class="row align-items-center mb-0">
							<div class="col-lg-4 col-sm-12 pre-cover">
								<a href="books/?id=<?php echo $book2['id'] ?>">
									<img class="img-fluid cover" src="<?php echo $book2['volumeInfo']['imageLinks']['thumbnail'] ?>">
								</a>
							</div>
							<div class="col-lg-8 col-sm-12 info">
								<div class="row mt-3" style="height: 50%;">
									<div class="col">
										<h2><?php echo $book2['volumeInfo']['title'] ?></h2>
										<h3><?php echo $book2['volumeInfo']['authors'][0] ?></h3>
									</div>
								</div>
								<div class="row align-items-end precio">
									<div class="col-lg-8 col-sm-10">
										<p class="mb-0"><?php echo $book2['saleInfo']['listPrice']["amount"] . " €" ?></p>
										<div class="my-rating-5 no-action"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="card_3" class="carousel-cell p-3">
						<div class="row align-items-center mb-0">
							<div class="col-lg-4 col-sm-12 pre-cover">
								<a href="books/?id=<?php echo $book3['id'] ?>">
									<img class="img-fluid cover" src="<?php echo $book3['volumeInfo']['imageLinks']['thumbnail'] ?>">
								</a>
							</div>
							<div class="col-lg-8 col-sm-12 info">
								<div class="row mt-3" style="height: 50%;">
									<div class="col">
										<h2><?php echo $book3['volumeInfo']['title'] ?></h2>
										<h3><?php echo $book3['volumeInfo']['authors'][0] ?></h3>
									</div>
								</div>
								<div class="row align-items-end precio">
									<div class="col-lg-8 col-sm-10">
										<p class="mb-0"><?php echo $book3['saleInfo']['listPrice']["amount"] . " €" ?></p>
										<div class="my-rating-4 no-action"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="card_4" class="carousel-cell p-3">
						<div class="row align-items-center mb-0">
							<div class="col-lg-4 col-sm-12 pre-cover">
								<a href="books/?id=<?php echo $book4['id'] ?>">
									<img class="img-fluid cover" src="<?php echo $book4['volumeInfo']['imageLinks']['thumbnail'] ?>">
								</a>
							</div>
							<div class="col-lg-8 col-sm-12 info">
								<div class="row mt-3" style="height: 50%;">
									<div class="col">
										<h2><?php echo $book4['volumeInfo']['title'] ?></h2>
										<h3><?php echo $book4['volumeInfo']['authors'][0] ?></h3>
									</div>
								</div>
								<div class="row align-items-end precio">
									<div class="col-lg-8 col-sm-10">
										<p class="mb-0"><?php echo $book4['saleInfo']['listPrice']["amount"] . " €" ?></p>
										<div class="my-rating-5 no-action"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="card_5" class="carousel-cell p-3">
						<div class="row align-items-center mb-0">
							<div class="col-lg-4 col-sm-12 pre-cover">
								<a href="books/?id=<?php echo $book5['id'] ?>">
									<img class="img-fluid cover" src="<?php echo $book5['volumeInfo']['imageLinks']['thumbnail'] ?>">
								</a>
							</div>
							<div class="col-lg-8 col-sm-12 info">
								<div class="row mt-3" style="height: 50%;">
									<div class="col">
										<h2><?php echo $book5['volumeInfo']['title'] ?></h2>
										<h3><?php echo $book5['volumeInfo']['authors'][0] ?></h3>
									</div>
								</div>
								<div class="row align-items-end precio">
									<div class="col-lg-8 col-sm-10">
										<p class="mb-0"><?php echo $book5['saleInfo']['listPrice']["amount"] . " €" ?></p>
										<div class="my-rating-5 no-action"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="card_6" class="carousel-cell p-3">
						<div class="row align-items-center mb-0">
							<div class="col-lg-4 col-sm-12 pre-cover">
								<a href="books/?id=<?php echo $book6['id'] ?>">
									<img class="img-fluid cover" src="<?php echo $book6['volumeInfo']['imageLinks']['thumbnail'] ?>">
								</a>
							</div>
							<div class="col-lg-8 col-sm-12 info">
								<div class="row mt-3" style="height: 50%;">
									<div class="col">
										<h2><?php echo $book6['volumeInfo']['title'] ?></h2>
										<h3><?php echo $book6['volumeInfo']['authors'][0] ?></h3>
									</div>
								</div>
								<div class="row align-items-end precio">
									<div class="col-lg-8 col-sm-10">
										<p class="mb-0"><?php echo $book6['saleInfo']['listPrice']["amount"] . " €" ?></p>
										<div class="my-rating-4 no-action"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="row mt-6">
			<div class="col-8">
				<h1><?php echo $home_titulo_izquierda ?><a class="animation" href=""><small class="xs"><?php echo $ver_mas ?></small></a></h1>
			</div>
			<div class="col-4">
				<h1><?php echo $home_titulo_derecha ?><a class="animation" href=""><small class="xs"><?php echo $ver_mas ?></small></a></h1>
			</div>
		</div>-->
	</div>
	<?php
	include $_SERVER['DOCUMENT_ROOT'] . include "footer.php"
	?>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="js/flickity.pkgd.min.js"></script>
	<script src="js/jquery.star-rating-svg.js"></script>
	<script src="js/my-rating.js"></script>.
	<script src="js/carrito.js" type="text/javascript"></script>
</body>

</html>