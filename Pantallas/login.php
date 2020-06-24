<?php
    include_once '../Componentes/db.php';
    include_once '../Componentes/userFunctions.php';



    if( isset($_POST['email']) && isset($_POST['password'])){  /**Se quiere validar */

        $correo = $_POST['email'];
        $pass = $_POST['password'];

        if(userExists($correo,$pass,$con)){

            $_SESSION['user'] = $correo;
            include_once './menu.php';
            
        } else {
            $errorLogin ="Usuario y/o contraseña incorrecto";
            echo $errorLogin . "Regresa al formulario";
        }

    }

?>