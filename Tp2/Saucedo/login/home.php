
<?php

session_start();
// preguntar si no esta seteada o no es verdadera, redirijo hacia LogIn
if(!isset($_SESSION['auth']) || !$_SESSION['auth'])
{
    header('location: /tp2/saucedo/login/acceder.php');
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index canciones Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/saucedo/css/estilos.css">
</head>
<style>
        body {
            content: "";
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background-image: url(images/fondo_admin.jpg);
            filter: grayscale(40%);
        }
    </style>

<body data-spy="scroll" data-target="#navbarResponsive" class="bg-dark ">

    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container aling-content-end">
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/tp2/saucedo/index.php">LogOut</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tp2/saucedo/admin/canciones/index.canciones.php"> Administrar Canciones</a>
                    </li>
            </ul>
            </div>
        </div>
    </nav>
    <header>
                <h1 class="text-light encabezado"> Admin Home </h1>
    </header>

    </body>
    </html>