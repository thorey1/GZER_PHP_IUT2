<?php

  require_once('../model/Membre.class.php');
  require_once('../model/GzerDAO.class.php');

  $config = parse_ini_file('../config/config.ini');
  $DAO = new GzerDAO($config['database_path']);

  if(isset($_POST['pseudo'])){
    $pseudoM = $_POST['pseudo'];
  }

  if(isset($_POST['mdp'])){
    $mdpM = $_POST['mdp'];
  }

  if(isset($_POST['rmdp'])){
    $mdpVerif = $_POST['rmdp'];
  }

  if(isset($_POST['mail'])){
    $mailM = $_POST['mail'];
  }


  if (isset($pseudoM) && $pseudoM != '' && isset($mailM) && $mailM != '' && isset($mdpM) && $mdpM != '' && isset($mdpVerif) && $mdpVerif != ''){
    $numM= count($DAO->getMembres())+1;
    $pass_hache = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

    if(($mdpM == $mdpVerif) && !empty($pseudoM)){
	$pb = 0;
      	include('../view/inscription_verif.view.php');	
    } else {
	$pb = 1;
      	include('../view/inscription_verif.view.php');	
    }


  } else {

    include('../view/inscription.view.php');
  }

  ?>
