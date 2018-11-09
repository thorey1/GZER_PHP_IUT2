<?php
// Controleur connexion
require_once('../model/Membre.class.php');
require_once('../model/GzerDAO.class.php');


//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DU MODELE
//////////////////////////////////////////////////////////////////////////////

$config = parse_ini_file('../config/config.ini');
$DAO = new GzerDAO($config['database_path']);

if(empty($_POST["pseudoM"]) || empty($_POST["mdpM"])) {
  $message = '<label>Tous les champs sont requis</label>';
} else {
  $membreCo = $DAO->getMembreConnexion($_POST["pseudoM"], $_POST["mdpM"]);
  if(($membreCo != NULL) && ($membreCo->getPseudoM() == $_POST["pseudoM"])) {
    echo 'connecté';
    session_start();
    $_SESSION["newsession"] = $_POST["pseudoM"];
    header('Location: ../index.php');
  } else {
    $message = "<label>Les informations n'ont pas permis de vous identifier</label>";
  }
}

include('../view/connexion.view.php');
?>
