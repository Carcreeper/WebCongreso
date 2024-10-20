<?php
    $id_charla      = $_POST['id_charla'];
    $usuario2       = $_POST['usuario'];
    $comentario     = $_POST['comentario'];
    $fechayhora     = $_POST['fechayhora'];

    $servidor = 'localhost';
	$database = 'app_congreso';
    $usuario  = 'root';
	$pass	  = '';

    $con = mysqli_connect($servidor, $usuario, $pass, $database);

    $sql = "INSERT INTO comentarios (id_charla, usuario, comentario, fechayhora) VALUES ('$id_charla ', '$usuario2', '$comentario', '$fechayhora')";
    $con->query($sql);

    $con->close();
?>