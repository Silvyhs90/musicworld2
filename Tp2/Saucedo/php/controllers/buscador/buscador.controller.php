<?php

require __DIR__ . '/../../conn.php';
  

$cancion = $_GET['cancion'];

$query = $db->prepare("SELECT * FROM canciones WHERE descripcion LIKE '%$cancion%'"); 
    
$query->execute();
  
$canciones2 = $query->fetchAll(PDO::FETCH_OBJ);

require __DIR__ .'/../../../views/buscador.canciones.php'; 
  
        

       
     
    
