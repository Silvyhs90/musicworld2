<?php
session_start();
require __DIR__ . '/../../php/controllers/index.controller.canciones.php';
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canciones</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="/saucedo/css/estilos.css">
    </head>
    <body class="cuerpo">
        <div class="container">
         <div class="row">
            <div class="col-md-12">
          <?php if (isset($_SESSION['alert']) && $_SESSION['alert']['message']): ?>
                    <div class="alert alert-<?php echo $_SESSION['alert']['type'] ?>">
                        <?php echo $_SESSION['alert']['message']; ?>
                    </div>
                <?php unset($_SESSION['alert']); ?>
                <?php endif; ?>
             <a href="/tp2/saucedo/login/home.php" class="btn btn-secondary"><span class="fa fa-arrow-circle-left"></span></a>            

                <table class="table table-bordered striped">
                <a href="agregar.canciones.php" class="btn btn-warning py-3 ml-5 mb-3"><span class="fa fa-table">Agregar Cancion</span></a>            
                        
                <thead>
                   
                     <tbody>

                        <tr>
                            <td>Album</td>
                            <td>Titulo Cancion</td>
                            <td>ID Genero</td>
                            <td>Acciones</td>
                           
                        </tr>
                    </thead>                   
                        <?php foreach($canciones as $cancion): ?>
                            <tr>
                            
                            <td><img src="/tp2/saucedo/images/<?php echo $cancion->portada; ?>" class="container-content" width="400" height="350" alt="foto album"></td>
                                <td><?php echo $cancion->descripcion; ?></td>
                               
                             <td> <?php echo $genero->nombre ?> </td>
                           
                                <td>
                                   <a href="edit.canciones.php?id=<?php echo $cancion->id_tema; ?>" class="btn btn-primary"><span class="fa fa-edit"></span></a>
                                    <a href="delete.canciones.php?id=<?php echo $cancion->id_tema; ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a>
                                </td>
                                
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
             </div>
         </div>
        </body>
        </html>