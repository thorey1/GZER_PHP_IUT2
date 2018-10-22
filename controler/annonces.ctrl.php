<?php
// Controleur annonces
require_once('../model/Annonce.class.php');
require_once('../model/GzerDAO.class.php');

//////////////////////////////////////////////////////////////////////////////
// PARTIE RECUPERATION DES DONNEES
//////////////////////////////////////////////////////////////////////////////

// Récupération des informations de la query string
if (isset($_GET['categorie'])) {
  $categorie = $_GET['categorie'];
} else {
  $categorie = '';
}

//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DU MODELE
//////////////////////////////////////////////////////////////////////////////
if ($categorie = 'Prestation') {
  $config = parse_ini_file('../config/config.ini');
  $annonces = new GzerDAO($config['database_path']);

  for ($i=1; $i <= 6; $i++) {
    $AP = $annonces->getAnnonceP($i);
    var_dump($AP);
    $listAP[$i] = $AP->getTitre();
  }
} else if ($categorie = '') {
  $config = parse_ini_file('../config/config.ini');
  $annonces = new GzerDAO($config['database_path']);

  for ($i=1; $i <= 6; $i++) {
    $AP = $annonces->getAnnonceP($i);
    var_dump($AP);
    $listAP[$i] = $AP->getTitre();
    $AM = $annonces->getAnnonceM($i);
    $listAM[$i] = $AM->getTitre();
  }
} else {

}

//problème : les attibuts privés n'ont pas la valeur des attributs de la table

//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DE LA VUE
//////////////////////////////////////////////////////////////////////////////
//On charge la vue avec les annonces correspondantes
include('../view/annonces.view.php');
?>
