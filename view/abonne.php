<?php require '../model/connexion.php';?>

<?php

$email = $_POST['email'];
$mdp = $_POST['password'];
if(isset($_POST['email']) && isset($_POST['password'])){
  if(isset($_POST['submit'])){

 $req-> $bdd->prepare('INSERT INTO phone(email, mdp) VALUES(:email, :mdp)')
 $req->execute(array(
   'email'=> $_POST['email'],
   'excute'=> $_POST['password']
   ));
  $req->closeCursor();
 }
 }
 else{
   echo ' bad error';
 }
