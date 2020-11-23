<?php
session_start();

require __DIR__ . '/../../conn.php';


$sql = 'SELECT * FROM admins WHERE email = "'.$_POST['email'].'"';

$query = $db->prepare($sql);
$query->execute();
$usuario = $query->fetch(PDO::FETCH_OBJ);


if($usuario && password_verify($_POST['password'],$usuario->password))
{
   $_SESSION['auth'] = true;
   $_SESSION['id'] = $usuario->id;
   header('location: /tp2/saucedo/login/home.php');

}
else
{
    $_SESSION['message'] = [
    'type' => 'danger',
    'text' => 'El usuario o la contraseña son incorrectos'
    ];
header('location: /tp2/saucedo/login/acceder.php');

}