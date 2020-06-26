<?php
    include_once './db.php';

    $id = intval($_POST['id']);
    $nombre = $_POST['nombre'];
    $apPat = $_POST['apPaterno'];
    $apMat = $_POST['apMaterno'];
    $correo = $_POST['email'];
    $pass = $_POST['password'];
    $cargo = $_POST['cargo'];


    $query = $con->prepare("UPDATE `USUARIO` 
                            SET
                            `nombre` = '".$nombre."',
                            `apellido_paterno` = '".$apPat."',
                            `apellido_materno` = '".$apMat."', 
                            `correo` = '".$correo."', 
                            `password` = '".$pass."', 
                            `cargo` = '".$cargo."' 
                            WHERE `USUARIO`.`usuario_id` = ?");



    $query->bindParam(1,$id);
    $query->execute();

    header("location: ../Pantallas/envioFormulario.php");
    /* UPDATE `USUARIO` SET `usuario_id` = '8', `nombre` = 'Ana A', `apellido_paterno` = 'Mendoza A', `apellido_materno` = 'Millan A', `correo` = 'ss@gmail.comA', `password` = '1234A', `cargo` = 'recepcionista' WHERE `USUARIO`.`usuario_id` = 6; */

        
?>