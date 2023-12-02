<?php
    $hostname = "localhost";
    $bancodedados = "magic";
    $usuario = "root";
    $senha = "";

    $conn = new mysqli($hostname, $usuario, $senha, $bancodedados);
    // Check connection
    if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
    }else{
        return $conn;
    }
?>