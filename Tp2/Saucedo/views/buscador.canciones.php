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
    <link rel="stylesheet" href="/tp2/saucedo/css/estilos.css">
    </head>
    <body class="cuerpo container">
    <h1 class="h2 centrado text-light mt-2">Canciones Encontradas</h1>
    <a href="/tp2/saucedo/index.php" class="btn btn-secondary py-3 mb-2"> Volver</a>            
    <div class="container bg-light">
        <div class="row">
             <?php foreach($canciones2 as $cancion2): ?>
                    <div class="col-md-6">
                        <div class="card mb-3 mt-3" style="max-width: 600px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                <img src="../../../images/<?php echo $cancion2->portada; ?>" class="card-img my-5" alt="<?php echo $cancion2->descripcion ?>">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $cancion2->descripcion ?></h5>
                                    <p class="card-text">Banda: <?php echo $cancion2->grupo ?></p>
                                    <p class="card-text"><small class="text-muted">Duracion: <?php echo $cancion2->duracion ?></small></p>
                                <p class="card-text"> Link 
                                    <a href="<?php echo $cancion2->link ?>" target="__blank"> <?php echo $cancion2->link ?></a>
                                </p>
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