<?php

    include_once './db.php';
    include_once './registroRes.php';
    
    $descripcion = $_POST['descripcion'];
    $monto = $_POST['monto'];
    
    $query = $con->prepare("SELECT * FROM RESERVA WHERE  usuario_id= '".$usuarioId."' AND huesped_id= '".$idHuesped."' ");
    $query->execute();
    $user2 = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach($user2 as $us){
        $idReserva = $us['reserva_id'];
    }

    $query3 = $con->prepare("INSERT INTO REGISTRO_PAGO (registro_id,reserva_id,usuario_id,huesped_id,descripción,importe) VALUES(null,?,?,?,?,?)");
   
    /* $query3->bindParam(1,intval('1'));
    $query3->bindParam(2,intval('1'));
    $query3->bindParam(3,intval('1'));
    $query3->bindParam(4,'pago de habitacion hotel');
    $query3->bindParam(5,floatval('500'));
    */
    $query3->bindParam(1,intval($idReserva));
    $query3->bindParam(2,intval($usuarioId));
    $query3->bindParam(3,intval($idHuesped));
    $query3->bindParam(4,$descripcion);
    $query3->bindParam(5,floatval($monto));
    
    $query3->execute();

    //echo ($idUsuario);
   // echo ($idHuesped);
    header("location: ../Pantallas/envioFormulario.php");
    
    ?> 
