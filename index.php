<?php
    include_once './Componentes/db.php';

    session_start();


    if (isset($_SESSION['usuario_id'])) {
        $records = $conn->prepare('SELECT usuario_id, correo, password FROM USUARIO WHERE id = :id');
        $records->bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $user = null;

        if (count($results) > 0) {
        $user = $results;
        }
    }

?>
