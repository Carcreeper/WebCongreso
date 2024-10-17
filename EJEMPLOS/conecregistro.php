<?php
    $nombre 	= $_POST['nombre'];
	$tel		= $_POST['telefono'];
	$email	    = $_POST['email'];
	$direccion	= $_POST['direccion'];
    $contrasena = $_POST['contrasena'];

    $servidor = 'localhost';
	$database = 'db1';
    $usuario  = 'root';
	$pass	  = '';

    $con = mysqli_connect($servidor, $usuario, $pass, $database);

    $sql = "INSERT INTO humanos (nombre, tel, email, direccion, contrasena) VALUES ('$nombre', '$tel', '$email', '$direccion', '$contrasena')";
    $con->query($sql);


    $con->close();
    header('Location: index.php');


?>
    