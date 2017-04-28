<?php

require 'connexion.php';
//
// $nom = $_POST['nom'];
// $prenom = $_POST['prenom'];
// $email = $_POST['email'];
// $mdp = $_POST['password'];

// on verifie si les champs on bien ete rempli
if(isset($_POST['nom']) && isset($_POST['prenom']) && (isset($_POST['email']) && isset($_POST['password']))){
if(isset($_POST['submit'])){
  $req = $bdd->prepare("INSERT INTO phone(nom, prenom, email, mdp) VALUES(:nom, :prenom, :email, :mdp)");
  $req->execute(array(
    'nom' => $_POST['nom'],
    'prenom' => $_POST['prenom'],
    'email' => $_POST['email'],
    'mdp' => $_POST['password']
  ));
  $req->closeCursor();
}
}

else
{
  echo 'error veuillez  recommencer';
}
//
// if($req->execute()==TRUE){
//   echo '<p>votre inscription reussi</p>';
// }
?>
