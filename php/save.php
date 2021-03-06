<?PHP
	require_once("conexion_pdo.php");
	session_start();
	
	// Creamos el objeto 
	$db = new Conexion();
	
	$dbTabla = 'listas';
	$dbTabla_2 = 'lista_libros'; 

	$id_user = $_SESSION['id'];
	$id_libro = $_POST['id_libro'];

	if (isset($id_user)){
		if (countListSave() == 1){
			
			$id_lista = getListSave();
			
			if(isset($id_lista)){
				echo $id_lista;
					if(checkSave($id_lista) == 0){	
						addSave($id_lista);
					}
				}
		}
		else {
			setListSave();
			
			if (countListSave() == 1){
				$id_lista = getListSave();

				if(isset($id_lista)){
					if(checkSave($id_lista) == 0){	
						addSave($id_lista);
					}
				}
			}
		}
		
	}
    else {
		echo "No estas registrado";
		header("location:../login/index.php");
	}


function setListSave(){
	global $db, $dbTabla, $id_user;
	
	$consulta = "INSERT INTO $dbTabla (id_user, tipo) VALUES (:id, 0)";
	$result = $db->prepare($consulta);
	$result->execute(array(":id" => $id_user));
	
}

function countListSave(){
	global $db, $dbTabla, $id_user;
	
	$consulta = "SELECT COUNT(*) FROM $dbTabla WHERE id_user=:id AND tipo=0"; 
    $result = $db->prepare($consulta);
    $result->execute(array(":id" => $id_user));
    $lista = $result->fetchColumn();
	//echo "countListSave() = " + $consulta;
	//echo "countListSave() = " + $lista;
	return $lista;
}

function getListSave(){
	global $db, $dbTabla, $id_user;
	
	$consulta = "SELECT id FROM $dbTabla WHERE id_user=:id AND tipo=0"; 
    $result = $db->prepare($consulta);
	$id =$result->execute(array(":id" => $id_user));
	$id = $result->fetchColumn();
	//echo "getListSave() = " + $consulta;
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

function addSave($id_lista){
	global $db, $dbTabla_2, $id_libro;
	
	$consulta = "INSERT INTO $dbTabla_2 (id, id_libro) VALUES (:id_list, :id_book)";
    $result = $db->prepare($consulta);
    $result->execute(array(":id_list" => $id_lista, ":id_book" => $id_libro));
}


?>

    
    