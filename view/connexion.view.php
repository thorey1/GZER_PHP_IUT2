<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Gzer connexion</title>
  <link rel="stylesheet" href="../view/css/deposer_annonce.view.styles.css" />
</head>
<body>

  <div class="topnav">
    <a href="../controler/main.ctrl.php">GZER</a>
    <a href="../controler/deposer_annonce.ctrl.php">Déposer une annoce</a>
    <a href="../controler/annonces.ctrl.php">Annonces</a>
    <a class="active" href="../controler/seconnecter.ctrl.php">Se connecter</a>
    <a href="../controler/inscription.ctrl.php">Inscription</a>
    <a href="../controler/deconnexion.ctrl.php">Se déconnecter</a>
  </div>

  <div class="navbar">
    <a href="../view/infos.view.php">Informations légales</a>
    <a href="../view/a_propos.view.php">A propos</a>
  </div>

  <div id=container style="padding-left:16px">
    <div class="loginbox">

      <h1>Connectez-vous ici</h1>

      <form action="../controler/seconnecter.ctrl.php" method="post">

        <p>Pseudo</p>

        <input type="text" name="pseudoM" placeholder="Entrer le pseudo">

        <p>Mot de passe</p>

        <input type="password" name="mdpM" placeholder="Entrer le mot de passe">

        <br><br>

        <input type="submit" name="" value="Se connecter">

        <br><br>

        <?php if (isset($message)) { ?>
          <p><?= $message ?></p>
        <?php } ?>

        <a href="../controler/inscription.ctrl.php">Vous n'avez pas encore de compte ?</a>

      </form>

    </div>
  </div>

</body>
</html>
