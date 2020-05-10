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
     -webkit-filter: blur(10px);
     -moz-filter: blur(10px);
     -o-filter: blur(10px);
     -ms-filter: blur(10px);
     filter: blur(10px);
     position: fixed;
     width: 100%;
     height: 100%;
     top: 0;
     left: 0;
     z-index: -2;
}

.degradado{
 	position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
	z-index: -1;
	background: rgba(135,16,254,1);
	background: -moz-linear-gradient(top, rgba(135,16,254,1) 0%, rgba(144,33,255,0.96) 4%, rgba(255,255,255,0) 100%);
	background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(135,16,254,1)), color-stop(4%, rgba(144,33,255,0.96)), color-stop(100%, rgba(255,255,255,0)));
	background: -webkit-linear-gradient(top, rgba(135,16,254,1) 0%, rgba(144,33,255,0.96) 4%, rgba(255,255,255,0) 100%);
	background: -o-linear-gradient(top, rgba(135,16,254,1) 0%, rgba(144,33,255,0.96) 4%, rgba(255,255,255,0) 100%);
	background: -ms-linear-gradient(top, rgba(135,16,254,1) 0%, rgba(144,33,255,0.96) 4%, rgba(255,255,255,0) 100%);
	background: linear-gradient(to bottom, rgba(135,16,254,1) 0%, rgba(144,33,255,0.96) 4%, rgba(255,255,255,0) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#8710fe', endColorstr='#ffffff', GradientType=0 );
}