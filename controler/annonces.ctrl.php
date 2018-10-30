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

if (isset($_GET['quartier'])) {
  $quartier = $_GET['quartier'];
} else {
  $quartier = '';
}
//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DU MODELE
//////////////////////////////////////////////////////////////////////////////

  if (isset($categorie) && $categorie != '') {
    $config = parse_ini_file('../config/config.ini');
    $DAO = new GzerDAO($config['database_path']);

    $annoncesCat = $DAO->getAnnoncesParCategorie($categorie);
  } else if (isset($style) && $style != ''){
    $config = parse_ini_file('../config/config.ini');
    $DAO = new GzerDAO($config['database_path']);

    $annoncesStyle = $DAO->getAnnoncesParStyle($style);
  } else if (isset($materiel) && $materiel != '') {
    $config = parse_ini_file('../config/config.ini');
    $DAO = new GzerDAO($config['database_path']);

    $annoncesCat = $DAO->getAnnoncesParCategorie($materiel);
  } else if (isset($quartier) && $quartier != '') {
    $config = parse_ini_file('../config/config.ini');
    $DAO = new GzerDAO($config['database_path']);

    $annoncesQuart = $DAO->getAnnoncesParQuartier($quartier);
  } else {
    $config = parse_ini_file('../config/config.ini');
    $DAO = new GzerDAO($config['database_path']);

    $annonces = $DAO->getAnnonces();
  }

//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DE LA VUE
//////////////////////////////////////////////////////////////////////////////
//On charge la vue avec les DAOcorrespondantes
include('../view/annonces.view.php');
?>
