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
    <?php echo $_SESSION['user'];?>
    <header>
        <div class="logo">EL DESCANSO MEDIEVAL</div>
        <a href="../Componentes/logout.php" class="logo btn">Cerrar sesion</a>
    </header>
    <main>
        <div class="flex-container">
            <a href="./registroUsuario.php">Registro usuario</a>
            <a href="#">Reporte ventas</a>
            <a href="./reporteHabitacion.php">Reporte de habitaciones</a>
            <a href="./actualizarUsuario.php">Actualización de usuarios</a>
            <a href="#">Actualización de servicios</a>
            <a href="#">Actualización de datos de habitaciones</a>
            <a href="./registroReservacion.php">Reservar una habitación</a>
        </div>
    </main>
</body>
</html>