<!DOCTYPE html>
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

        <div class="msn">
           <h2>connectez-vous </h2>
             <form class="formulaire" action="" method="post">
               <label for="email">email:</label>
                <input type="text" name="email" id='email' value=""><br>
                <label for="password">mot de passe:</label>
                <input type="password" name="password" id='password'value="">
                <input type="submit" name="submit" value="valider"><br>
            </form>
        </div>
                        <!-- formulaire d'inscription -->
          <div class="borgia">
            <h2> inscrivez vous </h2><br>
                <form class="" action="" method="post"> <br>
                    <label for="nom">nom : </label>
                    <input type="text" name="nom" value="" placeholder="entrez votre nom" id='nom'><br>
                    <label for="lastname">prenom :</label>
                    <input type="text" name="prenom" value="" placeholder="entrez votre prenom" id='lastname'><br>
                    <label for="mail">email:</label>
                    <input type="e-mail" name="e-mail" value="" placeholder="exemple@gmail.com"id='mail' required=""><br>
                    <label for="mdp">mot de passe :</label>
                    <input type="password" name="password" value="" id='mdp' placeholder="entrez votre mot de passe" required="">
                    <input type="submit" name="submit" value="s'inscrire"><br>
                </form>
          </div>
          <a href="#"><button id ='close'>X</button></a>
    </div>
