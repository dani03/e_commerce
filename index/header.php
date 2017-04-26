<?php
require 'db.class.php';
$DB = new DB();
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>E-commerce</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <nav>
      <ul class='btn'>
        <li>samsung galaxy</li>
        <li> apple</li>
        <li>wiko</li>
        <li>one plus one</li>
        <li>sony Z experia</li>
        <li> htc </li>
        <li><a href="#messi"> s'inscrire / se connecter</a></li>
        <li><button type="button" name="button">panier</button></li>
     </ul>
    </nav>

              <!-- formulaire de connexion -->
    <div  class='first_one'id="messi">
       <h2>connectez-vous </h2>
         <a href="#"><button>X</button></a>
       <form class="formulaire" action="monespace.php" method="post">
         <label for="email">email</label>
          <input type="text" name="email" id='email' value=""><br>
          <label for="password">mot de passe:</label>
          <input type="password" name="password" value=""><br>
          <input type="submit" name="submit" value="valider"><br>
      </form>

                    <!-- formulaire d'inscription -->
      <div class="borgia">
        <h2> inscrivez vous </h2>
        <form class="" action="cible.php" method="post"> <br>
          <label for="nom">nom : </label>
          <input type="text" name="nom" value=""><br>
          <label for="prenom">prenom :</label>
          <input type="text" name="prenom"  value=""><br>
          <label for="email">email:</label>
          <input type="e-mail" name="e-mail" value=""><br>
          <label for="">mot de passe :</label>
          <input type="password" name="password" value=""><br>
          <input type="submit" name="submit" value="s'inscrire"><br>
        </form>
      </div>
    </div>
