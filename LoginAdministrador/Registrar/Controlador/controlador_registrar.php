<?php
$servername = "localhost";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basedatos_jp";

$conexion = new mysqli($servername, $username, $password, $dbname);

//Validacion de datos en los campos de formulario
if (!empty($_POST["registro"])) {
    if(empty($_POST["nombres"]) or empty($_POST["apellidos"]) or empty($_POST["telefono"]) or empty($_POST["correo"])  or empty($_POST["contrasena"]  or empty($_POST["usuario"]) )) {
        echo '<script>alert("Los campos están vacíos")</script>';
    }else{
        $nombres = $_POST ["nombres"];
        $apellidos = $_POST ["apellidos"];
        $telefono = $_POST ["telefono"];
        $correo = $_POST ["correo"];
        $contrasena = $_POST ["contrasena"];
        $usuario = $_POST ["usuario"];
        $sql = $conexion -> query ("insert into gestion_usuario (nombres,apellidos,telefono,contrasena,correo,usuario)values('$nombres','$apellidos','$telefono','$contrasena','$correo','$usuario')");
        if ($sql == 1){
            
            echo '<script>alert("Usuario registrado correctamente")</script>';
            }else{
                echo '<script>alert(" Error al registrar")</script>';
        }
    }   
}

?>