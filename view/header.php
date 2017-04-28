<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>E-commerce</title>
     <link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Gentium+Book+Basic|Kalam" rel="stylesheet"> 
    <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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

        <div class="msn">
           <h2>connectez-vous </h2>
             <form class="formulaire" action="../view/inscrip.php" method="post">
               <label for="email">email:</label>
                <input type="email" name="email" id='email' value="" required="" placeholder="exemple@gmail.com"><br>
                <label for="password">mot de passe:</label>
                <input type="password" name="password" id='password'value="" required="" placeholder="entrer votre mot de passe">
                <input type="submit" name="submit" value="valider"><br>
            </form>
        </div>
                        <!-- formulaire d'inscription -->
          <div class="borgia">
            <h2> inscrivez vous </h2><br>
                <form class="" action="../view/compte.php" method="post"> <br>
                    <label for="nom">nom : </label>
                    <input type="text" name="nom" value="" placeholder="entrez votre nom" id='nom'><br>
                    <label for="lastname">prenom :</label>
                    <input type="text" name="prenom" value="" placeholder="entrez votre prenom" id='lastname'><br>
                    <label for="mail">email:</label>
                    <input type="email" name="email" value="" placeholder="exemple@gmail.com" required=""><br>
                    <label for="mdp">mot de passe :</label>
                    <input type="password" name="password" value="" id='mdp' placeholder="entrez votre mot de passe" required="">
                    <input type="submit" name="submit" value="s'inscrire"><br>
                </form>
          </div>
          <a href="#"><button id ='close'>X</button></a>
    </div>
