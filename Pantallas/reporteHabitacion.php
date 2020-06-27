<?php 
    include "../Componentes/db.php";
    $query = $con->prepare("SELECT * FROM HABITACION");
    $query->execute();
    $habitaciones = $query->fetchAll(PDO::FETCH_ASSOC);

    $query = $con->prepare("SELECT * FROM RESERVA");
    $query->execute();
    $reservas = $query->fetchAll(PDO::FETCH_ASSOC);
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
    <div class="container">
        <h2 class="titulo">Habitaciones: </h2>
        <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">TIpo</th>
                <th scope="col">Estado</th>
                <th scope="col"></th>
                <th scope="col">Huesped ID</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($habitaciones as $habitacion){ 
                $huesped = 'null';
                foreach($reservas as $reserva){
                    if($reserva['habitacion_id'] == $habitacion['habitacion_id']){
                        $huesped = $reserva['huesped_id'];
                    }
                }
            ?>
            <tr>
            <th scope="row"><?php echo $habitacion['habitacion_id']; ?></th>
            <td><?php echo $habitacion['categoria']; ?></td>
            <td><?php echo $habitacion['estado']; ?></td>
            <?php
            if ($huesped =='null'){
                echo '<td style="background-color:#8CC154;"></td>';
            }
            else {
                echo '<td style="background-color:#C42030;"></td>';
            }
            ?>
            <td><?php echo $huesped; ?></td>
            </tr>
            <?php }?>
        </tbody>
        </table>
    </div>
    <form class="registroUsuario" action="../Componentes/actualizarHabitacion.php" method="POST">
        <div class="flex-container">
            <button class="btn-registrar btn">Enviar</button>
            <a href="./menu.php" class="btn-regresar btn">Regresar</a>
        </div>
    </form>

</body>
</html>