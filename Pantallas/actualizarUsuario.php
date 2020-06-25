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
    <div class="container">
        <h2 class="titulo">Usuarios: </h2>
        <table class="table">
        <thead class="thead-dark">
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

    <form class="registroUsuario" action="../Componentes/registroUs.php" method="POST">
            <h2 class="titulo">Actualizar Usuario</h2>
            <div class="contenedor">
                <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">Introduzca el ID del empleado:</label>
                    <div class="col-sm-10">
                        <input type="text" name="id" class="form-control form-control form-control-lg" id="id" placeholder="ID">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                    <div class="col-sm-10">
                        <input type="text" name="nombre" class="form-control form-control-lg" id="nombre" placeholder="Nombre">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ApPaterno" class="col-sm-2 col-form-label">Apellido paterno:</label>
                    <div class="col-sm-10">
                        <input type="text" name="apPaterno" class="form-control form-control form-control-lg" id="ApPaterno" placeholder="Apellido paterno">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ApMaterno" class="col-sm-2 col-form-label">Apellido materno:</label>
                    <div class="col-sm-10">
                        <input type="text" name="apMaterno" class="form-control form-control form-control-lg" id="ApMaterno" placeholder="Apellido materno">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Correo electrónico:</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control form-control form-control-lg" id="inputEmail" placeholder="Correo electrónico">
                    </div>
                </div>   
    
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña:</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control form-control form-control-lg" id="inputPassword" placeholder="Contraseña">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputCargo" class="col-sm-2 col-form-label">Cargo:</label>
                    <div class="col-sm-10">
                        <input type="text" name="cargo" class="form-control form-control form-control-lg" id="cargo" placeholder="Cargo">
                    </div>
                </div>   

                <div class="flex-container">
                    <button class="btn-registrar btn">Actualizar</button>
                    <a href="./menu.php" class="btn-regresar btn">Regresar</a>
                </div>
            </div>
        </form>

        <form action="../Componentes/actualizarUsuario.php" method="POST" class="registroUsuario">
        <h2 class="titulo">Eliminar usuario:</h2>
            <div class="contenedor">
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Introduzca el ID del empleado:</label>
                    <div class="col-sm-10">
                        <input type="text" name="id" class="form-control form-control form-control-lg" id="id" placeholder="ID">
                    </div>
                </div>
                
                <div class="flex-container">
                    <button class="btn-registrar2 btn">Eliminar</button>
                    <a href="./menu.php" class="btn-regresar btn">Regresar</a>
                </div>
            </div>
        </form>

</body>
</html>