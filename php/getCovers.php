<?php

$id = $_POST['id'];

$API_KEY = "?key=AIzaSyCzjstMcn7zGdz14O11DxoQEKOkBkdkeUg";
$QUERY_0 = "https://www.googleapis.com/books/v1/volumes";

$QUERY = $QUERY_0 . '/' . $id . $API_KEY;

$book = json_decode(file_get_contents($QUERY), true);

$cover = $book['volumeInfo']['imageLinks']['thumbnail'];

echo '<a href="../books/?id='.$id.'" target="_blank"><img src="'.$cover.'" alt="portada"></a>';

?>