<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../view/css/deposer_annonce.view.styles.css" />
  <title>Gzer - déposer une annonce</title>
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

  <div id=container style="padding-left:16px">

    <h2>Déposer une annonce</h2>

    <h3>Votre annonce</h3>
    Catégorie
    <br><br>
    <?php if (((isset($_GET['categorie']) && $_GET['categorie'] == 'Prestation') && isset($_GET['style']) && isset($_GET['titre']) && isset($_GET['prix']) && isset($_GET['localisation'])) || ((isset($_GET['categorie']) && $_GET['categorie'] != 'Prestation') && (isset($_GET['style']) && $_GET['style'] == '') && isset($_GET['titre']) && isset($_GET['prix']) && isset($_GET['localisation']))) {
      $redirection = "../view/annonce_deposee.view.php";
    } else {
      $redirection = "deposer_annonce.ctrl.php";
    }
    var_dump($redirection);
    ?>
    <form action="<?= $redirection ?>">
      <select id="categorie" name="categorie">
        <option value="Prestation">Prestation</option>
        <option value="Casques et enceintes">Casques et enceintes</option>
        <option value="Home audio">Home audio</option>
        <option value="Accessoires audio">Accessoires audio</option>

      </select>
      <br><br>
      Style pour une annonce de prestation
      <br><br>
      <select id="style" name="style">
        <option value="" selected></option>
        <option value="Blues">Blues</option>
        <option value="Disco">Disco</option>
        <option value="Funk">Funk</option>
        <option value="Jazz">Jazz</option>
        <option value="Metal">Metal</option>
        <option value="Pop">Pop</option>
        <option value="Rap">Rap</option>
        <option value="Rock">Rock</option>
        <option value="Reggae">Reggae</option>
        <option value="Gospel">Gospel</option>
        <option value="Soul">Soul</option>

      </select>
      <br><br>

      Titre de l'annonce <br><br>
      <input type="text" name="titre" value=""><br><br>
      Prix <br><br>
      <input type="text" name="prix" value="">€<br><br>
      Quartier à Grenoble <br><br>
      <select id="localisation" name="localisation">
        <option value="Polygone Scientifique"></option>
        <option value="Esplanade">Esplanade</option>
        <option value="Bastille">Bastille</option>
        <option value="Saint-Laurent">Saint - Laurent</option>
        <option value="Ile verte">L'Ile Verte</option>
        <option value="Europole">Europole</option>
        <option value="Chorrier-Berriat">Chorrier - Berriat</option>
        <option value="Hyper-centre" selected>Hyper - centre</option>
        <option value="Grands Boulevards">Grands boulevards</option>
        <option value="Eaux Claires">Eaux Claires</option>
        <option value="Capuche">Capuche</option>
        <option value="Teisseire">Tesseire</option>
        <option value="ile_verte">L'Ile Verte</option>
        <option value="Exposition-Bajatière">Exposition - Bajatiere</option>
        <option value="Mistral">Mistral</option>
        <option value="Alliés-Alpins">Alliés-Alpins</option>
        <option value="Villeneuve - Village Olympique">Villeneuve - Village Olympique</option>
        <option value="Le Rondeau">Le Rondeau</option>
        <option value="Alpexpo-Grand Place">Alpexpo - Grand'place</option>

      </select>

      <br><br>

      <input type="submit" name="" value="Valider l'annonce">
    </form>
  </div>

</body>
</html>
