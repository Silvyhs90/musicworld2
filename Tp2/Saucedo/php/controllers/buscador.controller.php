<?php

require __DIR__ . '/../conn.php';


    $cancion = $_GET['cancion'];

    $query = $db->prepare("SELECT * FROM canciones WHERE descripcion LIKE '%$cancion%'"); 
    
    $query->execute();
  
        $canciones = $query->fetchAll(PDO::FETCH_OBJ);
          var_dump($canciones); 
     
    
