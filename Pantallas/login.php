<?php
    include_once '../Componentes/db.php';
    include_once '../Componentes/userFunctions.php';



    if( isset($_POST['email']) && isset($_POST['password'])){  /**Se quiere validar */

        $correo = $_POST['email'];
        $pass = $_POST['password'];

        if(userExists($correo,$pass,$con)){
            session_start();
            

            $query = $con->prepare("SELECT * FROM USUARIO WHERE  correo= '".$correo."' ");
            $query->execute();
            
            $users = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($users as $us){
                $cargo = $us['cargo'];
                $id = $us['usuario_id'];
            }
            
            $_SESSION['cargo'] = $cargo;
            $_SESSION['id'] = $id;
            
                
            include_once './menu.php';
            
        } else {
            include_once './errorSesion.php';
        }

    }

?>