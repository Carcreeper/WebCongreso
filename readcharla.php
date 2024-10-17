<?php
  $servidor = 'localhost';
  $database = 'app_congreso';
  $usuario  = 'root';
  $pass	  = '';

  $con = mysqli_connect($servidor, $usuario, $pass, $database);

  $sql = "SELECT * FROM `charlas` WHERE"
  $resp = $con->query($sql); 

  if ($resp -> num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - nombrecharla: " . $row["nombrecharla"]. " "  "<br>";
      }
    }
  else{
        echo "no hay charlas";
    }

    $con->close();
?>