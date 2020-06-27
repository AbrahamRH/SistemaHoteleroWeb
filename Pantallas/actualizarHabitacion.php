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
        <?php session_start(); ?>
    </header>
    

    <form class="registroUsuario needs-validation " action="../Componentes/actualizarHab.php" method="POST" >
            <h2 class="titulo">Actualizar habitación</h2>
            <div class="contenedor">
                <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">ID de la habitacion que desea modificar:</label>
                    <div class="col-sm-10">
                        <input type="text" name="habitacionId" class="form-control form-control form-control-lg" id="id habitacion" placeholder="ID de la habitacion" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="categoria" class="col-sm-2 col-form-label">Categoria:</label>
                    <div class="col-sm-10">
                        <input type="text" name="categoria" class="form-control form-control form-control-lg" id="categoria" placeholder="Categoria" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="estudiar" class="col-sm-2 col-form-label">Estado:</label>
                    <div class="col-sm-10">
                        <input type="text" name="estado" class="form-control form-control form-control-lg" id="Estado" placeholder="Estado" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="costo" class="col-sm-2 col-form-label">Costo:</label>
                    <div class="col-sm-10">
                        <input type="number" name="costo" class="form-control form-control form-control-lg" id="costo" placeholder="Costo" required>
                    </div>
                </div>
                

                <div class="flex-container">
                    <button class="btn-registrar btn">Actualizar</button>
                    <a href="./menu.php" class="btn-regresar btn">Regresar</a>
                </div>
            </div>
        </form>
        <script>
    // Disable form submissions if there are invalid fields
        (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
            });
        }, false);
        })();
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>    