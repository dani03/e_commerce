<?php
session_start();
 ?>




<div  class='first_one' id="messi">

    <div class="msn">
       <h2>connectez-vous </h2>
         <form class="formulaire" action="../controleur/connexionCtrl.php" method="post">
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
            <form class="" action="../controleur/inscriptionCtrl.php" method="post"> <br>
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
