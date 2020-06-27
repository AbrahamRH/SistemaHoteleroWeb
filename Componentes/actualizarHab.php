<?php
    include_once './db.php';

    $id = intval($_POST['habitacionId']);
    $cat = $_POST['categoria'];
    $est = $_POST['estado'];
    $cos = floatval($_POST['costo']);
    
    $query = $con->prepare("UPDATE `HABITACION` 
                            SET `habitacion_id` = '".$id."', `categoria` = '".$cat."', `estado` = '".$est."', `costo` = '".$cos."'
                            WHERE `HABITACION`.`habitacion_id` = ? ");
    $query->bindParam(1,$id);
    $query->execute();

    
    header("location: ../Pantallas/envioFormulario.php");
        
?>