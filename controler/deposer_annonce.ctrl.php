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

if (isset($_GET['categorie'])) {
  $categorie = $_GET['categorie'];
} else {
  $categorie = '';
}


if (isset($_GET['style'])) {
  $style = $_GET['style'];
} else {
  $style = '';
}


if (isset($_GET['titre'])) {
  $titre = $_GET['titre'];
} else {
  $titre = '';
}


if (isset($_GET['prix'])) {
  $prix = $_GET['prix'];
} else {
  $prix = 0;
}


if (isset($_GET['localisation'])) {
  $localisation = $_GET['localisation'];
} else {
  $localisation = '';
}


$num = count($DAO->getAnnonces())+1;


$date = date("j/m/Y");


$auteur = "";



//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DE LA VUE
//////////////////////////////////////////////////////////////////////////////
//On charge la vue avec les annonces correspondantes

if (($categorie == 'Prestation' && $style != '' && $titre != '' && $prix != '' && $localisation != '') || ($categorie != 'Prestation' && $style == '' && $titre != '' && $prix != '' && $localisation != '')) {
  include('../view/annonce_deposee.view.php');
} else {
  include('../view/deposer_annonce.view.php');
}
?>
