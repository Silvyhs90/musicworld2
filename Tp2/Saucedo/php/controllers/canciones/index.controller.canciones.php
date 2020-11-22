<?php

require __DIR__ . '/../../conn.php';

$query = $db->prepare('SELECT * FROM canciones');
$query->execute();

$canciones = $query->fetchAll(PDO::FETCH_OBJ);

$query = $db->prepare('SELECT * FROM generos');
$query->execute();

$generos = $query->fetchAll(PDO::FETCH_OBJ);
