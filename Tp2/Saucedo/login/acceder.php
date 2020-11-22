<?php session_start();?>


    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - Musica</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    </head>
    
    <style>
            body::before {
                content: "";
                position: absolute;
                top: 0; left: 0;
                width: 100%; height: 100%;
                background-image: url(images/fondo_admin.jpg);
                filter: blur(2px) grayscale(60%);
            }
                </style>
            <body>
            <div class="container">
           <div class="row justify-content-center">
               <div class="col col-md-6 my-5">
                  <div class="text-center mt-5">
                      <img src="images/loguito.png" alt="musica logo" class="container">
                    </div>
                    <div class="card my-3">
                        <h5 class="card-header">Login Admin</h5>
                        <div class="card-body">
                        <?php include 'part/mensajes.php' ?>
                            <form method="POST" action="/tp2/saucedo/php/controllers/login/login.controller.php">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                                </div>
                                <p class="text-right">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </p>
                                </form>
                            <a href="/tp2/saucedo/index.php" class="btn btn-secondary"><span class="fa fa-arrow-circle-left"> Home </span></a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
       </html>