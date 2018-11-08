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
if (isset($quartier)) {
  $quartier = $_GET['quartier'];
}

$num= count($DAO->getAnnonces())+1;
$date= date("j, n, Y");
$auteur= "";

if (isset($categorie) && $categorie == 'Prestation' && isset($num) && isset($titre) && isset($prix) && isset($localisation) && isset($auteur) && isset($date) && isset($style)) {
  echo "prest";
  $DAO->insertAnnonce($num, $titre, $prix, $localisation, $auteur, $date, $categorie, $style);
} else if (isset($categorie) && isset($num) && isset($titre) && isset($prix) && isset($localisation) && isset($auteur) && isset($date) && isset($style) && $style = ''){
  echo "matos";
  $DAO->insertAnnonce($num, $titre, $prix, $localisation, $auteur, $date, $categorie, $style);
}
//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DE LA VUE
//////////////////////////////////////////////////////////////////////////////
//On charge la vue avec les annonces correspondantes
include('../view/deposer_annonce.view.php');
?>
