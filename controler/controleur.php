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
if ($categorie=='prestation'){
  $annonces = loadAnnoncesPrest();
}
else if($categorie=='prestation'){
  $annonces = loadAnnoncesMat();
}
  $annoncesFiltrés = array();

  foreach ($annonces as $value) {
    if ($value->categorie == $categorie && $value->localisation == $localisation){
      $annoncesFiltrés[]= $value;
    }
  }
  return $annoncesFiltrés
}

function loadAnnoncesPrest(): array {
  $fichier = fopen("...", "r");
  $tableauprest = array();
  if ($fichier){
  while (($ligne = fgets($fichier)) !== false)  {
    $ligne = rtrim($ligne,"\n");
    $infos = explode("|", $ligne);
    $nvannonce = new Annonce($infos[0],
                        $infos[1],
                        $infos[2],
                        $infos[4],
                        $infos[5]);
    $tableauprest [$infos[0]]= $nvannonce;
  }
  fclose($fichier);
}
  return $tableauprest;
}

function loadAnnoncesMat(): array {
  $fichier = fopen("...", "r");
  $tableaumat = array();
  if ($fichier){
  while (($ligne = fgets($fichier)) !== false)  {
    $ligne = rtrim($ligne,"\n");
    $infos = explode("|", $ligne);
    $nvannonce = new Annonce($infos[0],
                        $infos[1],
                        $infos[2],
                        $infos[4],
                        $infos[5]);
    $tableaumat [$infos[0]]= $nvannonce;
  }
  fclose($fichier);
}
  return $tableaumat;
}
 ?>
