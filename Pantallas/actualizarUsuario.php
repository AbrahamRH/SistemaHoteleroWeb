<?php 
    include "../Componentes/db.php";
    $query = $con->prepare("SELECT * FROM USUARIO");
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/menu.css">
    <title>El descanso medieval</title>
</head>
<body>
    <header>
        <div class="logo">EL DESCANSO MEDIEVAL</div>
        <a href="../Componentes/logout.php" class="logo btn">Cerrar sesion</a>
    </header>
    <h2>Usuarios: </h2>
    <div class="container">
        <table class="table">
        <thead class="thead-light">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Cargo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($usuarios as $user){ ?>
            <tr>
            <th scope="row"><?php echo $user['usuario_id']; ?></th>
            <td><?php echo $user['nombre']; ?></td>
            <td><?php echo $user['apellido_paterno']. " ". $user['apellido_materno']; ?></td>
            <td><?php echo $user['cargo']; ?></td>
            </tr>
            <?php }?>
        </tbody>
        </table>
    </div>

</body>
</html>