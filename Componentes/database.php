<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'hotel';
    //mqUOaq7q9F17Go6w

    try{
        $con = new PDO("mysql:host=$server;dbname=$database", $username, $password);
    } catch(PDOException $e) {
        die('Connection Failed: '. $e->getMessage());
    }
    
?>