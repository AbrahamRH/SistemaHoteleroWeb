<?php
include_once './db.php';
session_start();
$id = intval($_POST['id']);


if($id == $_SESSION['id']){
   header("location: ../Pantallas/errorFormulario.php");
}else{

   $query = $con->prepare("DELETE FROM `USUARIO` WHERE `USUARIO`.`usuario_id` = ?");
   $query->bindParam(1,$id);
   $query->execute();

    header("location: ../Pantallas/envioFormulario.php");
}


?>