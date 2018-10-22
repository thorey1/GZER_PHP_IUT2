<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../view/css/deposer_annonce.view.styles.css" />
  <title>Gzer - déposer une annonce</title>
</head>
<body>
  <div class="topnav">
    <a href="#home">GZER</a>
    <a class="active" href="#boutique">Déposer une annonce</a>
    <a href="#annonces">Annonces</a>
    <a href="#se_connecter">Se connecter</a>
  </div>

  <div class="navbar">
    <a href="#questions">Des questions ?</a>
    <a href="#infos">Informations légales</a>
    <a href="#a_propos">A propos</a>
  </div>

  <div id=container style="padding-left:16px">

    <h2>Déposer une annonce</h2>

    <h3>Votre annonce</h3>
    Catégorie
    <br><br>
    <form action="">
      <select id="categorie" name="categorie">
        <option value="prestation">Prestation</option>
        <option value="casques_enceintes">Casques et enceintes</option>
        <option value="home_audio">Home audio</option>
        <option value="accessoires">Accessoires audio</option>

      </select>
      <br><br>

      Titre de l'annonce <br>
      <input type="text" name="titre" value=""><br><br>
      Prix <br>
      <input type="text" name="prix" value=""><br><br>
      Adresse à Grenoble <br>
      <input type="text" name="adresse" value=""><br>

      <br><br>

      <input type="submit" name="" value="Valider l'annonce">
    </form>
  </div>

</body>
</html>
