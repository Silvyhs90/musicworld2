<?php
session_start();
require __DIR__ . '/../../conn.php';

$query = $db->prepare('DELETE FROM canciones WHERE id_tema = :id_tema');
$query->execute([
    ':id_tema' => $_GET["id"]
]);


$_SESSION['alert'] = [
    'message' => 'La cancion se elimino con éxito',
    'type' => 'success'
];


header('location: /tp2/saucedo/admin/canciones/index.canciones.php');