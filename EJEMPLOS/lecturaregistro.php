<?php
	$email	    = $_POST['email'];
    $contrasena = $_POST['contrasena'];

    $servidor = 'localhost';
	$database = 'db1';
    $usuario  = 'root';
	$pass	  = '';

    $con = mysqli_connect($servidor, $usuario, $pass, $database);

    $sql = "SELECT * FROM `humanos` WHERE email = '$email' AND contrasena = '$contrasena';";
    $resp = $con->query($sql);

    if ($resp -> num_rows > 0) {

        echo "usuario existente";

    }else{
        
        echo "usuario no existente";
    }

    $con->close();



?>
    