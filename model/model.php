<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];

// on verifie si les champs on bien ete rempli
if(isset($_POST['nom'],$_POST['prenom'],$_POST['email'],$mdp = $_POST['mdp'])){

  $req = $bdd->prepare('INSERT INTO `phone`(`nom`, `prenom`, `email`, `mdp`) VALUES('$nom', '$prenom', '$email', '$mdp')');

$req->execute();
$req->closeCursor();
}
else
{
  echo 'error veuillez  recommencer';
}

if($req->execute()==TRUE){
  echo '<p>votre inscription reussi</p>';
}


 ?>
