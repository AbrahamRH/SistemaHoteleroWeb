<?php
    include_once './db.php';

    $id = intval($_POST['habitacionId']);
    $cat = $_POST['categoria'];
    $est = $_POST['estado'];
    $cos = floatval($_POST['costo']);

    $query = $con->prepare("SELECT * FROM HABITACION WHERE  habitacion_id= '".$id."' ");
    $query->execute();
    $habExists = $query->rowCount();

    if(($habExists) && ($cat == 'Estandar' || $cat == 'Estandar-frigobar' || $cat == 'Junior suite' ) && ($est == 'disponible' || $est == 'no disponible')){
        $query = $con->prepare("UPDATE `HABITACION` 
                                SET `habitacion_id` = '".$id."', `categoria` = '".$cat."', `estado` = '".$est."', `costo` = '".$cos."'
                                WHERE `HABITACION`.`habitacion_id` = ? ");
        $query->bindParam(1,$id);
        $query->execute();
        header("location: ../Pantallas/envioFormulario.php");
    }else{
        header("location: ../Pantallas/errorFormulario.php");
    }
    
    
        
?>