<?php 
    include "../Componentes/db.php";
    $query = $con->prepare("SELECT * FROM HABITACION");
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
    <div class="container">
        <h2 class="titulo">Habitaciones: </h2>
        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">TIpo</th>
            <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($habitaciones as $habitacion){ ?>
            <tr>
            <th scope="row"><?php echo $habitacion['habitacion_id']; ?></th>
            <td><?php echo $habitacion['categoria']; ?></td>
            <td><?php echo $habitacion['estado']; ?></td>
            </tr>
            <?php }?>
        </tbody>
        </table>
    </div>
    <div class="flex-container">
        <a href="./menu.php" class="btn-regresar btn">Regresar</a>
    </div>

</body>
</html>