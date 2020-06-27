<?php 
    include "../Componentes/db.php";
    $tipo=$_POST['tipo'];
    $query = $con->prepare("SELECT * FROM REGISTRO_PAGO");
    $query->execute();
    $ventas = $query->fetchAll(PDO::FETCH_ASSOC);


    $query = $con->prepare("SELECT * FROM RESERVA ");
    $query->execute();
    $reservas = $query->fetchAll(PDO::FETCH_ASSOC);

    $query = $con->prepare("SELECT * FROM HABITACION WHERE categoria='".$tipo."'");
    $query->execute();
    $habitaciones = $query->fetchAll(PDO::FETCH_ASSOC);
    

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/actualizar.css">
    <link rel="stylesheet" href="../CSS/registroUsuario.css">
    <title>El descanso medieval</title>
</head>
<body>
    <header>
        <div class="logo">EL DESCANSO MEDIEVAL</div>
    </header>
    <div class="registroUsuario">
        <h2 class="titulo">Reportes por habitación: </h2>
    </div>
    <div class="container">
        <h2 class="titulo">Ventas: </h2>
        <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID Venta</th>
                <th scope="col">ID Usuario</th>
                <th scope="col">ID Habitación</th>
                <th scope="col">Tipo</th>
                <th scope="col">Check-in</th>
                <th scope="col">Check-out</th>
                <th scope="col">Descripción</th>
                <th scope="col">Importe</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($ventas as $venta){ 
                foreach($reservas as $reserva){
                    if(($venta['reserva_id'] == $reserva['reserva_id'])){
                        $checkin  = $reserva['check-in'];
                        $checkout = $reserva['check-out'];
                        $habitacionId = $reserva['habitacion_id'];
                    }
                }
                foreach($habitaciones as $habitacion){
                    if($habitacion['habitacion_id'] == $habitacionId){
                        $tipoHabitacion = $habitacion['categoria'];
                    }
                }

                if(!($tipoHabitacion == $tipo)){
                    ;
                }else{

                
            ?>
            <tr>
            <th scope="row"><?php echo $venta["registro_id"]; ?></th>
            <td><?php echo $venta["usuario_id"]; ?></td>
            <td><?php echo $habitacionId; ?></td>
            <td><?php echo $tipoHabitacion; ?></td>
            <td><?php echo $checkin; ?></td>
            <td><?php echo $checkout; ?></td>
            <td><?php echo $venta["descripción"]; ?></td>
            <td><?php echo $venta["importe"]; ?></td>
            </tr>
            <?php } }  ?>
            
        </tbody>
        </table>
    </div>
    <div class="registroUsuario" action="../Componentes/actualizarHabitacion.php" method="POST">
        <div class="flex-container">
            <a href="./reporteVentas.php" class="btn-regresar btn">Regresar</a>
        </div>
    </div>

</body>
</html>