<?php
    $servidor="db"; // porque es el nombre asociado en docker-compose
    $usuario="root";
    $clave= "pestillo";
    $bd="meme_db";
    try {
        // mysql es el gestor de Base de datos
        $conn = new PDO("mysql:host=$servidor;dbname=$bd", $usuario, $clave);
        // Establece los atributos de los reportes de errores
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Conexión satisfactoria";
    } catch(PDOException $e) {
        echo ( "Error de conexión: " . $e->getMessage());
        exit(0);
    }
