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

    $correoUs = $_POST['correoUs'];

    $query = $con->prepare("SELECT * FROM HUESPED WHERE correo = '".$correoUs."'");
    $query->execute();
    $user1 = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach($user1 as $us){
        $idUsuario = $us['usuario_id']; 
    }


    $query = $con->prepare("SELECT * FROM HUESPED WHERE correo = '".$correo."'");
    $query->execute();
    $user2 = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach($user2 as $us){
        $idHuesped = $us['huesped_id']; 
    }

    $query2 = $con->prepare("INSERT INTO RESERVA (reserva_id,usuario_id,huesped_id,habitacion_id,check-in,check-out,numero_huespedes) 
                             VALUES (null,?,?,?,?,?,?)");
    //check out 12  in 1 a 3 
    $query2->bindParam(1,$idUsuario);
    $query2->bindParam(2,$idHuesped);
    $query2->bindParam(3,$numhabitacion);
    $query2->bindParam(4,$checkin);
    $query2->bindParam(5,$checkout);
    $query2->bindParam(6,$numhuesped);
    

    $query2->execute();

    $mensaje="Nombre:". $nombre." ".$apPat." ".$apMat." Su numero de reserva de habitacion es: ".$reserva_id;
    mail($correo,"Reservacion",$mensaje);

    header("location: ../Pantallas/envioFormulario.php");


?>