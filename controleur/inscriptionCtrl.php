<?php
session_start();
require '../model/model.php';

$tab = array(
  ':email'=> $_POST['email'],
  ':mdp'=> $_POST['password'],
  ':nom'=> $_POST['nom'],
  ':prenom'=> $_POST['prenom'],

  );

if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['nom']) && isset($_POST['prenom'])){
  if(isset($_POST['submit'])){
          inscription($tab);
      echo"<section>inscription reussie<a href='../view/formulaire.php'>connectez vous ici</a></section>";
  }
 else{
   echo ' bad error';
 }
}
 require '../view/index.php';

?>
