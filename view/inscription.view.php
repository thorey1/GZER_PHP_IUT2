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
  </div>

  <div class="navbar">
    <a href="../view/infos.view.php">Informations légales</a>
    <a href="../view/a_propos.view.php">A propos</a>
  </div>

  <div id=container style="padding-left:16px">
    <div class="loginbox">

      <h1>Inscrivez-vous ici</h1>

      <form action="../controler/inscription.ctrl.php">

        <p>Pseudo</p>

        <input type="text" name="pseudo" placeholder="Entrer le pseudo">

        <p>Mot de passe</p>

        <input type="password" name="mdp" placeholder="Entrer le mot de passe">

        <p>Retaper votre mot de passe</p>

        <input type="password" name="rmdp" placeholder="Retaper le mot de passe">

        <p>Adresse Mail</p>

        <input type="email" name="mail" placeholder="aa@bb.cc">

        <br><br>

        <input type="submit" name="" value="Créer votre compte GZER">

        <br><br>


      </form>

    </div>
  </div>

</body>
</html>
