<?PHP
	require_once("conexion_pdo.php");
	session_start();
	
	// Creamos el objeto 
	$db = new Conexion();
	
	$dbusers = 'users';
	$dbTabla = 'listas';
	$dbTabla_2 = 'lista_libros'; 

	$id_user = $_SESSION['id'];
	//echo $id_libro;

	if (countListFav() == 1){
		$id_lista = getListFav();
			
		if(isset($id_lista)){
			echo getBooksFav($id_lista);
		}else "no isset $id_lista";
	}else{
		echo "<div>Vaya, todavia no has añadido ningún libro a tos favoritos.</div>";
	}
		

function countListFav(){
	global $db, $dbTabla, $id_user;
	
	$consulta = "SELECT COUNT(*) FROM $dbTabla WHERE id_user=:id AND tipo=1"; 
    $result = $db->prepare($consulta);
    $result->execute(array(":id" => $id_user));
    $lista = $result->fetchColumn();
	
	return $lista;
}

function getListFav(){
	global $db, $dbTabla, $id_user;
	
	$consulta = "SELECT id FROM $dbTabla WHERE id_user=:id AND tipo=1"; 
    $result = $db->prepare($consulta);
    $result->execute(array(":id" => $id_user));
	$id = $result->fetchColumn();
	
	return $id;
} 

function getBooksFav($id_lista){
	global $db, $dbTabla_2;
	
	$consulta = "SELECT id_libro FROM $dbTabla_2 WHERE id=:id"; 
    $result = $db->prepare($consulta);
	$result->execute(array(":id" => $id_lista));
		
	$books = array();
	
	while($row=$result->fetch(PDO::FETCH_ASSOC)){
  
		$books['books']['fav'][] = $row;
	}

	return json_encode($books);
}

?>

    