<?php
session_start();
require 'header.php';
include_once("function_panier.php");
?>
<body>
   <p>panier actif</p>


      <form class="panierFormulaire" action="panier.php" method="post">
            <table>
              <tr>
                <td colspan="6"> mon panier </td>
              </tr>
          <!-- on cree les cases de notre panier -->
              <tr class="elements" colspan="4">
                 <td>nom du produit </td>
                 <td> quantité du produit </td>
                 <td> prix a l'unité du produit </td>
                 <td> action </td>
              </tr>
              <!-- on cree maintenant notre panier -->
          <?php
            if (creationPanier()){
              $nbresArticles = count($_SESSION['panier']['nomProduit']);
              // maintenant on verifie s'il ya quelque chose dans le panier
              if(nbresArticles <= 0){
                echo "votre pannier est vide ";
              }
              // si le panier n'est pas vide
            else
              {
                for($i = 0; $i < nbresArticles; $i++)
                  {
                    echo "<tr>";
                    echo "<td>".htmlspecialchars($_SESSION['panier']['nomProduit'][$i])."</td>";
                    echo "<td><input type=\"text\" size=\"4\"".htmlspecialchars($_SESSION['panier']['quantiteProduit'])." </td>";
                    echo "<td>".htmlspecialchars($_SESSION['panier']['prixProduit'][$i]."</td>");
                    echo "<td><a href=\"".htmlspecialchars("panier.php?action=suppression&1=".rawurlencode($_SESSION['panier']['nomProduit'][$i]))."\">supp</a></td>";
                    echo "</tr>";
                  }
                  echo "<tr><td colspan=\"2\"> </td>";
                  echo "<td colspan=\"2\">";
                  echo "somme total des achats :".prixTotal()." ";
                  echo "<td><tr>";

                  echo "<tr><td colspan=\"4\">";
            			echo "<input type=\"submit\" value=\"Rafraichir\"/>";
            			echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";
            			echo "</td></tr>";
              }
            }

           ?>
            </table>
      </form>
</body>
