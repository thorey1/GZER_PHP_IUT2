<?php



  require_once('../model/Membre.class.php');
  require_once('../model/GzerDAO.class.php');

  $config = parse_ini_file('../config/config.ini');
  $DAO = new GzerDAO($config['database_path']);



  if (isset($pseudoM)) {
    $pseudoM = $_POST['pseudoM'];
  }
  if (isset($mailM)) {
    $mailM = $_POST['mailM'];
  }
  if (isset($mdpM)) {
    $mdpM = $_POST['mdpM'];
  }

  if (isset($pseudoM),isset($mailM),isset($mdpM)){
    $numM= count($DAO->getMembres())+1;
    $pass_hache = password_hash($_POST['mdpM'], PASSWORD_DEFAULT);

    $DAO->insertMembre($numM,$pseudoM,$mailM,$mdpM);
  }


  include('../view/inscription.view.php');










  ?>
