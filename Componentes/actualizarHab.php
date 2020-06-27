<?php
    include_once './db.php';

    $idV = intval($_POST['habitacionIdViejo']);
    $cat = $_POST['categoria'];
    $est = $_POST['estado'];
    $cos = floatval($_POST['costo']);
    
    $query = $con->prepare("UPDATE `HABITACION` 
                            SET
                            `categoria` = '".$cat."',
                            `estado` = '".$est."', 
                            `costo` = '".$cos."',
                            WHERE `HABITACION`.`habitacion_id` = ? ");
    $query->bindParam(1,$idV);
    $query->execute();
    header("location: ../Pantallas/envioFormulario.php");
        
?>