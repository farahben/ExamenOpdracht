<!DOCTYPE html>
<html>
  <head>
    <title>
      Home
    </title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/footer.css">
    <link rel="stylesheet" type="text/css" href="styles/topnav.css">
    <link rel="stylesheet" type="text/css" href="styles/menu.css">
    <link rel="stylesheet" type="text/css" href="styles/header.css">
    <link rel="stylesheet" type="text/css" href="styles/versheid.css">
    <link rel="stylesheet" type="text/css" href="styles/gridContainer1.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic SC">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
    </style>
  </head>
  <body>
    <div id="gridContainer1">
      <div id="myTopnav" class="topnav">
        <a href="home.php" class="active">HOME</a>
        <a href="menu.php">MENU</a>
        <a href="about.php">ABOUT</a>
        <a href="contact.php">CONTACT</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
      </div>
      <div id="header">
        <div id="header-img">
          <img src="images/header.jpg">
          <div class="centered"><a href="menu.php">LAAT ME DE MENU ZIEN</a></div>
        </div>
      </div>
      <script>
        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
      </script>
      <div id="versheid">
        <div id="versheid-title">
          <h1>
            Versheid
          </h1>
        </div>
        <div id="versheid-text">
          <p>
             ONZE CRÊPES WORDEN VERS GEMAAKT MET VERSE INGREDIËNTEN EN OVERHEERLIJKE TOPPINGS. <br>VERS BEREIDE CRÊPES MET VERSCHILLENDE OVERHEERLIJKE TOPPINGS.
            NAAST ONZE OVERHEERLIJKE CRÊPES HEBBEN
              WIJ OOK KOUDE EN WARME DRANKJES.<br>KOM GERUST LANGS VOOR EEN ONTBIJT, OF EEN OVERHEERLIJKE TUSSENDOORTJE, BIJ ONS BEN JE OP HET JUISTE ADRES.
              <br>TOT SNEL!
            <br><br>
            THE CRÊPE ROOM.
          </p>
        </div>
        <div id="versheid-video">
          <video width="1000" height="500" controls>
             <source src="images/movie.mp4" type="video/mp4">
          </video>
        </div>
      </div>
      <div id="footer">
        <p>
          The Crepe Room
        </p>
      </div>
    </div>
  </body>
</html>