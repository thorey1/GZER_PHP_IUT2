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

$num = count($DAO->getAnnonces())+1;
$date = date("j/m/Y");
$auteur = "";


//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DE LA VUE
//////////////////////////////////////////////////////////////////////////////
//On charge la vue avec les annonces correspondantes
var_dump(empty($categorie));
var_dump(empty($style));
var_dump(empty($titre));
var_dump(empty($prix));
var_dump(empty($localisation));
if (($categorie == 'Prestation' && $style != '' && $titre != '' && $prix != '' && $localisation != '') || (!empty($categorie) && $categorie != 'Prestation' && !empty($style) && $style == '' && !empty($titre) && !empty($prix) && !empty($localisation))) {
  include('../view/annonce_deposee.view.php');
} else {
  include('../view/deposer_annonce.view.php');
}
?>
