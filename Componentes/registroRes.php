<?php
    include_once './db.php';
    /**Datos del huesped*/
    $nombre = $_POST['nombre'];
    $apPat = $_POST['apPat'];
    $apMat = $_POST['apMat'];
    $correo = $_POST['correo'];
    

    
    $query = $con->prepare("INSERT INTO HUESPED (huesped_id,nombre, apellido_paterno, apellido_materno, correo) VALUES (null,?,?,?,?)");
    $query->bindParam(1,$nombre);
    $query->bindParam(2,$apPat);
    $query->bindParam(3,$apMat);
    $query->bindParam(4,$correo);

    $query->execute();

    $numhabitacion=$_POST['numHab'];
    $checkin= $_POST['llegada'];
    $checkout=$_POST['salida'];
    $numhuesped=$_POST['numHues'];
    


    $query2 = $con->prepare("INSERT INTO RESERVA (reserva_id,usuario_id,huesped_id,habitacion_id,check-in,check-out,numero_huespedes) VALUES (null,null,null,?,?,?,?)");
    //check out 12  in 1 a 3 
    
    $query2->bindParam(1,$numhabitacion);
    $query2->bindParam(2,$checkin);
    $query2->bindParam(3,$checkout);
    $query2->bindParam(4,$numhuesped);
    

    $query2->execute();

?>