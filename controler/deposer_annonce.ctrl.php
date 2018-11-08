<?php
// Controleur annonces
require_once('../model/Annonce.class.php');
require_once('../model/GzerDAO.class.php');
//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DU MODELE
//////////////////////////////////////////////////////////////////////////////

date_default_timezone_set('UTC');

$config = parse_ini_file('../config/config.ini');
$DAO = new GzerDAO($config['database_path']);

if (isset($categorie)) {
  $categorie = $_GET['categorie'];
} else {
  $categorie = '';
}
if (isset($style)) {
  $style = $_GET['style'];
} else {
  $style = '';
}
if (isset($titre)) {
  $titre = $_GET['titre'];
} else {
  $titre = '';
}
if (isset($prix)) {
  $prix = $_GET['prix'];
} else {
  $prix = 0;
}
if (isset($localisation)) {
  $localisation = $_GET['localisation'];
} else {
  $localisation = '';
}

$num= count($DAO->getAnnonces())+1;
$date= date("j/m/Y");
$auteur= "";

if ((isset($categorie) && $categorie == 'Prestation' && isset($style) && isset($titre) && isset($prix) && isset($localisation)) || (isset($categorie) && $categorie != 'Prestation' && isset($style) && $style == '' && isset($titre) && isset($prix) && isset($localisation))) {
  $redirection = "../view/annonce_deposee.view.php";
} else {
  $redirection = "deposer_annonce.ctrl.php"; 
}
//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DE LA VUE
//////////////////////////////////////////////////////////////////////////////
//On charge la vue avec les annonces correspondantes
include('../view/deposer_annonce.view.php');
?>
