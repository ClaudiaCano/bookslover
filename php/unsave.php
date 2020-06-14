<?PHP
	require_once("conexion_pdo.php");
	session_start();
	
	// Creamos el objeto 
	$db = new Conexion();
	
	$dbTabla = 'listas';
	$dbTabla_2 = 'lista_libros'; 

	$id_user = $_SESSION['id'];
	$id_libro = $_POST['id_libro'];
	//echo $id_libro;

	if (isset($id_user)){
		
		if (countListSave() == 1){
			$id_lista = getListSave();
			
			if(isset($id_lista)){
				if(checkSave($id_lista) == 1){	
					deleteSave($id_lista);
				}
			}
		}
				
	}

function countListSave(){
	global $db, $dbTabla, $id_user;
	
	$consulta = "SELECT COUNT(*) FROM $dbTabla WHERE id_user=:id AND tipo=0"; 
    $result = $db->prepare($consulta);
    $result->execute(array(":id" => $id_user));
    $lista = $result->fetchColumn();
	
	return $lista;
}

function getListSave(){
	global $db, $dbTabla, $id_user;
	
	$consulta = "SELECT id FROM $dbTabla WHERE id_user=:id AND tipo=0"; 
    $result = $db->prepare($consulta);
    $id =$result->execute(array(":id" => $id_user));
	$id = $result->fetchColumn();
	return $id;
} 

function checkSave($id_lista){
	global $db, $dbTabla_2, $id_libro;
	
	$consulta = "SELECT COUNT(*) FROM $dbTabla_2 WHERE id=:id_list AND id_libro=:id_book";
    $result = $db->prepare($consulta);
    $result->execute(array(":id_list" => $id_lista, ":id_book" => $id_libro));
    $libro = $result->fetchColumn();
	
	return $libro;
}

function deleteSave($id_lista){
	global $db, $dbTabla_2, $id_libro;
	
	$consulta = "DELETE FROM $dbTabla_2 WHERE id=:id_list AND id_libro=:id_book";
    $result = $db->prepare($consulta);
    $result->execute(array(":id_list" => $id_lista, ":id_book" => $id_libro));
}


?>

    