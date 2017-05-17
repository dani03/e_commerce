<?php
session_start();

require '../model/model.php';


if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $connexion = login($email);

  foreach ($connexion as $reponse) {
    $mdp =  $reponse['mdp'];
    $emailR =  $reponse['email'];
  }

  if($mdp === $password && $emailR === $email){
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
