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
        <form class="registroUsuario" action="../Componentes/registroRes.php" method="POST">
        <h2 class="titulo">Registro del huesped y Registro de la Reservación</h2> 
            <div class="contenedor">
                <div class="form-group row">
                    <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="nombre" placeholder="Nombre" name="nombre">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ApPaterno" class="col-sm-2 col-form-label">Apellido paterno:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control form-control-lg" id="ApPaterno" placeholder="Apellido paterno" name="apPat">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ApMaterno" class="col-sm-2 col-form-label">Apellido materno:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control form-control-lg" id="ApMaterno" placeholder="Apellido materno" name="apMat">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Correo electrónico:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control form-control form-control-lg" id="inputEmail" placeholder="Correo electrónico" name="correo">
                    </div>
                </div>   
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">ID usuario que va a registrar:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control form-control-lg" id="inputEmailUs" placeholder="Usuario ID" name="usuarioId">
                    </div>
                </div> 
                <div class="form-group row">
                    <label for="check-in" class="col-2 col-form-label" >Fecha de llegada: </label>
                    <div class="col-10">
                        <input class="form-control form-control-lg" type="datetime-local" value="2011-08-19T13:45:00" id="check-in" name="llegada">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="check-out" class="col-2 col-form-label">Fecha de salida: </label>
                    <div class="col-10">
                        <input class="form-control form-control-lg" type="datetime-local" value="2011-08-19T13:45:00" id="check-out" name="salida">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Numero_huespedes" class="col-2 col-form-label">Numero de huespedes: </label>
                    <div class="col-10">
                        <input class="form-control form-control-lg" type="text" id="Numero_huespedes" name="numHues">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Numero de habitacion" class="col-2 col-form-label">Numero de habitacion</label>
                    <div class="col-10">
                        <input class="form-control" type="number" value="104" id="example-number-input" name="numHab">
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