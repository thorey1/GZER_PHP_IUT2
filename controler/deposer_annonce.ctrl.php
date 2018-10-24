<?php
// Controleur annonces
require_once('../model/Annonce.class.php');
require_once('../model/GzerDAO.class.php');
//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DU MODELE
//////////////////////////////////////////////////////////////////////////////



  $config = parse_ini_file('../config/config.ini');
  $dao = new GzerDAO($config['database_path']);
  $categorie = $_GET['categorie'];
  $style = $_GET['style'];
  $titre = $_GET['titre'];
  $prix = $_GET['prix'];
  $quartier = $_GET['quartier'];
  $numA= count(getAnnoncesAll())+1;
  if (isset($categorie)== 'prestation'){
    $insert = "INSERT INTO annonce (numA, categorieA, titreA, prixA, localisationA, auteurA, dateA, , styleA)
    VALUES (:numA, :categorieA, :titreA, :prixA, :localisationA, :auteurA, :dateA, )";
    $statement = $db->prepare($insert);

  }
  $insert = "INSERT INTO annonce (numA, categorieA, titreA, prixA, localisationA, auteurA, dateA, categorieA, styleA)
  VALUES (:numA,:)";
  $statement = $db->prepare($insert);

''
//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DE LA VUE
//////////////////////////////////////////////////////////////////////////////
//On charge la vue avec les annonces correspondantes
include('../view/annonces.view.php');
 ?>
