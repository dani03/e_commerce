<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>E-commerce</title>
    <link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gentium+Book+Basic|Kalam" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <nav>
      <ul>
        <li><a href="../view/index.php">acceuil</a></li>
        <li>samsung galaxy</li>
        <li> apple</li>
        <li>wiko</li>
        <li>one plus one</li>
        <li>sony Z experia</li>
        <li> htc </li>
        <?php if($_SESSION['login'] === "ok"){
        echo "<li><a href='../view/deconnexion.php'>deconnexion</a</li>";
        echo "<li><a id='parametre' href='../view/modif.php'>parametres du compte</a>";
        }
        else {
        echo "<li><a href='#messi'> s'inscrire / se connecter</a></li>";
        }
      ?>

        <li><a href="../view/panier.php"><button type="button" name="button">panier</button></a></li>
     </ul>
    </nav>

    <?php
    echo $error;
    ?>
              <!-- formulaire de connexion -->
    <?php require "../view/formulaire.php"; ?>
    </body>
  </html>
