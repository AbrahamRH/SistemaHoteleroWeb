<?php
    include './db.php';

    function userExists($correo,$pass,$con){
        $query = $con->prepare("SELECT * FROM USUARIO WHERE correo = '".$correo."' and password = '".$pass."'");  
        $query->execute();
        $userExists = $query->rowCount();
        
        if($userExists){
            return true;
        }else{
            return false;
        }
    }

    function getAllUsers($con){
        return $con->prepare("SELECT * FROM USUARIO");
    }
?>