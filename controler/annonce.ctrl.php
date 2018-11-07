<?php
// Controleur annonces
require_once('../model/Annonce.class.php');
require_once('../model/Membre.class.php');
require_once('../model/GzerDAO.class.php');

//////////////////////////////////////////////////////////////////////////////
// PARTIE RECUPERATION DES DONNEES
//////////////////////////////////////////////////////////////////////////////

// Récupération des informations de la query string
if (isset($_GET['numA'])) {
  $numA = $_GET['numA'];
} else {
  $numA = '';
}
//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DU MODELE
//////////////////////////////////////////////////////////////////////////////
$erreur = 1;
  if (isset($numA) && $numA != '') {
    $config = parse_ini_file('../config/config.ini');
    $DAO = new GzerDAO($config['database_path']);

    $annonce = $DAO->getAnnonceParNum($numA);
    $membre = $DAO->getMembreParPseudo($annonce->getAuteurA());
  } else {
    $erreur = 0;
  }

//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DE LA VUE
//////////////////////////////////////////////////////////////////////////////
//On charge la vue avec les DAOcorrespondantes
include('../view/annonce.view.php');
?>
