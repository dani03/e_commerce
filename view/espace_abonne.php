<?php
session_start();
require 'header.php';
?>
<?php
if($_SESSION['login'] != "ok"){
  header("Location:/projetSiteEcommerce/controleur/connexionCtrl.php");

}
else {
  echo "<h1>bienvenue sur votre espace abonné" . $_POST['nom'] ." !!</h1> ";
}

?>
<body>

  <p>votre panier contient:</p>

</body>
