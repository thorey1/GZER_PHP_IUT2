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
    <a class="active" href="#home">GZER</a>
    <a href="#boutique">Déposer une annonce</a>
    <a href="#annonces">Annonces</a>
    <a href="#se_connecter">Se connecter</a>
  </div>

  <div class="navbar">
    <a href="#questions">Des questions ?</a>
    <a href="#infos">Informations légales</a>
    <a href="#a_propos">A propos</a>
  </div>


  <div id=container style="padding-left:16px">
    <div id="map">

      <h3>Annonces par zones</h3>
      <img src="../view/Quartiers_Grenoble.png" width="480" height="630" alt="Quartiers_Grenoble" usemap="#grenoblemap">

      <map name="grenoblemap">
        <area shape="rect" coords="30,30,140,80" alt="polygone_scientifique" href="">
        <area shape="rect" coords="160,65,190,140" alt="Esplanade" href="">
        <area shape="rect" coords="200,80,270,100" alt="Bastille" href="">
        <area shape="rect" coords="230,110,310,140" alt="Saint_Laurent" href="">
        <area shape="rect" coords="330,70,385,125" alt="Ile_verte" href="">
        <area shape="rect" coords="100,110,155,195" alt="Europole" href="">
        <area shape="rect" coords="65,200,150,250" alt="Chorrier_Berriat" href="">
        <area shape="rect" coords="215,180,335,210" alt="Hyper_centre" href="">
        <area shape="rect" coords="55,280,225,305" alt="Grands_boulevards" href="">
        <area shape="rect" coords="60,315,130,380" alt="Eaux_claires" href="">
        <area shape="rect" coords="210,320,300,350" alt="Capuche" href="">
        <area shape="rect" coords="370,350,460,410" alt="Tesseire" href="v">
        <area shape="rect" coords="320,240,435,310" alt="Exposition_bajatiere" href="">
        <area shape="rect" coords="45,410,120,450" alt="Mistral" href="">
        <area shape="rect" coords="155,380,230,450" alt="Allies_alpins" href="">
        <area shape="rect" coords="205,405,280,500" alt="Vigny_musset" href="">
        <area shape="rect" coords="285,455,390,530" alt="Villeneuve_village_olympique" href="">
        <area shape="rect" coords="40,485,150,545" alt="Le_rondeau" href="">
        <area shape="rect" coords="180,560,410,590" alt="Alpexpo_grand'place" href="">
      </map>

    </div>

    <div id="artistes">

      <h3>Artistes</h3>
      <label for="artiste">Style recherché : </label>
      <br><br>
      <form action="main.ctrl.php">
        <select id="style" name="style">
          <option value="blues">Blues</option>
          <option value="disco">Disco</option>
          <option value="funk">Funk</option>
          <option value="jazz">Jazz</option>
          <option value="metal">Metal</option>
          <option value="pop">Pop</option>
          <option value="rap">Rap</option>
          <option value="rock">Rock</option>
          <option value="reggae">Reggae</option>
          <option value="gospel">Gospel</option>
          <option value="soul">Soul</option>

        </select>
        <input type="submit" value="Valider">
      </form>

    </div>

    <div id="materiel">
      <h3>Matériel</h3>
      <label for="materiel">Matériel recherché : </label>
      <br><br>
      <form action="main.ctrl.php">
        <select id="style" name="style">
          <option value="casques_enceintes">Casques et enceintes</option>
          <option value="home_audio">Home audio</option>
          <option value="accessoires">Accessoires audio</option>

        </select>
        <input type="submit" value="Valider">
      </form>
    </div>

  </div>

</body>
</html>
