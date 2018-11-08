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
}
if (isset($style)) {
  $style = $_GET['style'];
}
if (isset($titre)) {
  $titre = $_GET['titre'];
}
if (isset($prix)) {
  $prix = $_GET['prix'];
}
if (isset($localisation)) {
  $localisation = $_GET['localisation'];
}

$num= count($DAO->getAnnonces())+1;
$date= date("j/m/Y");
$auteur= "";

//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DE LA VUE
//////////////////////////////////////////////////////////////////////////////
//On charge la vue avec les annonces correspondantes
include('../view/deposer_annonce.view.php');
?>
