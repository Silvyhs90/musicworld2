<?php

require __DIR__ . '/../conn.php';

$query = $db->prepare('SELECT * FROM canciones WHERE id_tema = :id_tema');
$query->execute([
    ':id_tema' => $_GET["id"]
]);

$cancion = $query->fetch(PDO::FETCH_OBJ);

$query = $db->prepare('SELECT * FROM generos');
$query->execute();

$generos = $query->fetchAll(PDO::FETCH_OBJ);