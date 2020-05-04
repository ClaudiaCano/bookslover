<?php 
/*** set the content type header ***/
header("Content-type: text/css");
/** set the  color ***/
include '../php/es.php';
$id = $_GET['id'];

$API_KEY = "?key=AIzaSyCzjstMcn7zGdz14O11DxoQEKOkBkdkeUg";
$QUERY_0 = "https://www.googleapis.com/books/v1/volumes";

$QUERY = $QUERY_0.'/'.$id.$API_KEY;

$book = json_decode( file_get_contents($QUERY), true );

$url = $book['volumeInfo']['imageLinks']['thumbnail'];
?>

.page-bg {
	background-image: url(<?=$url;?>);
	background-size: cover;
     -webkit-filter: blur(30px);
     -moz-filter: blur(30px);
     -o-filter: blur(30px);
     -ms-filter: blur(30px);
     filter: blur(30px);
     position: fixed;
     width: 100%;
     height: 100%;
     top: 0;
     left: 0;
     z-index: -1;
}