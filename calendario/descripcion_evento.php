<?php

    

    include 'config.php'; 

    include 'funciones.php';

    $id  = evaluar($_GET['id']);

    $bd  = $conexion->query("SELECT * FROM eventos WHERE id=$id");


    $row = $bd->fetch_assoc();


    $titulo=$row['title'];

    $evento=$row['body'];

    $inicio=$row['inicio_normal'];

    $final=$row['final_normal'];

if (isset($_POST['eliminar_evento'])) 
{
    $id  = evaluar($_GET['id']);
    $sql = "DELETE FROM eventos WHERE id = $id";
    if ($conexion->query($sql)) 
    {
        echo "Evento eliminado";
    }
    else
    {
        echo "El evento no se pudo eliminar";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<center>
    <center><h1>EVENTOS PENDIENTES</h1></center>
    <br>
    <br>

<head>
	<meta charset="UTF-8">
	<title>Eventos</title>



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>
    <h2>Título:</h2>
	<h3><font color="3B3B3B"><?=$titulo?></font></h3>
    <br>
    <h3>Evento:</h3>
    <p><?=$evento?></p>
	<hr>
    <h3><font color="3B3B3B">El Evento Es:</h3>
    <b>Fecha inicio:</b> <?=$inicio?>
    <br>
    <br>
    <br>
    <h3><font color="3B3B3B">El Evento Termina El:</h3>
    <b>Fecha termino:</b> <?=$final?>
</body>
<br>
<br>
<form action="" method="post">
    <button type="submit" class="btn btn-danger" name="eliminar_evento">Eliminar</button>

</form>
<br>
<form action="index.php" method="post">
    <button type="submit" class="btn btn-success" >Volver</button>
    
</form>
<br>
</center>
</html>
