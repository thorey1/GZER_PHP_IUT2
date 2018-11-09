<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../view/css/deposer_annonce.view.styles.css" />
  <title>Gzer - annonces</title>
</head>
<body>
  <div class="topnav">
    <a href="../controler/main.ctrl.php">GZER</a>
    <a href="../controler/deposer_annonce.ctrl.php">Déposer une annonce</a>
    <a class="active" href="../controler/annonces.ctrl.php">Annonces</a>
    <a href="../controler/seconnecter.ctrl.php">Se connecter</a>
    <a href="../controler/inscription.ctrl.php">Inscription</a>
    <a href="../controler/deconnexion.ctrl.php">Se déconnecter</a>
  </div>

  <div class="navbar">
    <a href="../view/infos.view.php">Informations légales</a>
    <a href="../view/a_propos.view.php">A propos</a>
  </div>

  <div id=container style="padding-left:16px">
    <?php if(isset($annonce)) { ?>
      <h2><?= $annonce->getTitreA() ?></h2>
      <h3><?= $annonce->getStyleA() ?></h3>
      <h3>Prix : <?= $annonce->getPrixA() ?>€</h3>
      <h3>Quartier : <?= $annonce->getLocalisationA() ?></h3>
      <br>
      <h3>Artiste : <?= $annonce->getAuteurA() ?></h3>
      <h3>Date de mise en ligne : <?= $annonce->getDateA() ?></h3>
      <h3>Envoyer un mail à l'adresse suivante : <?= $membre->getMailM() ?></h3>
    <?php } else if ($erreur == 0) { ?>
      <h2>Une erreur est survenue</h2>
    <?php } ?>

  </div>
</body>
</html>
