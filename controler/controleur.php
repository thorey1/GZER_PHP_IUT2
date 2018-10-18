<?php



function afficherAnnonces () {

 $annonces = filtrerAnnonces($_GET['cate'],$_GET['loca']);

 foreach ($annonces as $value) {
   echo '<h3>'.$value->titre.'</h3>';
   echo '<p>'.$value->auteur.'</p>';
   echo '<p>'.$value->localisation.'</p>';
   echo '<p>'.$value->categorie.'</p>';
   echo '<a href="...">';
 }
}

function filtrerAnnonce($categorie, $localisation): array {
  $annonces = loadAnnonces();
  $annoncesFiltrés = array();

  foreach ($annonces as $value) {
    if ($value->categorie == $categorie && $value->localisation == $localisation){
      $annoncesFiltrés[]= $value;
    }
  }
  return $annoncesFiltrés
}
 ?>
