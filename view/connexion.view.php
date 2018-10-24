<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Gzer connexion</title>
  <link rel="stylesheet" href="../view/css/deposer_annonce.view.styles.css" />
</head>
<body>

  <div class="topnav">
    <a href="#home">GZER</a>
    <a href="#boutique">Déposer une annoce</a>
    <a href="#annonces">Annonces</a>
    <a class="active" href="http://www-etu-info.iut2.upmf-grenoble.fr/~hassanyo/github/GZER_PHP_IUT2/view/seconnecter.ctrl.php">Se connecter</a>
  </div>

  <div class="navbar">
    <a href="#questions">Des questions ?</a>
    <a href="#infos">Informations légales</a>
    <a href="#a_propos">A propos</a>
  </div>

  <div id=container style="padding-left:16px">
    <div class="loginbox">

      <h1>Connectez-vous ici</h1>

      <form action="../controler/seconnecter.ctrl.php">

        <p>Pseudo</p>

        <input type="text" name="pseudo" placeholder="Entrer le pseudo">

        <p>Mot de passe</p>

        <input type="password" name="mdp" placeholder="Entrer le mot de passe">

        <br><br>

        <input type="submit" name="" value="Se connecter">

        <br><br>

        <a href="?#">Mot de passe oublié ?</a><br>

        <a href="#">Vous n'avez pas encore de compte ?</a>

      </form>

    </div>
  </div>

</body>
</html>
