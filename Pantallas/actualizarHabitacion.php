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
    <link rel="stylesheet" href="../CSS/actualizar.css">
    <link rel="stylesheet" href="../CSS/registroUsuario.css">
    <title>El descanso medieval</title>
</head>
<body>
    <header>
        <div class="logo">EL DESCANSO MEDIEVAL</div>
    </header>
    

    <form class="registroUsuario" action="../Componentes/actualizarHab.php" method="POST">
            <h2 class="titulo">Actualizar Habitacion</h2>
            <div class="contenedor">
                <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">Introduzca el ID de la habitacion que desea modificar:</label>
                    <div class="col-sm-10">
                        <input type="text" name="habitacionIdViejo" class="form-control form-control form-control-lg" id="id habitacion" placeholder="habitacionId">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="nombre" class="col-sm-2 col-form-label">Categoria:</label>
                    <div class="col-sm-10">
                        <input type="text" name="categoria" class="form-control form-control-lg" id="categoria" placeholder="categoria">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ApPaterno" class="col-sm-2 col-form-label">Estado:</label>
                    <div class="col-sm-10">
                        <input type="text" name="estado" class="form-control form-control form-control-lg" id="Estado" placeholder="Estado">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ApMaterno" class="col-sm-2 col-form-label">Costo:</label>
                    <div class="col-sm-10">
                        <input type="text" name="costo" class="form-control form-control form-control-lg" id="costo" placeholder="costo">
                    </div>
                </div>
                

                <div class="flex-container">
                    <button class="btn-registrar btn">Actualizar</button>
                    <a href="./menu.php" class="btn-regresar btn">Regresar</a>
                </div>
            </div>
        </form>
</body>
</html>    