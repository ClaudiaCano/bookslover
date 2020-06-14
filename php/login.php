<?PHP
	$mail = $_POST["email"];
	$pas = $_POST["pass"];

	require_once("conexion_pdo.php");
	// Creamos el objeto 
	$db = new Conexion();
	
	$dbTabla = 'users'; 

	$consulta = "SELECT COUNT(*) FROM $dbTabla WHERE email=:log";
	$result = $db->prepare($consulta);
	$result->execute(array(":log" => $mail)); 
	$email_1 = $result->fetchColumn();


	if($email_1==1){

        $consulta = "SELECT COUNT(*) FROM $dbTabla WHERE email=:log AND password=:pas"; 
        $result = $db->prepare($consulta);
        $result->execute(array(":log" => $mail, ":pas" => md5($pas)));
        $contra_1 = $result->fetchColumn();
        //print $contra_1;

		if ($contra_1==1) { 
            $consulta = "SELECT id, nombre FROM $dbTabla WHERE email=:log AND password=:pas"; 
            $result = $db->prepare($consulta);
            $result->execute(array(":log" => $mail, ":pas" => md5($pas)));
            
            session_start();
            $fila = $result -> fetchObject();
            $_SESSION["id"] = $fila -> id;
            $_SESSION["nom"] = $fila -> nombre;
                
            //print "Sesion Iniciada";
            header("location:../index.php");
            
        }
        else {
            //print "Contraseña no coincide";
            header("location:../login/index.php");
        }
	}
    else {
        print "Email no registrado";
		header("location:../login/index.php");
	}


    