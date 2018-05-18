<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/contact.css">
    <link rel="stylesheet" type="text/css" href="styles/topnav.css">
    <link rel="stylesheet" type="text/css" href="styles/gridContainer4.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic SC">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>
  <body>
    <div id="gridContainer4">
      <div id="myTopnav" class="topnav">
        <a href="index.php" class="active">HOME</a>
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
      <div id="contact">
        <div id="googleMap"></div>
        <script>
          function myMap() {
            var mapProp= {
            center:new google.maps.LatLng(51.1748764,4.3468642),
            zoom:18,
            };
            var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
            var marker = new google.maps.Marker({position: new google.maps.LatLng(51.1748764,4.3468642)});
            marker.setMap(map);
          }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYOtZSOMVTbEtveFOoJfIKaJn49ukUpZc&callback=myMap"></script>
        <div id="contact-title">
          <h1>
            CONTACT
          </h1>
        </div>
        <div id="contact-text">
          <p>
            Vind ons in de Wilrijdersstraat 1,
            2660 Hoboken of bel ons op het nummer +32 489 31 31 57<br><br>
            Heb je zin in een pannenkoek met je vrienden? Heb je iets te vieren? Ben je binnenkort jarig? Wij zorgen voor overheerlijke pannenkoeken en desserts!  <br> <br>
            <span><b>Reserveer</b> nu een tafel</span>
          </p>
        </div>
        <div id="contact-input">
          <form class="w3-container w3-card-4 w3-light-grey">
            <p>      
              <input class="w3-input w3-border-0" type="text" placeholder="NAAM" style="width:100%">
            </p>
            <p>      
              <input class="w3-input w3-border-0" type="text" placeholder="BERICHT">
            </p>
            <p>      
              <input class="w3-input w3-border-0" type="text" placeholder="BERICHT">
            </p>
            <p>
               <select class="w3-select w3-border" name="option">
                  <option value="" disabled selected>AANTAL MENSEN</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
            </p>
            <button class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">VERSTUUR</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>