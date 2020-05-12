<?PHP
    $nom = $_POST["nom"];
    $mail = $_POST["email"];
    $pas = $_POST["pass"];
    
	require_once("conexion_pdo.php");
	// Creamos el objeto 
	$db = new Conexion();
	
	$dbTabla = 'users'; 

	$consulta = "SELECT COUNT(*) FROM $dbTabla WHERE email = :mail";
	$result = $db->prepare($consulta);
    $result->execute(array(":mail" => $mail));
    $total = $result->fetchColumn();
    print $consulta."<br>";

	if($total>0){
        //print "<p>¡vaya! parece que este email ya esta registrado</p>\n";
        header("location:../sigup/index.php");
	}
    else {
        $consulta = "INSERT INTO $dbTabla (nombre, email, password) VALUES (:nom, :mail, :pas)";
        $result = $db->prepare($consulta);
        
        $result->bindValue(':nom', $nom);
        $result->bindValue(':mail', $mail);
        $result->bindValue(':pas', md5($pas));

        $result->execute();
        if($result){
            //print "<p>usuario registrado</p>\n";
            header("location:../index.php");
        }else{
            //print "<p>¡vaya! ha surgido un error</p>\n";
            //print $consulta."<br>";
            header("location:../sigup/index.php");
        }
	}
	
?>