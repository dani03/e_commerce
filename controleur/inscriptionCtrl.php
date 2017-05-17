<?php
session_start();
require '../view/header.php';
require '../model/model.php';

$email = $_POST['email'];
$mdp = $_POST['password'];

$tab = array(
  'email'=> $_POST['email'],
  'excute'=> $_POST['password']
  );

if(isset($_POST['email']) && isset($_POST['password'])){
  if(isset($_POST['submit'])){
      inscription($tab);
      echo "<h1>inscription reussie</h1>";
  }
}
 else{
   echo ' bad error';
 }

require '../view/index.php';
?>
