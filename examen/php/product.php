<?php
  include_once("database.php");
  $productID = $_GET["id"];
  $productItem = $products[$productID];
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/topnav.css">
    <link rel="stylesheet" type="text/css" href="styles/gridContainer5.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic SC">
    <style>
    </style>
  </head>
  <body>
    <div id="gridContainer5">
      <div id="myTopnav" class="topnav">
        <a href="home.php" class="active">HOME</a>
        <a href="menu.php">MENU</a>
        <a href="about.php">ABOUT</a>
        <a href="contact.php">CONTACT</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
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
      <div id="content">
        <h1>
          <?= $productItem["title"]; ?>
			  </h1>
        <p>
          Bij the crepe room kan u volop genieten van onze lekkere pannenkoeken, smoothies en warme dranken.
          supplementen bij je bestelling zijn steeds beschikbaar. Gelieve dit steeds te melden bij je bestelling aan de serveerder.
          Alles wordt ter plaatse gemaakt door onze bedreven chef. Versheid is voor ons heel belangrijk
          <br><br>
          <b>Honger?</b> spring eens binnen!
          <br><br>
          Smakelijk!
        </p>
        <img src=images/<?= $productItem["image"]; ?>>
        <h2>
        Prijs
        </h2>
        <p>
          <?= $productItem["price"]; ?> <br>
          supplement (€0,50): slagroom<br>
          supplement (€1,00): 1 bol ijs 
        </p>
      </div>
    </div>
  </body>
</html> 