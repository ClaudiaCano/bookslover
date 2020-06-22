<!doctype html>
<?php
include '../php/es.php';
session_start();
$q0 = $_GET['q'];
$q = str_replace(" ", "%20", $q0);

$API_KEY = "&key=AIzaSyCzjstMcn7zGdz14O11DxoQEKOkBkdkeUg";
$QUERY_0 = "https://www.googleapis.com/books/v1/volumes?q=";

$QUERY = $QUERY_0 . $q . $API_KEY . "&printType=books&maxResults=40";

$books = json_decode(file_get_contents($QUERY));
?>
<html lang="es">

<head>
	<!-- Meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content='¿Eres booklover? Entonces este es tu sitio'>
</head>
<link rel="icon" type="image/png" href="../img/icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- CSS -->
<link rel="stylesheet" href="../css/flickity.css" media="screen">
<link rel="stylesheet" href="../css/home.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/footer.css">
<link rel="stylesheet" href="../css/search.css">

<title>Resultados</title>
</head>

<body>

	<div id="bg">
		<img src="../img/background.png" alt="">
	</div>
	<div id="pre-sticky">
		<div id="sticky">
			<ul class="nav justify-content-center">
				<li class="nav-item">
					<button id="carrito" class="btn-navbar btn-sm btn-outline-secondary mr-5" onclick="">
						<img src="../img/compraNav.png" class="align-text-top" width="20">
						<span id="num-items">0</span>
					</button>
				</li>
				<?php if (isset($_SESSION["id"])) {
					echo '<li class="nav-item">
							<button id="perfil" class="btn-navbar btn-sm btn-outline-secondary" onclick="window.location.href=' . "'../profile/'" . '">
								<img src="../img/userProfile.png" class="align-text-top" width="20">
								<span id="nom-user">' . $_SESSION["nom"] . '</span>
							</button>
						</li>';
				} else {
					echo '<li class="nav-item">
						<button class="btn-navbar btn-sm btn-outline-secondary" type="button" onclick="window.location.href=' . "'../login/'" . '"><img src="img/userProfile.png" class="align-text-top" width="20"></button>
					</li>';
				}
				?>
			</ul>
		</div>
	</div>
	<div id="container">
		<nav class="navbar">
			<a class="navbar-brand" href="../"><img id="navbar-logo" src="../img/bookslover_white.png"></a>
			<ul class="nav justify-content-center">
				<div id="wrap">
					<form target="" action="../search" autocomplete="off">
						<input id="search" name="q" type="text" placeholder="¿Qué buscas?"><input id="search_submit" value="Buscar" type="submit">
					</form>
				</div>
			</ul>
			<ul id="nav-desk" class="nav justify-content-end">
				<?php if (isset($_SESSION["id"])) {
					echo '<li class="nav-item mr-2">
							<button id="perfil" class="btn-navbar btn-sm btn-outline-secondary" onclick="window.location.href='."'../profile/'".'">
								<img src="../img/user.png" class="align-text-top" width="20">
								<span id="nom-user">' . $_SESSION["nom"] . '</span>
							</button>
						</li>';
				} else {
					echo '<li class="nav-item mr-2">
						<button class="btn-navbar btn-sm btn-outline-secondary" type="button" onclick="window.location.href=' . "'../login/'" . '">' . $nav_login . '</button>
					</li>';
				}
				?>
				<li class="nav-item">
					<button id="carrito" class="btn-navbar btn-sm btn-outline-secondary" onclick="">
						<img src="../img/compra.png" class="align-text-top" width="20">
						<span id="num-items">0</span>
					</button>
				</li>
			</ul>
		</nav>
		<div class="row mt-5">
			<div class="col-12">

				<!--<h4> echo $books->totalItems?> resultados</h4>
		<p> echo $QUERY?></p>-->


				<?php if ($books->totalItems > 0) {
					echo '<h1 id="search_title">resultados para <span id="query">' . $q0 . '</span></h1>
						<div class="row row-cols-1 row-cols-md-3 mt-5">';
					foreach ($books->items as $book) {
						echo '<div class="col mb-4"><div class="card"><a class="book_link" href="../books/?id=' . $book->id . '">';
						if (!empty($book->volumeInfo->imageLinks->thumbnail)) {
							echo '<img class="img cover" src="' . $book->volumeInfo->imageLinks->thumbnail . '"/></a>';
						} else {
							echo '<img class="img cover" src="../img/def_cover.png"/></a>';
						}
						echo '<div class="card_background">
								<h3 class="card-title">' . $book->volumeInfo->title . '</h3>';
						if (!empty($book->volumeInfo->authors)) {
							echo '<p class="card-text">' . implode(", ", $book->volumeInfo->authors) . '</p>';
						}
						echo "</div></div></div>";
					}
					echo '</div>';
				} else echo '<h1 id="search_title">¡Qué pena! <br>No hay resultados para <span id="query">&nbsp;' . $q0 . '</span></h1>
							<h4 id="search_sub" class="mt-4">¿Por qué no pruebas otra vez?</h4>';
				?>

				<?php /*if($books->totalItems > 0){
				echo '<h1 id="search_title">resultados para <span id="query">&nbsp;'.$q0.'</span></h1>
							<div class="row row-cols-1 row-cols-md-3 mt-5">';
					foreach($books->items as $book){
						echo '
							<div class="col mb-4"><div class="card">
							<img class="img cover" src="'.$book->volumeInfo->imageLinks->thumbnail.'"/>
							<div class="card_background">
								<h3 class="card-title">'.$book->volumeInfo->title.'</h3>';
						if(!empty($book->volumeInfo->authors)){				
							echo '<p class="card-text">'.implode(", ", $book->volumeInfo->authors).'</p>';
						}
							echo "</div></div></div>";
					}
				echo '</div>';
				}else echo '<h1 id="search_title">¡Qué pena! <br>No hay resultados para <span id="query">&nbsp;'.$q0.'</span></h1>
							<h4 id="search_sub" class="mt-4">¿Por qué no pruebas otra vez?</h4>';
							*/
				?>
			</div>
		</div>
	</div>
	
	<?php
		include $_SERVER['DOCUMENT_ROOT']."/footer.php"
	?>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="../js/flickity.pkgd.min.js"></script>
	<script src="../js/jquery.star-rating-svg.js"></script>
	<script src="../js/my-rating.js"></script>
</body>

</html>