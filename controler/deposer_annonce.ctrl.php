<?php
// Controleur annonces
require_once('../model/Annonce.class.php');
require_once('../model/GzerDAO.class.php');
//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DU MODELE
//////////////////////////////////////////////////////////////////////////////

  date_default_timezone_set('UTC');

  $config = parse_ini_file('../config/config.ini');
  $dao = new GzerDAO($config['database_path']);

  $categorie = $_GET['categorie'];
  $titre = $_GET['titre'];
  $prix = $_GET['prix'];
  $quartier = $_GET['quartier'];
  $numA= count(getAnnoncesAll())+1;
  $dateA= date("j, n, Y");
  $auteurA= getAuteurA();
  if (isset($categorie)== 'prestation'){
    $style= $_GET['style'];

    $insert = "INSERT INTO annonce (numA, titreA, prixA, localisationA, auteurA, dateA, categorieA, styleA) VALUES (:numA, :titreA, :prixA, :localisationA, :auteurA, :dateA, :categoieA, :styleA )";
    $statement = $db->prepare($insert);

    // Bind parameters to statement variables
      $stmt->bindValue(':numA', $numA);
      $stmt->bindValue(':titreA', $titre);
      $stmt->bindValue(':prixA', $prix);
      $stmt->bindValue(':localisationA', $quartier);
      $stmt->bindValue(':auteurA', $auteurA);
      $stmt->bindValue(':dateA', $dateA);
      $stmt->bindValue(':categorieA', $categorie);
      $stmt->bindValue(':styleA', $style);
    }
  else {
    $style= '';

    $insert = "INSERT INTO annonce (numA, titreA, prixA, localisationA, auteurA, dateA, categorieA, styleA) VALUES (:numA, :titreA, :prixA, :localisationA, :auteurA, :dateA, :categoieA, :styleA )";
    $statement = $db->prepare($insert);

    // Bind parameters to statement variables
      $stmt->bindValue(':numA', $numA);
      $stmt->bindValue(':titreA', $titre);
      $stmt->bindValue(':prixA', $prix);
      $stmt->bindValue(':localisationA', $quartier);
      $stmt->bindValue(':auteurA', $auteurA);
      $stmt->bindValue(':dateA', $dateA);
      $stmt->bindValue(':categorieA', $categorie);
      $stmt->bindValue(':styleA', $style);
    }

    $stmt->execute();
//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DE LA VUE
//////////////////////////////////////////////////////////////////////////////
//On charge la vue avec les annonces correspondantes
include('../view/annonces.view.php');
 ?>
