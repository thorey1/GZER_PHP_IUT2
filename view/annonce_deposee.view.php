<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../view/css/deposer_annonce.view.styles.css" />
  <title>Gzer - informations légales</title>
</head>
<body>
  <div class="topnav">
    <a href="../controler/main.ctrl.php">GZER</a>
    <a class="active" href="../controler/deposer_annonce.ctrl.php">Déposer une annonce</a>
    <a href="../controler/annonces.ctrl.php">Annonces</a>
    <a href="../controler/seconnecter.ctrl.php">Se connecter</a>
  </div>

  <div class="navbar">
    <a href="../view/infos.view.php">Informations légales</a>
    <a href="../view/a_propos.view.php">A propos</a>
  </div>

  <?php
  require_once('../model/GzerDAO.class.php');
  $config = parse_ini_file('../config/config.ini');
  $DAO = new GzerDAO($config['database_path']);
  $DAO->insertAnnonce($num, $titre, $prix, $localisation, $auteur, $date, $categorie, $style);
  ?>

  <div id=container style="padding-left:16px">

    <h2>Merci, votre annonce a été déposée</h2>

   </div>
</body>
</html>
