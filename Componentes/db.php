<?php
    $host = 'localhost';
    $db   = 'hotel';
    $user = 'root';
    $password = 'Naranja90*';	              	    
    
    try {
        $con = new PDO("mysql:host=$host;dbname=$db;",$user,$password);
        echo "Entro";
    } catch(PDOException $e){
        die('Connection failed'.$e->getMessage());
    }
?>