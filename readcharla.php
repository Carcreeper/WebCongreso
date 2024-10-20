<?php
  $servidor = 'localhost';
  $database = 'app_congreso';
  $usuario  = 'root';
  $pass	  = '';

  $con = mysqli_connect($servidor, $usuario, $pass, $database);

  $sql = "SELECT * FROM `charlas`";
  $resp = $con->query($sql); 

  if ($resp->num_rows > 0) {
    while($row = $resp->fetch_assoc()) {
      ?>
       <div class="card">
                <div>
                  <h1><?php echo "- nombrecharla: " . $row["nombrecharla"]. " " . "<br>";?></h1>           
                </div>
            <div class="card__content">
              <a href="coments.php?id=<?php echo $row["id"] ?>" class="button v2">ver comentarios</a>
            </div>
      <?php
      }
    }
  else{
        echo "no hay charlas";
    }

    $con->close();
?>