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
    $query = $db->prepare('SELECT * from canciones  WHERE id_tema = :id_tema');

    $query->execute([
    ':id_tema' => $_POST["id_tema"]
   
]);

  $cancion = $query->fetch(PDO::FETCH_OBJ);
  $portada = $cancion->portada; 
}

$query = $db->prepare('UPDATE canciones SET descripcion=:descripcion, genero_id=:genero_id, portada = :portada, duracion = :duracion, link = :link, grupo = :grupo WHERE id_tema = :id_tema');

$query->execute([
    ':id_tema' => $_POST["id_tema"],
    ':descripcion' => $_POST["descripcion"],
    ':genero_id' => $_POST["genero_id"],
    ':portada' => $portada,
    ':duracion' => $_POST["duracion"],
    ':link' => $_POST["link"],
    ':grupo' => $_POST["grupo"]
]);

$_SESSION['alert'] = [
    'message' => 'La cancion se editó con éxito',
    'type' => 'success'
];


header('location: /tp2/saucedo/admin/canciones/index.canciones.php');