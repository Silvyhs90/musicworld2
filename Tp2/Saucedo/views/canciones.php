<?php require __DIR__ . '/../php/models/canciones/index.php'; ?>
<?php require __DIR__ . '/../php/models/generos/index.php'; ?>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    </head>
    <body class="cuerpo container">
    <h1 class="h2 text-light centrado mt-5"> Lista canciones <span class="fa fa-music"></span></h1>
    <a href="/tp2/saucedo/index.php" class="btn btn-secondary my-2"><span class="fa fa-arrow-circle-left"></span></a>            
    <div class="container bg-secondary">
        <div class="row">
             <?php foreach($canciones as $cancion): ?>
                    <div class="col-md-6">
                        <div class="card mb-3 mt-3" style="max-width: 600px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                <img src="../../saucedo/images/<?php echo $cancion->portada; ?>" class="card-img my-5 ml-2" alt="<?php echo $cancion->descripcion ?>">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $cancion->descripcion ?></h5>
                                    <p class="card-text">Banda: <?php echo $cancion->grupo ?></p>
                                    <p class="card-text"><small class="text-muted">Duracion: <?php echo $cancion->duracion ?></small></p>
                                <p class="card-text"> Link 
                                    <a href="<?php echo $cancion->link ?>" target="__blank"> <?php echo $cancion->link ?></a>
                                </p>
                                <p class="card-text"><small class="text-muted"> Genero
                                <?php foreach($generos as $genero): ?>
                                <?php if($cancion->genero_id == $genero->id)
                                    echo $genero->nombre ?> 
                                  <?php endforeach; ?>
                                  </small>
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