<?php require __DIR__ . '../../../php/controllers/generos.controller.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Canciones</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="/saucedo/css/estilos.css">
</head>

<body class="cuerpo">
    
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
            <button class="bg-secondary"><a href="/tp2/saucedo/admin/canciones/index.canciones.php"> Volver </a></button>

            <form action="/tp2/saucedo/php/controllers/add.controller.canciones.php" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                        <label for="descripcion">Nombre Cancion</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" value="">
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
                        <label for="portada">Album</label>
                        <input type="file" class="form-control" id="portada" name="portada" value="">
                    </div>
                       <div class="form-group">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                       </div>
                    </form>
            </div>
        </div>
    </div>
</body>
</html>