<?php
include_once './db.php';

$id = $_POST['id'];

$query = $con->prepare("DELETE FROM USUARIO WHERE id = ?");
$query->bindParam(1,$id);
$query->execute();

header("location: ../Pantallas/envioFormulario.php");



?>