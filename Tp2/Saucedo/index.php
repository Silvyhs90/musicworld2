<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index MusicWorld</title>
    <script src="javascript/funciones.js" language="Javascript"></script> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body data-spy="scroll" data-target="#navbarResponsive" class="bg-secondary titulo cuerpo container">
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top ">
        <div class="container aling-content-end">
        <img src="css/imagenes/radio.svg" width="55" alt="logo">
    <a class="navbar-brand" href="index.php"> PRODUCCION WEB - PARCIAL 2 </a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
           </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/tp2/saucedo/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tp2/saucedo/views/canciones.php">Canciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tp2/saucedo/views/generos.php">Generos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tp2/saucedo/login/acceder.php">LogIn</a>
                    </li>
              </ul>
            </div>
        </div>
    </nav>

    <header class="encabezado">

    <h1 class="centrado text-light">Parcial 2 - Produccion Web 2 </h1>

    </header>
                        
    <h2 class="mt-5 h4 ml-5 centrado text-light"> Buscador de canciones </h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="GET" action="/tp2/saucedo/php/controllers/buscador/buscador.controller.php" id="buscador">
                    <div class="form-group">
                        <input type="text" class="form-control" id="cancion" name="cancion" value="" placeholder="Buscar...">
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm" value=""> Buscar</button>
                    </div>
                    <div class="form-group">
                    <input type="button" class="btn btn-danger btn-sm" onclick="limpiarFormulario()" value="Borrar todo">
                     </div> 
                </form>
            </div>
        </div>
    </div>
    <footer class="container bg-light pie mt-3 text-dark">
     <h2 class="h3">Alumna:</h3>
      <p class="h5">Silvina Lorena Saucedo</p>
      <h2 class="h3">Dia y Comision: <h3>
    <p class="h5"> Lunes - turno Tarde</p>
    <h2 class="h3">Profesor: <h3>
    <p class="h5"> Maximiliano YAÑEZ BORGHI </p>
  </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>