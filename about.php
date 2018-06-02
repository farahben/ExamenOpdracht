<!DOCTYPE html>
<html>
  <head>
    <title>
      About
    </title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/topnav.css">
    <link rel="stylesheet" type="text/css" href="styles/About.css">
    <link rel="stylesheet" type="text/css" href="styles/footer.css">
    <link rel="stylesheet" type="text/css" href="styles/gridContainer3.css">
    <link rel="stylesheet" type="text/css" href="styles/openinghours.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic SC">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    </style>
  </head>
  <body>
    <div id="gridContainer3">
      <div id="myTopnav" class="topnav">
        <a href="home.php" class="active">HOME</a>
        <a href="menu.php">MENU</a>
        <a href="about.php">ABOUT</a>
        <a href="contact.php">CONTACT</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
      </div>
      <div id="about">
        <div id="about-title">
          <h1>
            ABOUT
          </h1>
        </div>
        <div id="about-text">
          <p>
            The Crêpe Room is een plaats waar u kunt genieten van vers bereide crêpes. Het maakt niet uit op welk uur van de dag dat is, alles staat altijd klaar. Een leuke en ontspannen plaats dat in no-time de heerlijkste crêpes voor u klaarmaakt uit verschillende soorten toppings.
            U kunt bij ons ook heerlijke dranken krijgen zowel koud als warm!
            <br><br>
            <img src="images/restaurant.jpg" alt="restaurant">
            <b>
              DE CHEF?
            </b> De vakkundige Rachid O.
            <br><br>
            THE CRÊPE ROOM.
          </p>
        </div>
        <div id="about-img1">
          <img src="images/hallo.jpg" alt="hallo">
        </div>
        <div id="openinghours">
          <div id="openinghours-title">
            <h1>
                OPENINGSUREN
            </h1>
          </div>
          <div id="openinghours-list1">
            <ul>
              <li>Ma & Di GESLOTEN</li>
              <li>woensdag 11:00 - 22:00</li>
              <li>donderdag 11:00 - 22:00</li>
            </ul>
          </div>
           <div id="openinghours-list2">
             <ul>
               <li>vrijdag 11:00 - 22:00</li>
               <li>zaterdag 11:00 - 22:00</li>
               <li>zondag gesloten</li>
             </ul>
          </div>
          <div id="note" class="info">
            <p>
              <strong>
                Info!
              </strong> 
              Openingstijden kunnen op feestdagen afwijken. Check regelmatig onze Facebookpagina om op de hoogte te blijven.</p>
          </div>
        </div>
      </div>
      <div id="footer">
        <p>
          The Crepe Room
        </p>
      </div>
    </div>
  </body>
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
</html>