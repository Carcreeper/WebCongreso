<?php
  $servidor = 'localhost';
  $database = 'app_congreso';
  $usuario  = 'root';
  $pass	  = '';

  $con = mysqli_connect($servidor, $usuario, $pass, $database);

  $sql = "SELECT * FROM `charlas` WHERE";
  $resp = $con->query($sql); 

  if ($resp -> num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      ?>
       <div class="card">
                <div>
                  <h1><?php echo "id: " . $row["id"]. " - nombrecharla: " . $row["nombrecharla"]. " " . "<br>";?></h1>           
                </div>
            <div class="card__content">
              <a href="" class="button v2">ver comentarios</a>
            </div>

        
      <?php
      }
    }
  else{
        echo "no hay charlas";
    }

    $con->close();
?>