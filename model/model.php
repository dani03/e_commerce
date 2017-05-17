<?php
function connexion(){
  $bdd = new PDO('mysql:host=localhost;dbname=phoneCell;charset=utf8','phpmyadmin','root');
  return $bdd;
}

// function connexion
function login($email){
  $bdd = connexion();
  $connexion = $bdd->query('SELECT email, mdp FROM phone WHERE email="'.$email.'"');
  return $connexion; // return le select
}

function inscription($nom,$prenom,$email,$password){
  $bdd = connexion();
  $inscription = $bdd->exec('INSERT INTO  phone('nom, prenom, email, mdp')
}
?>
