<?php



  require_once('../model/Membre.class.php');
  require_once('../model/GzerDAO.class.php');

  $config = parse_ini_file('../config/config.ini');
  $DAO = new GzerDAO($config['database_path']);



  if (isset($pseudoM)) {
    $pseudoM = $_GET['pseudoM'];
  }
  if (isset($mailM)) {
    $mailM = $_GET['mailM'];
  }
  if (isset($mdpM)) {
    $mdpM = $_GET['mdpM'];
  }

  if (isset($pseudoM) && isset($mailM) && isset($mdpM)){
    $numM= count($DAO->getMembres())+1;
    $pass_hache = password_hash($_GET['mdpM'], PASSWORD_DEFAULT);

    $DAO->insertMembre($numM,$pseudoM,$mailM,$mdpM);
  }


  include('../view/inscription_verif.view.php');










  ?>
