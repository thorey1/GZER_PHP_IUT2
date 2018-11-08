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
  </div>

  <div class="navbar">
    <a href="../view/infos.view.php">Informations légales</a>
    <a href="../view/a_propos.view.php">A propos</a>
  </div>

  <div id=container style="padding-left:16px">
    <br><br>
    Que recherchez-vous ?
    <br><br>
    <form action="annonces.ctrl.php">

      <!-- <input type="text" name="mot-cle" value=""><br><br> -->
      <select id="categorie" name="categorie">
        <option value="" selected>Séléctionner une catégorie</option>
        <option value="Casques et enceintes">Casques et enceintes</option>
        <option value="Prestation">Prestation</option>
        <option value="Home audio">Home audio</option>
        <option value="Accessoire audio">Accessoires audio</option>

      </select>
      <br><br>

      <input type="submit" value="Valider la recherche">
    </form>
    <br><br>
    <h2>Toutes les annonces : <?= $categorie ?>  <?= $quartier ?></h2>

    <?php if(isset($annoncesCat)) {foreach ($annoncesCat as $annonceCat) { ?>
      <a href="../controler/annonce.ctrl.php?numA=<?= $annonceCat->getNumA() ?>"><?= $annonceCat->getAuteurA() ?> - <?= $annonceCat->getTitreA() ?></a>
      <br><br>
    <?php } } ?>

    <?php if(isset($annoncesQuart)) {foreach ($annoncesQuart as $annonceQuart) { ?>
      <a href="../controler/annonce.ctrl.php?numA=<?= $annonceQuart->getNumA() ?>"><?= $annonceQuart->getAuteurA() ?> - <?= $annonceQuart->getTitreA() ?></a>
      <br><br>
    <?php } } ?>

    <?php if(isset($annonces)) {foreach ($annonces as $annonce) { ?>
      <a href="../controler/annonce.ctrl.php?numA=<?= $annonce->getNumA() ?>"><?= $annonce->getAuteurA() ?> - <?= $annonce->getTitreA() ?></a>
      <br><br>
    <?php } } ?>

    <?php if(isset($annoncesStyle)) {foreach ($annoncesStyle as $annonceStyle) { ?>
      <a href="../controler/annonce.ctrl.php?numA=<?= $annonceStyle->getNumA() ?>"><?= $annonceStyle->getAuteurA() ?> - <?= $annonceStyle->getTitreA() ?></a>
      <br><br>
    <?php } } ?>

    <?php if((!isset($annonces) || count($annonces) == 0) && (!isset($annoncesQuart) || count($annoncesQuart) == 0) && (!isset($annoncesCat) || count($annoncesCat) == 0) && (!isset($annoncesStyle) || count($annoncesStyle) == 0)) { ?>
      <h3>Aucune annonce disponible</h3>
    <?php } ?>
  </div>
  </body>
  </html>
