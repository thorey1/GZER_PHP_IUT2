<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Gzer</title>
  <link rel="stylesheet" href="../view/css/main.view.styles.css" />
</head>

<body>


</head>
<body>

  <div class="topnav">
    <a class="active" href="../controler/main.ctrl.php">GZER</a>
    <a href="../controler/deposer_annonce.ctrl.php">Déposer une annonce</a>
    <a href="../controler/annonces.ctrl.php">Annonces</a>
    <a href="../controler/seconnecter.ctrl.php">Se connecter</a>
  </div>

  <div class="navbar">
    <a href="../view/infos.view.php">Informations légales</a>
    <a href="../view/a_propos.view.php">A propos</a>
  </div>


  <div id=container style="padding-left:16px">
    <div id="map">

      <h3>Annonces par zones</h3>
      <img src="../view/Quartiers_Grenoble.png" width="480" height="630" alt="Quartiers_Grenoble" usemap="#grenoblemap">

      <map name="grenoblemap">
        <area shape="rect" coords="30,30,140,80" alt="polygone_scientifique" href="annonces.ctrl.php?quartier=Polygone Scientifique">
        <area shape="rect" coords="160,65,190,140" alt="Esplanade" href="annonces.ctrl.php?quartier=Esplanade">
        <area shape="rect" coords="200,80,270,100" alt="Bastille" href="annonces.ctrl.php?quartier=Bastille">
        <area shape="rect" coords="230,110,310,140" alt="Saint_Laurent" href="annonces.ctrl.php?quartier=Saint-Laurent">
        <area shape="rect" coords="330,70,385,125" alt="Ile_verte" href="annonces.ctrl.php?quartier=Ile verte">
        <area shape="rect" coords="100,110,155,195" alt="Europole" href="annonces.ctrl.php?quartier=Europole">
        <area shape="rect" coords="65,200,150,250" alt="Chorrier_Berriat" href="annonces.ctrl.php?quartier=Chorrier-Berriat">
        <area shape="rect" coords="215,180,335,210" alt="Hyper_centre" href="annonces.ctrl.php?quartier=Hyper-centre">
        <area shape="rect" coords="55,280,225,305" alt="Grands_boulevards" href="annonces.ctrl.php?quartier=Grands Boulevards">
        <area shape="rect" coords="60,315,130,380" alt="Eaux_claires" href="annonces.ctrl.php?quartier=Eaux Claires">
        <area shape="rect" coords="210,320,300,350" alt="Capuche" href="annonces.ctrl.php?quartier=Capuche">
        <area shape="rect" coords="370,350,460,410" alt="Tesseire" href="annonces.ctrl.php?quartier=Teisseire">
        <area shape="rect" coords="320,240,435,310" alt="Exposition_bajatiere" href="annonces.ctrl.php?quartier=Exposition-Bajatière">
        <area shape="rect" coords="45,410,120,450" alt="Mistral" href="annonces.ctrl.php?quartier=Mistral">
        <area shape="rect" coords="155,380,230,450" alt="Allies_alpins" href="annonces.ctrl.php?quartier=Alliés-Alpins">
        <area shape="rect" coords="205,405,280,500" alt="Vigny_musset" href="annonces.ctrl.php?quartier=Vigny-Musset">
        <area shape="rect" coords="285,455,390,530" alt="Villeneuve_village_olympique" href="annonces.ctrl.php?quartier=Villeneuve - Village Olympique">
        <area shape="rect" coords="40,485,150,545" alt="Le_rondeau" href="annonces.ctrl.php?quartier=Le Rondeau">
        <area shape="rect" coords="180,560,410,590" alt="Alpexpo_grand'place" href="annonces.ctrl.php?quartier=Alpexpo-Grand Place">
      </map>

    </div>

    <div id="artistes">

      <h3> Annonces par style de musique</h3>
      <label for="artiste">Style recherché : </label>
      <br><br>
      <form action="main.ctrl.php">
        <select id="style" name="style">
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
        <input type="submit" value="Valider">
      </form>

    </div>

    <div id="materiel">
      <h3>Annonces par matériel</h3>
      <label for="materiel">Matériel recherché : </label>
      <br><br>
      <form action="main.ctrl.php">
        <select id="materiel" name="materiel">
          <option value="Casques et enceintes">Casques et enceintes</option>
          <option value="Home audio">Home audio</option>
          <option value="Accessoire audio">Accessoires audio</option>

        </select>
        <input type="submit" value="Valider">
      </form>
    </div>

  </div>

</body>
</html>
