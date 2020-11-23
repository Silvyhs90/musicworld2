<?php
session_start();

require __DIR__ . '/../../conn.php';

if (isset($_FILES['portada']) && $_FILES['portada']['tmp_name']) {
    $destino = __DIR__ . '/../../../images/';
    $nombre = uniqid();
    $ext = pathinfo($_FILES['portada']['name'], PATHINFO_EXTENSION);
    $portada = "$nombre.$ext";
    move_uploaded_file($_FILES['portada']['tmp_name'], "$destino$portada");
}
else
{
    $portada = "";
}
$sql= 'INSERT INTO canciones (id_tema, descripcion, grupo, genero_id, portada, duracion, link) VALUES  (null, :descripcion, :grupo, :genero_id, :portada, :duracion, :link)';

$query = $db->prepare($sql);
$query->execute([
   ':descripcion' => $_POST["descripcion"],
   ':grupo' => $_POST["grupo"],
   ':genero_id' => $_POST["genero_id"],
   ':portada' => $portada,
   ':duracion' => $_POST["duracion"],
   ':link' => $_POST["link"]   
    ]);

$_SESSION['alert'] = [
    'message' => 'La cancion se agrego con éxito',
    'type' => 'success'
];
header('location: /tp2/saucedo/admin/canciones/index.canciones.php');

  