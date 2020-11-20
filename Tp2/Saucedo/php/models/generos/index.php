<?php
require __DIR__ . '/../../conn.php';

$sql = 'SELECT * FROM generos';
$query = $db->prepare($sql); //PDOStatement
$query->execute();
$generos = $query->fetchAll(PDO::FETCH_OBJ);
