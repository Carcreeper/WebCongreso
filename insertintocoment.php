<?php
    $usuario2       = $_POST['usuario'];
    $comentario     = $_POST['comentario'];
    $fechayhora     = $_POST['fechayhora'];

    $servidor = 'localhost';
	$database = 'app_congreso';
    $usuario  = 'root';
	$pass	  = '';

    $con = mysqli_connect($servidor, $usuario, $pass, $database);

    $sql = "INSERT INTO comentarios (usuario, comentario, fechayhora) VALUES ('$usuario2', '$comentario', '$fechayhora')";
    $con->query($sql);

    $con->close();
?>