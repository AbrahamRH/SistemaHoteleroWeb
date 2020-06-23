<?php
    include_once './Componentes/connectionDB.php';
    include_once './Componentes/User.php';
    include_once './Componentes/UserSession.php';

    $userSession = new UserSession();
    $user = new User();

    if(isset($_SESSION['nombre'])){
        echo "Hay sesión";
    }else if(isset($_POST['correo']) && isset($_POST['password'])){
        echo "Validacion log in";
    }else{
        include_once './Pantallas/login.php';
    }
?>
