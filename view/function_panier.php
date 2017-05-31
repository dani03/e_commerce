<?php
// on cree le panier dans le cas ou il n'existe pas
function creationPanier(){
  if(!isset($_SESSION['panier'])){
    $_SESSION['panier']= array();
    $_SESSION['panier']['nomProduit']= array();
    $_SESSION['panier']['quantiteProduit']= array();
    $_SESSION['panier']['prixProduit']= array();
    $_SESSION['panier']['verrou']= false;
  }
  return true;
}

// on cree une fonction ajouter un article
function ajoutArticle($nomProduit,$quantiteProduit,$prixProduit){
    // on verifie si le panier exsiste et qu'il n'est pas verouillé
    if(creationPanier() && !isVerrouille()){
        // si le produit existe deja on ajoute juste la quantité
      $positionProduit = array_search($nomProduit, $_SESSION['panier']['nomProduit']);
       if ($positionProduit !== false)
       {
         $_SESSION['panier']['quantiteProduit'][$positionProduit] += $quantiteProduit;
       }
       else
        // sinon on ajoute le produit s'il n'exsiste pas
       {
           array_push($_SESSION['panier']['nomProduit'],$nomProduit);
           array_push($_SESSION['panier']['quantiteProduit'],$quantiteProduit);
           array_push($_SESSION['panier']['prixProduit'],$prixProduit);
       }

     }
     else{
      echo "probleme survenu niveau ajout d'article";
     }
}

    // on cree une function suppression d'un article

    function supprimeArticle($nomProduit){
      if(creationPanier() && !isVerrouille()){
        // la creation d'un panier temporaire
        $temporaire = array();
        $temporaire['nomProduit'] = array();
        $temporaire['quantiteProduit'] = array();
        $temporaire['prixProduit'] = array();
        $temporaire['verou'] = $_SESSION['panier']['verou'];

        for($i = 0; $i < count($_SESSION['panier']['nomProduit']); $i++){
          if($_SESSION['panier']['nomProduit'][$i] !== $nomProduit)  {
            array_push($temporaire['nomProduit'],$_SESSION['panier']['nomProduit'][$i]);
            array_push($temporaire['prixProduit'],$_SESSION['panier']['prixProduit'][$i]);
            array_push($temporaire['quantiteProduit'],$_SESSION['panier']['quantiteProduit'][$i]);
          }
        }
        // remplaçons le panier de notre session par le panier temporaire
        $_SESSION['panier'] = $temporaire;
        // suppression
        unset($temporaire);
      }
      else
      echo " un probleme a été detecté niveau suppression article";
    }

            //  creation de la function modification d'un article
    function modifArticle($nomProduit,$quantiteProduit){
      if (creationPanier() && !isverouille()) {
        // si la quantité est positive un
         if($quantiteProduit > 0){
          //  on commence par rechercher le produit dans notre panier
           $positionProduit = array_search($nomProduit, $_SESSION['panier']['nomProduit']);
           if($positionProduit !== false){
             $_SESSION['panier']['quantiteProduit'][$positionProduit] = $quantiteProduit;
           }
         }
         else
         supprimeArticle($nomProduit);
      }
      else
        echo " probleme detecté niveau modification du produit";
    }

  //montant des achats
  function prixTotal(){
    $sommeTotal = 0;

    // une boucle for pour verifie si le produit est dans le panier dans ce cas on incremente
    for($i = 0; $i < count($_SESSION['panier']['nomProduit']);$i++){
      // on multiplie la quantité par le prix du produit
      $sommeTotal += $_SESSION['panier']['quantiteProduit'][$i] * $_SESSION['panier']['prixProduit'][$i];
    }
    return $sommeTotal;
  }

 // on verifie si il ya quelque chose dans le panier et s'il est verouillé
  function isVerrouille(){

    if(isset($_SESSION['panier']) && $_SESSION['verrou'])
    return true;
    else
    return false;
  }
// comptage des articles
function compterArcticle(){
  if(isset($_SESSION['panier']))
  return count($_SESSION['panier']['nomProduit']);
}

// creation de la fonction supprimer panier
function supprimerPanier(){
  unset($_SESSION['panier']);
}
 ?>
