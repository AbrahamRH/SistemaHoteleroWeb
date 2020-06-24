<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/registroUsuario.css">
    <title>El descanso medieval</title>  
</head>
<body>
    <header>
        <div class="logo">EL DESCANSO MEDIEVAL</div>
    </header>
    <main>
        <form class="registroUsuario" action="../Componentes/registroUs.php" method="POST">
            <h2 class="titulo">Registro de Usuario</h2>
            <div class="contenedor">
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
                        <input type="email" name="email"class="form-control form-control form-control-lg" id="inputEmail" placeholder="Correo electrónico">
                    </div>
                </div>   
    
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña:</label>
                    <div class="col-sm-10">
                        <input type="password" name="contra" class="form-control form-control form-control-lg" id="inputPassword" placeholder="Contraseña">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="verPassword" class="col-sm-2 col-form-label">Verificar contraseña:</label>
                    <div class="col-sm-10">
                        <input type="password" name="contra" class="form-control form-control form-control-lg" id="verPassword" placeholder=" Verificar contraseña">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputCargo" class="col-sm-2 col-form-label">Cargo:</label>
                    <div class="col-sm-10">
                        <input type="text" name="cargo" class="form-control form-control form-control-lg" id="cargo" placeholder="Cargo">
                    </div>
                </div>   

                <div class="flex-container">
                    <button class="btn-registrar btn">Enviar</button>
                    <a href="./menu.php" class="btn-regresar btn">Regresar</a>
                </div>
            </div>


        </form>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>