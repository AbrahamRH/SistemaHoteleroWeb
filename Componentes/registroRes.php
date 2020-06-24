<?php
    include_once './db.php';
    /**Datos del huesped*/
    $nombre = $_POST['nombre'];
    $apPat = $_POST['apPat'];
    $apMat = $_POST['apMat'];
    $correo = $_POST['correo'];

    
    $query = $con->prepare("INSERT INTO HUESPED (nombre, apellido_paterno, apellido_materno, correo) VALUES (?,?,?,?)");
    $query->bindParam(1,$nombre);
    $query->bindParam(2,$apPat);
    $query->bindParam(3,$apMat);
    $query->bindParam(4,$correo);
/*
    $query = $con->prepare("INSERT INTO RESERVA (nombre, apellido_paterno, apellido_materno, correo) VALUES (?,?,?,?)");
    $query->bindParam(1,$nombre);
    $query->bindParam(2,$apPat);
    $query->bindParam(3,$apMat);
    $query->bindParam(4,$correo);

    $query->execute();
*/
?>