<?php 
session_start();
unset($_SESSION["admin"]);
header('location: /tp2/saucedo/login/acceder.php');
