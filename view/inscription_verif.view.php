<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Gzer inscription</title>
  <link rel="stylesheet" href="../view/css/deposer_annonce.view.styles.css" />
</head>
<body>

  <div class="topnav">
    <a href="../controler/main.ctrl.php">GZER</a>
    <a href="../controler/deposer_annonce.ctrl.php">Déposer une annonce</a>
    <a href="../controler/annonces.ctrl.php">Annonces</a>
    <a href="../controler/seconnecter.ctrl.php">Se connecter</a>
    <a class="active" href="../controler/inscription.ctrl.php">Inscription</a>
    <a href="../controler/deconnexion.ctrl.php">Se déconnecter</a>
  </div>

  <div class="navbar">
    <a href="../view/infos.view.php">Informations légales</a>
    <a href="../view/a_propos.view.php">A propos</a>
  </div>

  <div id=container style="padding-left:16px">

    <?php if($pb==0){ ?>
      <?php require_once('../model/GzerDAO.class.php'); ?>
      <?php $config = parse_ini_file('../config/config.ini'); ?>
      <?php $DAO = new GzerDAO($config['database_path']); ?>
      <?php $DAO->insertMembre($numM, $pseudoM, $mailM, $mdpM); ?>
      <p>Vous êtes bien inscrit</p>
    <?php } else { ?>
      <p>Problème dans les renseignements</p>
    <?php } ?>

  </div>

</body>
</html>
