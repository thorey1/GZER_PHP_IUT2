<?php
// Controleur connexion
require_once('../model/membre.class.php');
require_once('../model/GzerDAO.class.php');


//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DU MODELE
//////////////////////////////////////////////////////////////////////////////

// Récupération des informations de la query string
if ((isset($_GET['pseudo'])) && (isset($_GET['mdp']))) {
  $pseudo = $_GET['pseudo'];
  $mdp = $_GET['mdp'];

  $config = parse_ini_file('../config/config.ini');
  $annonces = new GzerDAO($config['database_path']);

  $i = 0;
  $membres = getMembres();
  $trouve = false;


  while ($i < count($membres) || !$trouve){
    $user = getMembre($i);
    if (($user->pseudo == $pseudo) && ($user->mdp == $mdp)) {
      session_start ();
      $_SESSION['pseudo'] = $pseudo;
      $_SESSION['mdp'] = $mdp;

      $trouve=true;

      header('../view/main.view.html');

    }

  }
  /*
  else {
    echo ' La combinaison pseudo, mot de passe est erronée';
  }
  */


























}






?>
