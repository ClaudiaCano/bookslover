<!doctype html>
<?php 
include '../php/es.php';
$id = $_GET['id'];

$API_KEY = "?key=AIzaSyCzjstMcn7zGdz14O11DxoQEKOkBkdkeUg";
$QUERY_0 = "https://www.googleapis.com/books/v1/volumes";

$QUERY = $QUERY_0.'/'.$id.$API_KEY;

$book = json_decode( file_get_contents($QUERY), true );
?>
<html lang="es">
<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
	<meta name="description" content="<?php echo $book['volumeInfo']['title']?> - bookslover"></head>	
	<link rel="icon" type="image/png" href="../img/icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<!-- Star Rating SVG -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<link rel="stylesheet" href="../css/star-rating-svg.css" type="text/css" >
	
	<!-- CSS -->
	<link rel="stylesheet" href="../css/backgroundBook.php?id=<?php echo $id = $_GET['id'];?>">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/books.css">
 
    <title>bookslover</title>
  </head>

<body>
<div class="page-bg">
</div>
	<nav class="navbar">
  		<a class="navbar-brand" href="../"><img id="navbar-logo" src="../img/bookslover_1_max.png"></a>
		<ul class="nav justify-content-end">
		  <li class="nav-item">
			<button class="btn btn-sm btn-outline-secondary" type="button"><?php echo $nav_login?></button>
		  </li>
		</ul>
	</nav>
	
	<div class="container mt-5">
		<div class="row">
			<div class="col-3">
				<img class="img-fluid cover mx-auto d-block" src="<?php echo $book['volumeInfo']['imageLinks']['thumbnail']?>" >
			</div>
			<div class="col-9">
				<div class="row">
					<div class="col-12">						
					<h1><?php echo $book['volumeInfo']['title']?></h1>
					<h3><?php echo $book['volumeInfo']['authors'][0]?></h3>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						
					</div>
					<div class="col-6">
						<span class="precio1 float-right align-self-end"><?php echo $book['saleInfo']['listPrice']["amount"]." €"?></span><br>
						<span class="precio2 float-right align-self-end"><?php echo $book['saleInfo']['retailPrice']["amount"]." €"?></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-12">
				<h2><?php echo $book_descripcion?></h2>
				<p><?php echo $book['volumeInfo']['description']?></p>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-12">
				<h2><?php echo $book_detalles?></h2>
				<ul>
					<li>Fecha publicación: <?php echo $book['volumeInfo']['publishedDate']?></li>
					<li>Editor: <?php echo $book['volumeInfo']['publisher']?></li>
					<li>Paginas: <?php echo $book['volumeInfo']['pageCount']?></li>
					<li>ISBN-10: <?php echo $book['volumeInfo']['industryIdentifiers'][0]['identifier']?></li>
					<li>ISBN-13: <?php echo $book['volumeInfo']['industryIdentifiers'][1]['identifier']?></li>
					<li>Categoría: <?php echo $book['volumeInfo']['categories'][0]?></li>
				</ul>
			</div>
		</div>
	</div>
	
	
	  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="../js/jquery.star-rating-svg.js"></script>
	<script src="../js/my-rating.js"></script>
</body>
</html>