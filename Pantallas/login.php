<?php
    include_once '../Componentes/db.php';

    $correo = $_POST['email'];
    $pass = $_POST['password'];


    $query = $con->prepare("SELECT * FROM USUARIO WHERE correo = '".$correo."' and password = '".$pass."'");  
    $query->execute();
    $userExists = $query->fetchColumn();

    if($userExists == 1)
    {
       include_once './menu.php';
    }
    else if ($userExists == 0) 
    {
        ?>
         <script>alert("Usuario o contraseña incorrectos");</script>
        <?php
    }
?>