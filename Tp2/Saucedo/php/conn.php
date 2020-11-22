<?php
    try 
    {
        $db = new PDO('mysql:dbname=musicworld;host=localhost;port=3306;charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) 
    {
    echo "No hay conexion con la base de datos";
    exit;
    }