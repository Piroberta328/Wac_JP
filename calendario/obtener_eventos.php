<?php
include 'config.php'; 


$sql="SELECT * FROM eventos"; 


if ($conexion->query($sql)->num_rows)
{ 


    $datos = array(); 


    $i=0; 


    $e = $conexion->query($sql); 

    while($row=$e->fetch_array()) 
    {
        
        $datos[$i] = $row; 
        $i++;
    }

    
        echo json_encode(
                array(
                    "success" => 1,
                    "result" => $datos
                )
            );

    }
    else
    {
        
        echo "No hay datos"; 
    }


?>
