<?php
//conexion a la base de donnees
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=phoneCell;charset=utf8','phpmyadmin','root');
}
 catch (Exception $e)
 {
   die ('erreur :'.$e->getMessage());
}
?>
