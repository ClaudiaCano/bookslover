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
	<link rel="stylesheet" href="../css/books.css">
	<link rel="stylesheet" href="../css/style.css">
 
	<!-- API key AIzaSyC9vti0RfcMWmz6j5Dhu1waCSTe1f3qbEM -->
    <title>bookslover</title>
  </head>

<body>
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
			</div>
			<div class="col-9">
				<h1><?php echo $book['volumeInfo']['title']?></h1>
				<h2><?php echo $book['volumeInfo']['authors'][0]?></h2>
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