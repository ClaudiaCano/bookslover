<?php 

$API_KEY = "?key=AIzaSyCzjstMcn7zGdz14O11DxoQEKOkBkdkeUg";
$QUERY_0 = "https://www.googleapis.com/books/v1/volumes";

$QUERY_1 = $QUERY_0."/wyx1DwAAQBAJ".$API_KEY;
$QUERY_2 = $QUERY_0."/Ob4OAAAAQBAJ".$API_KEY;
$QUERY_3 = $QUERY_0."/wy2sDwAAQBAJ".$API_KEY;
$QUERY_4 = $QUERY_0."/mnf9mixwzBAC".$API_KEY;
$QUERY_5 = $QUERY_0."/egfFDwAAQBAJ".$API_KEY;
$QUERY_6 = $QUERY_0."/XhTPDwAAQBAJ".$API_KEY;


//$data = json_decode( file_get_contents('https://www.googleapis.com/books/v1/volumes/s1gVAAAAYAAJ?key=AIzaSyCzjstMcn7zGdz14O11DxoQEKOkBkdkeUg'), true );

$book1 = json_decode( file_get_contents($QUERY_1), true );
$book2 = json_decode( file_get_contents($QUERY_2), true );
$book3 = json_decode( file_get_contents($QUERY_3), true );
$book4 = json_decode( file_get_contents($QUERY_4), true );
$book5 = json_decode( file_get_contents($QUERY_5), true );
$book6 = json_decode( file_get_contents($QUERY_6), true );


//echo $json['volumeInfo']['title'];
?>