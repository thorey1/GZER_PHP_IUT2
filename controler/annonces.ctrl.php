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

if ($categorie != '') {
  $config = parse_ini_file('../config/config.ini');
  $DAO = new GzerDAO($config['database_path']);

  $annoncesCat = $DAO->getAnnoncesParCategorie($categorie);
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
