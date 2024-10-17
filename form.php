<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia sesión </title>
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bodylogin">
    <header>
    </header>

  <div class="MOTHER-CONTAINER">
     <div class="form-box">
        <form class="form" action="insertintocoment.php" method="POST">
            <span class="title">Comenta</span>
            <span class="subtitle">Haz un comentario sobre la charla <br>puede ser una pregunta una idea ¡lo que sea!</span>
            <div class="form-container">
              <input name = "usuario"    type="text" class="input" placeholder="Usuario">
              <input name = "comentario" type="text" class="input" placeholder="Comentario">
              <input name = "fechayhora" type="text" class="input" placeholder="Fecha y hora">
            </div>
            <button>Envia tu comentario</button>
        </form>
    </div>
  </div>
  
</body>
</html>