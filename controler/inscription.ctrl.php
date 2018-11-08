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




  if (isset($pseudoM) && isset($mailM) && isset($mdpM) && isset($mdpVerif)){
    $numM= count($DAO->getMembres())+1;
    $pass_hache = password_hash($_POST['mdpM'], PASSWORD_DEFAULT);

    if($mdpM == $mdpVerif && !empty($pseudo)){
      $DAO->insertMembre($numM,$pseudoM,$mailM,$mdpM);
      include('../view/inscription_verif.view.php?pb=0');
    } else {
      include('../view/inscription_verif.view.php?pb=1');
    }


  } else {
<<<<<<< HEAD
    include('../view/inscription.view.php');
=======
    include('../view/inscriptio.view.php');
>>>>>>> 0748388b1703ffe82262105e22b549506cab0c80
  }














  ?>
