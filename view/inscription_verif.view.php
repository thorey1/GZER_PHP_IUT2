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
    <a href="../controler/deposer_annonce.ctrl.php">Déposer une annoce</a>
    <a href="../controler/annonces.ctrl.php">Annonces</a>
    <a class="active" href="../controler/seconnecter.ctrl.php">Se connecter</a>
    <a href="../controler/inscription.ctrl.php">Inscription</a>
  </div>

  <div class="navbar">
    <a href="../view/infos.view.php">Informations légales</a>
    <a href="../view/a_propos.view.php">A propos</a>
  </div>

  <div id=container style="padding-left:16px">
    <?php
      $pb=$_GET['pb'];
      if($pb==0){
        print "<p>Vous êtes bien inscrit</p>";
      } else if($pb==1){
        print "<p>Probleme dans les renseignements</p>";
      }
    ?>
  </div>

</body>
</html>
