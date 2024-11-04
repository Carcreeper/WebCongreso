<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="comentsStyle.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="CartWhit">
  <div class="CartBlueImg">
     <div class="CartBlue">
      <?php
          $servidor = 'localhost';
          $database = 'app_congreso';
          $usuario  = 'root';
          $pass	  = '';

          $id = $_GET ["id"];

          $con = mysqli_connect($servidor, $usuario, $pass, $database);

          $sql = "SELECT * FROM `comentarios` WHERE id_charla =  ". $id;
          $resp = $con->query($sql); 

          if ($resp->num_rows > 0) {
            while($row = $resp->fetch_assoc()) {
                ?>
                    <div>
                        <p><?php echo $row["usuario"]?>     </p>
                        <p><?php echo $row["comentario"]?>  </p>
                        <p><?php echo $row["fechayhora"]?>  </p>
                    </div>    
              <?php
              }
            }
          else{
            echo "no hay charlas";
            }
        ?>
      </div>
  </div>
</div>
</body>
</html>