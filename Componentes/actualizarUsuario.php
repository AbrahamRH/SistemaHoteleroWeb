<?php
    include_once './db.php';

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apPaterno = $_POST['apPaterno'];
    $apMaterno = $_POST['apMaterno'];
    $correo = $_POST['email'];
    $pass = $_POST['password'];
    $cargo = $_POST['cargo'];

    $query = $con->prepare("UPDATE USUARIO set 
                                    nombre = ?,
                                    apellido_paterno = ?,
                                    apellido_materno = ?,
                                    correo = ?,
                                    password = ?,
                                    cargo = ?
                            WHERE   usuario_id = ?");

    $query->bindParam(1,$nombre);
    $query->bindParam(2,$apPat);
    $query->bindParam(3,$apMat);
    $query->bindParam(4,$correo);
    $query->bindParam(5,$pass);
    $query->bindParam(6,$cargo);
    $query->bindParam(7,$id);

    $query->execute();
    
    header("location: ../Pantallas/envioFormulario.php");

        
?>