    <?php require __DIR__ . '../../../php/controllers/canciones/edit.controller.canciones.php'; ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Cancion</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="/tp2/saucedo/css/estilos.css">
    </head>
    <body class="fondo2 container">
    <div class="container py-4">
        <h1 class="h3"> Editar Cancion <span class="fa fa-edit"></span></h1>
            <div class="row">
            <a href="/tp2/saucedo/admin/canciones/index.canciones.php" class="btn btn-secondary my-2"><span class="fa fa-arrow-circle-left"></span></a>            
                <div class="col-md-12 bg-light">
                <form action="/tp2/saucedo/php/controllers/canciones/update.controller.canciones.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="descripcion">Nombre Cancion</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $cancion->descripcion ?>">
                        </div>
                        <div class="form-group">
                            <label for="genero_id">Genero de la cancion</label>
                            <select name="genero_id" id="genero_id" class="py-3">
                             <?php foreach($generos as $genero): ?>
                            <option value="<?php echo $genero->id ?>"> <?php echo $genero->nombre ?> </option>
                             <?php endforeach; ?>
                           </select>
                        </div>
                        <div class="form-group">
                            <label for="portada">Foto Album</label>
                            <input type="file" class="form-control" id="portada" name="portada" value="">
                        </div>
                        <div class="form-group">
                            <label for="grupo">Nombre Banda</label>
                            <input type="text" class="form-control" id="grupo" name="grupo" value="<?php echo $cancion->grupo?>">
                        </div>
                        <div class="form-group">
                            <label for="duracion">Duracion</label>
                            <input type="text" class="form-control" id="duracion" name="duracion" value="<?php echo $cancion->duracion?>">
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" class="form-control" id="link" name="link" value="<?php echo $cancion->link ?>">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                        <input type="hidden" name="id_tema" value="<?php echo $cancion->id_tema; ?>">
                    </form>
                </div>
            </div>
        </div>
    </body>
    </html>