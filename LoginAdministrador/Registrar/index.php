<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/registro.css">
  <title>Formulario Registro</title>
</head>
<body>
  <form class="form-register" action="../Registrar/Controlador/controlador_registrar.php" method="post">
  <?php
    include("../Registrar/db.php");
    include("../Registrar/Controlador/controlador_registrar.php");
    ?>
    <h4>Formulario Registro</h4>
    <input class="controls" type="text" placeholder="ingrese su usuario" name="usuario" required>
    <input class="controls" type="text" placeholder="ingrese sus nombres" name="nombres" required>
    <input class="controls" type="text" placeholder="ingrese sus apellidos" name="apellidos"required>
    <input class="controls" type="number" placeholder="ingrese su numero de contacto" name="telefono"required>
    <input class="controls" type="email" placeholder="ingrese su correo" name="correo"required>
    <input class="controls" type="password" placeholder="ingrese su contraseña" name="contrasena"required>

    <input class="botons" type="submit" value="Registrar" name="registro" >

    <p><a href="../includes/login.php">Ya tengo Cuenta</a></p>

  </form>
 
</body>
</html>