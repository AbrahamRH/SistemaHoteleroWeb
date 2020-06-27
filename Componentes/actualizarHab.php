<?php
    include_once './db.php';

    $idV = intval($_POST['habitacionIdViejo']);
    $idN = intval($_POST['habitacionIdNuevo']);
    $cat = $_POST['categoria'];
    $est = $_POST['estado'];
    $cos = floatval($_POST['costo']);
    


    $query = $con->prepare("UPDATE `HABITACION` 
                            SET
                            `habitacion_id` = '".$idN."',
                            `categoria` = '".$cat."',
                            `estado` = '".$est."', 
                            `costo` = '".$cos."', 
                            WHERE `habitacion_id` = ?");



    $query->bindParam(1,$idV);
    $query->execute();

    header("location: ../Pantallas/envioFormulario.php");
    /* UPDATE `USUARIO` SET `usuario_id` = '8', `nombre` = 'Ana A', `apellido_paterno` = 'Mendoza A', `apellido_materno` = 'Millan A', `correo` = 'ss@gmail.comA', `password` = '1234A', `cargo` = 'recepcionista' WHERE `USUARIO`.`usuario_id` = 6; */

        
?>