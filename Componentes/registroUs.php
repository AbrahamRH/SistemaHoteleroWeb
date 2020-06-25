<?php
    include_once './db.php';
    $nombre = $_POST['nombre'];
    $apPat = $_POST['apPaterno'];
    $apMat = $_POST['apMaterno'];
    $correo = $_POST['email'];
    $pass = $_POST['contra'];
    $cargo = $_POST['cargo'];

    $query = $con->prepare("INSERT INTO USUARIO (usuario_id,nombre,apellido_paterno,apellido_materno,correo,password,cargo) VALUES(null,?,?,?,?,?,?)");
    $query->bindParam(1,$nombre);
    $query->bindParam(2,$apPat);
    $query->bindParam(3,$apMat);
    $query->bindParam(4,$correo);
    $query->bindParam(5,$pass);
    $query->bindParam(6,$cargo);
    $query->execute();
    
    header("location: ../Pantallas/envioFormulario.php");
    
?> 
