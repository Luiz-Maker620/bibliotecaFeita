<?php
    $hostname = 'localhost';
    $senha = '';
    $usuario = 'root';
    $nomebanco = 'php';

    $mysqli = new mysqli ($hostname, $senha, $usuario, $nomebanco);
    
    if ($mysqli->connect_errno)  {
        echo 'falha ao conectar'; $mysqli->connect_errno;
        } else {
        echo 'conectado';
    }



?>