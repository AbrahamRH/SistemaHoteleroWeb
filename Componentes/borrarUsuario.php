<?php
include_once './db.php';

$id = intval($_POST['id']);

$query = $con->prepare("DELETE FROM `USUARIO` WHERE `USUARIO`.`usuario_id` = ?");
$query->bindParam(1,$id);
$query->execute();

header("location: ../Pantallas/envioFormulario.php");



?>