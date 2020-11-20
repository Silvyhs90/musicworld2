<?php require '../php/models/canciones/index.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusicWorld</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="/saucedo/css/estilos.css">
</head>
<body class="cuerpo container">
    <h1 class="centrado">Lista</h1>
    <a href="/tp2/saucedo/index.php" class="btn btn-secondary py-3 mb-2"> Volver</a>            
    <div class="container bg-light">
        <div class="row">
             <?php foreach($canciones as $cancion): ?>
                    <div class="col-md-6">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                <img src="../../saucedo/images/<?php echo $cancion->portada; ?>" class="card-img" alt="<?php echo $cancion->descripcion ?>">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $cancion->descripcion ?></h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Estreno: <?php echo $cancion->duracion ?></small></p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
    </div>

    
</body>
</html>