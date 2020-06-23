<?php echo 'hola';?>

<?php
    require './Componentes/UserSession.php';
    require './Componentes/User.php';

    $userSession = new UserSession();
    $user = new User();

    if(isset($_SESSION['nombre'])){
        echo "Hay sesión";
    }else if(isset($_POST['correo']) && isset($_POST['password'])){
        echo "Validacion log in";
    }else{
        echo "Login";
    }
?>
