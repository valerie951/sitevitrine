<?php
function creationPanier()
{
        if (!isset($_SESSION['panier']))
        {
            $_SESSION['panier']=array();
            $_SESSION['panier']['Nom'] = array();
            $_SESSION['panier']['Image'] = array();
            $_SESSION['panier']['Prix'] = array();
            $_SESSION['panier']['Categorie'] = array();
            $_SESSION['panier']['verrou'] = false;
        }
   return true;
}
 
function ajouterArticle($type,$marque,$modele, $qte, $prix){
 
   //Si le panier existe
   if (creationPanier() && !isVerrouille())
   {
      //Si le produit existe déjà on ajoute seulement la quantité
      $positionProduit = array_search($type,  $_SESSION['panier']['type']);
 
      if ($positionProduit !== false)
      {
         $_SESSION['panier']['qte'][$positionProduit] += $qte ;
      }
      else
      {
         //Sinon on ajoute le produit
         array_push( $_SESSION['panier']['type'],$type);
         array_push( $_SESSION['panier']['marque'],$marque);
         array_push( $_SESSION['panier']['modele'],$modele);
         array_push( $_SESSION['panier']['qte'],$qte);
         array_push( $_SESSION['panier']['prix'],$prix);
      }
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}
 
function supprimerArticle($type){
   //Si le panier existe
   if (creationPanier() && !isVerrouille())
   {
      //Nous allons passer par un panier temporaire
      $tmp=array();
      $tmp['type'] = array();
      $tmp['marque'] = array();
      $tmp['modele'] = array();
      $tmp['qte'] = array();
      $tmp['prix'] = array();
      $tmp['verrou'] = $_SESSION['panier']['verrou'];
 
      for($i = 0; $i < count($_SESSION['panier']['type']); $i++)
      {
         if ($_SESSION['panier']['type'][$i] !== $type)
         {
            array_push( $tmp['type'],$_SESSION['panier']['type'][$i]);
            array_push( $tmp['marque'],$_SESSION['panier']['marque'][$i]);
            array_push( $tmp['modele'],$_SESSION['panier']['modele'][$i]);
            array_push( $tmp['qte'],$_SESSION['panier']['qte'][$i]);
            array_push( $tmp['prix'],$_SESSION['panier']['prix'][$i]);
         }
 
      }
      //On remplace le panier en session par notre panier temporaire à jour
      $_SESSION['panier'] =  $tmp;
      //On efface notre panier temporaire
      unset($tmp);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}
 
function modifierQTeArticle($type,$qte){
   //Si le panier éxiste
   if (creationPanier() && !isVerrouille())
   {
      //Si la quantité est positive on modifie sinon on supprime l'article
      if ($qte > 0)
      {
         //Recharche du produit dans le panier
         $positionProduit = array_search($type,  $_SESSION['panier']['type']);
 
         if ($positionProduit !== false)
         {
            $_SESSION['panier']['qte'][$positionProduit] = $qte ;
         }
      }
      else
      supprimerArticle($type);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}
 
function MontantGlobal(){
   $total=0;
   for($i = 0; $i < count($_SESSION['panier']['type']); $i++)
   {
      $total += $_SESSION['panier']['qte'][$i] * $_SESSION['panier']['prix'][$i];
   }
   return $total;
}
 
function supprimePanier(){
   unset($_SESSION['panier']);
}
?>