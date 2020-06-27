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

//----------------------------------------------------------registro de reserva----------------------------------------------
    $numhabitacion = $_POST['numHab'];
    $checkin    =  $_POST['llegada'];
    $checkout   =  $_POST['salida'];
    $usuarioId  =  $_POST['usuarioId'];


    $query = $con->prepare("SELECT * FROM HUESPED WHERE correo = '".$correo."'");
    $query->execute();
    $users = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach($users as $user){
        $idHuesped = $user['huesped_id']; 
    }

    $query2 = $con->prepare("INSERT INTO `RESERVA` (`reserva_id`, `usuario_id`, `huesped_id`, `habitacion_id`, `check-in`, `check-out`, `numero_huespedes`)
                             VALUES (null,?,?,?,?,?,?)");


    $query2->bindParam(1,intval($usuarioId));
    $query2->bindParam(2,intval($idHuesped));
    $query2->bindParam(3,intval($numhabitacion));
    $query2->bindParam(4,$checkin);
    $query2->bindParam(5,$checkout);
    $query2->bindParam(6,intval($numhuesped));
    

    $query2->execute();


    header("location: ../Pantallas/registroPago.php"); //.....manda a pagina registro de pag

    //-------------------------------------------parte del registro de pago-------------------------------------------
    /*
    $descripcion = $_POST['descripcion'];
    $monto = $_POST['monto'];
    
    $query = $con->prepare("SELECT * FROM RESERVA WHERE  usuario_id= '".$idUsuario."' AND huesped_id= '".$idHuesped."' ");
    $query->execute();
    $user2 = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach($user2 as $us){
        $idReserva = $us['reserva_id'];
    }

    $query3 = $con->prepare("INSERT INTO REGISTRO_PAGO (registro_id,reserva_id,usuario_id,huesped_id,descripcion,importe) VALUES(null,?,?,?,?,?)");
    $query3->bindParam(1,intval($idReserva));
    $query3->bindParam(2,intval($idUsuario));
    $query3->bindParam(3,intval($idHuesped));
    $query3->bindParam(4,$descripcion);
    $query3->bindParam(5,intval($monto));
    
    $query3->execute();*/
    //$mensaje="Nombre:". $nombre." ".$apPat." ".$apMat." Su numero de reserva de habitacion es: ".$reserva_id;
    //mail($correo,"Reservacion",$mensaje);

    //header("location: ../Pantallas/envioFormulario.php");


?>