<?php
session_start();

require __DIR__ . '/../conn.php';

if (isset($_FILES['portada']) && $_FILES['portada']['tmp_name']) {
    $destino = __DIR__ . '/../../images/';
    $nombre = uniqid();
    $ext = pathinfo($_FILES['portada']['name'], PATHINFO_EXTENSION);
    $portada = "$nombre.$ext";
    move_uploaded_file($_FILES['portada']['tmp_name'], "$destino$portada");
}
else
{
    $portada = "";
}


$sql= 'INSERT INTO canciones (id_tema, descripcion, genero_id, portada) VALUES
 (null, :descripcion, :genero_id, :portada )';

$query = $db->prepare($sql);


$query->execute([
   ':descripcion' => $_POST["descripcion"],
   ':genero_id' => $_POST["genero_id"],
   ':portada' => $portada   
    ]);

$_SESSION['alert'] = [
    'message' => 'La CANCION se agrego con éxito',
    'type' => 'success'
];

header('location: /tp2/saucedo/admin/canciones/index.canciones.php');

  