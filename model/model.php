<?php
function connexion(){
  $bdd = new PDO('mysql:host=localhost;dbname=phoneCell;charset=utf8','phpmyadmin','root');
  return $bdd;
}

// function connexion
function login($email){
  $bdd = connexion();
  $connexion = $bdd->query('SELECT nom, email, mdp FROM phone WHERE email="'.$email.'"');
  return $connexion; // return le select
}
// on cree la function inscription
function inscription($tab){
  $bdd = connexion();
  $inscription = $bdd->prepare('INSERT INTO phone(nom,prenom,email,mdp) VALUES(:nom,:prenom,:email,:mdp)');
  $inscription->execute($tab);
}

?>
