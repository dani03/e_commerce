<?php
session_start();

require '../model/model.php';


if(isset($_POST['submit'])){
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $connexion = login($email);

  foreach ($connexion as $reponse) {
    $nomR = $reponse['nom'];
    $mdp =  $reponse['mdp'];
    $emailR =  $reponse['email'];
  }

  if($mdp === $password && $emailR === $email && $nomR === $nom){
     header("Location:/projetSiteEcommerce/view/espace_abonne.php");
    $_SESSION['login'] = "ok";
  }
  else {
    $error =  "<section class='error'>le mot de passe est incorrect</section>";
  }
}


require '../view/header.php';

?>
<body>
</body>
