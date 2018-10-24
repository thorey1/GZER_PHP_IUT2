<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../view/css/deposer_annonce.view.styles.css" />
  <title>Gzer - annonces</title>
</head>
<body>
  <div class="topnav">
    <a href="#home">GZER</a>
    <a href="#boutique">Déposer une annonce</a>
    <a class="active" href="#annonces">Annonces</a>
    <a href="#se_connecter">Se connecter</a>
  </div>

  <div class="navbar">
    <a href="#questions">Des questions ?</a>
    <a href="#infos">Informations légales</a>
    <a href="#a_propos">A propos</a>
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
    <h2>Toutes les annonces : <?= $categorie ?></h2>

    <?php if(isset($annoncesCat)) {foreach ($annoncesCat as $annonceCat) { ?>
      <a href="#"><?= $annonceCat->getAuteurA() ?> - <?= $annonceCat->getTitreA() ?></a>
      <br><br>
    <?php } } ?>

    <?php if(isset($annonces)) {foreach ($annonces as $annonce) { ?>
      <a href="#"><?= $annonce->getAuteurA() ?> - <?= $annonce->getTitreA() ?></a>
      <br><br>
    <?php } } ?>

  </body>
  </html>
