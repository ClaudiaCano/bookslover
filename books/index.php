<!doctype html>
<?php
include '../php/es.php';
session_start();
$id = $_GET['id'];

$API_KEY = "?key=AIzaSyCzjstMcn7zGdz14O11DxoQEKOkBkdkeUg";
$QUERY_0 = "https://www.googleapis.com/books/v1/volumes";

$QUERY = $QUERY_0 . '/' . $id . $API_KEY;

$book = json_decode(file_get_contents($QUERY), true);
?>
<html lang="es">

<head>
	<!-- Meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="title" content="<?php echo $book['volumeInfo']['title'] ?> - bookslover">
</head>
<link rel="icon" type="image/png" href="../img/icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- Star Rating SVG -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<link rel="stylesheet" href="../css/star-rating-svg.css" type="text/css">

<!-- CSS -->
<link rel="stylesheet" href="../css/backgroundBook.php?id=<?php echo $id = $_GET['id']; ?>">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/footer.css">
<link rel="stylesheet" href="../css/books.css">

<title><?php echo $book['volumeInfo']['title'] ?> - bookslover</title>
</head>

<body>
	<div class="page-bg"> </div>
	<div class="degradado"> </div>
	<div id="container">
		<nav class="navbar">
			<a class="navbar-brand" href="../"><img id="navbar-logo" src="../img/bookslover_white.png"></a>
			<ul class="nav justify-content-center">
				<div id="wrap">
					<form target="" action="./search" autocomplete="off" method="get">
						<input id="search" name="q" type="text" placeholder="¿Qué buscas?"><input id="search_submit" value="Buscar" type="submit">
					</form>
				</div>
			</ul>
			<ul class="nav justify-content-end">
				<?php if (isset($_SESSION["id"])) {
					echo '<li class="nav-item mr-2">
							<button id="perfil" class="btn-navbar btn-sm btn-outline-secondary" onclick="">
								<img src="../img/user.png" class="align-text-top" width="20">
								<span id="nom-user">' . $_SESSION["nom"] . '</span>
							</button>
						</li>';
				} else {
					echo '<li class="nav-item mr-2">
						<button class="btn-navbar btn-sm btn-outline-secondary" type="button" onclick="window.location.href=' . "'../login/'" . '">'.$nav_login.'</button>
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

		<div class="card header">
			<div>
				<img class="card-img" src="<?php echo $book['volumeInfo']['imageLinks']['thumbnail'] ?>" alt="portada">
			</div>
			<div class="title d-flex flex-column align-items-stretch">
				<div class="mb-auto">
					<h1><?php echo $book['volumeInfo']['title'] ?></h1>
					<h3><?php echo $book['volumeInfo']['authors'][0] ?></h3>
				</div>
				<div class="">
					<div class="d-flex flex-row-reverse">
						<img id="cor" class="mb-3" src="../img/cor_0.png" width="30" onclick="fav('<?php echo $id ?>')">
						<img id="guardar" class="mb-3 mr-3" src="../img/guardar_0.png" width="30" onclick="save('<?php echo $id ?>')">
					</div>
					<?php if (isset($book['saleInfo']['listPrice']["amount"], $book['saleInfo']['retailPrice']["amount"])) {
						echo 	'<button class="btn btn-outline-secondary float-right" onclick="añadir()">
										<span class="precio1 mr-4">' . $book['saleInfo']['listPrice']["amount"] . '€</span> eBook
										<span class="precio2 ">' . $book['saleInfo']['retailPrice']["amount"] . '€</span>
									</button>';
					} else if (isset($book['saleInfo']['listPrice']["amount"])) {
						echo 	'<button class="btn btn-outline-secondary float-right" onclick="añadir()">
										eBook <span class="precio2 ">' . $book['saleInfo']['retailPrice']["amount"] . '€</span>
									</button>';
					} else {
						echo '<button class="btn btn-outline disabled float-right" disabled>No disponible actualmente</button>';
					}
					?>
				</div>
			</div>
		</div>
		<div class="details">
			<div class="row mt-5">
				<div class="col-9 pr-5 text-justify">
					<h2><?php echo $book_descripcion ?></h2>
					<?php echo $book['volumeInfo']['description'] ?>
				</div>
				<div class="col-3">
					<h2><?php echo $book_detalles ?></h2>
					<ul>
						<li><span class="font-weight-bolder">Fecha publicación </span><?php echo $book['volumeInfo']['publishedDate'] ?></li>
						<li><span class="font-weight-bolder">Editor </span> <?php echo $book['volumeInfo']['publisher'] ?></li>
						<li><span class="font-weight-bolder">Paginas </span> <?php echo $book['volumeInfo']['pageCount'] ?></li>
						<li><span class="font-weight-bolder">ISBN-10 </span> <?php echo $book['volumeInfo']['industryIdentifiers'][0]['identifier'] ?></li>
						<li><span class="font-weight-bolder">ISBN-13 </span> <?php echo $book['volumeInfo']['industryIdentifiers'][1]['identifier'] ?></li>
						<li><span class="font-weight-bolder">Categoría </span> <?php echo $book['volumeInfo']['categories'][0] ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php
        include "../footer.php"
    ?>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="../js/jquery.star-rating-svg.js"></script>
	<script src="../js/my-rating.js"></script>
	<script src="../js/save.js" type="text/javascript"></script>
	<script src="../js/fav.js" type="text/javascript"></script>
	<script src="../js/carrito.js" type="text/javascript"></script>
</body>

</html>