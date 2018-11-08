<?php



  require_once('../model/Membre.class.php');
  require_once('../model/GzerDAO.class.php');

  $config = parse_ini_file('../config/config.ini');
  $DAO = new GzerDAO($config['database_path']);

  $pseudoM = $_POST['pseudo'];
  $mailM = $_POST['mail'];
  $mdpM = $_POST['mdp'];
  $mdpVerif = $S_POST['rmdp'];


  if (isset($pseudoM) && isset($mailM) && isset($mdpM) && isset($mdpVerif)){
    $numM= count($DAO->getMembres())+1;
    $pass_hache = password_hash($_POST['mdpM'], PASSWORD_DEFAULT);

    if($mdpM == $mdpVerif && !empty($pseudo)){
      $DAO->insertMembre($numM,$pseudoM,$mailM,$mdpM);
      include('../view/inscription_verif.view.php?pb=0');
    } else {
      include('../view/inscription_verif.view.php?pb=1');
    }


  }














  ?>
