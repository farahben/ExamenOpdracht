<?php
include_once("database.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Menu
    </title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/footer.css">
    <link rel="stylesheet" type="text/css" href="styles/topnav.css">
    <link rel="stylesheet" type="text/css" href="styles/menu.css">
    <link rel="stylesheet" type="text/css" href="styles/gridContainer2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic SC">

    <style>
    </style>
  </head>
  <body>
    <div id="gridContainer2">
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
      <div id="menu-title">
        <h1>
          THE MENU
        </h1>
      </div>
      <div id="menu-tabs">
        <button class="tablink" onclick="openPage('pannenkoeken', this, '#f44336')" id="defaultOpen">PANNENKOEKEN</button>
        <button class="tablink" onclick="openPage('brusselsewafels', this, '#f44336')">BRUSSELSE WAFELS</button>
        <button class="tablink" onclick="openPage('smoothies', this, '#f44336')">SMOOTHIES</button>
        <button class="tablink" onclick="openPage('warmedranken', this, '#f44336')">WARME DRANKEN</button>
        <div id="pannenkoeken" class="tabcontent">
          <?php
            for ($i = 0; $i < count($products); ++$i)
            {
              $productItem = $products[$i];
              $productType = $productItem["typeProduct"];
              if($productType == "pannenkoeken") {
              
          ?>
          <div class = "ProductItem">
            <a href="product.php?id=<?= $i; ?>">
              <span>
                <?= $productItem["price"]; ?>
               </span>
               <h1>
                 <?= $productItem["title"]; ?>
               </h1>
               <p>
                  <?= $productItem["text"]; ?>
               </p>   
            </a>
            <hr>
          </div>
          <?php
              }
            }
          ?>
        </div>
        <div id="brusselsewafels" class="tabcontent">
          <?php
            for ($i = 0; $i < count($products); ++$i)
            {
              $productItem = $products[$i];
              $productType = $productItem["typeProduct"];
              if($productType == "wafels") {
              
          ?>
          <div class = "ProductItem">
						<a href="product.php?id=<?= $i; ?>">
              <span>
                <?= $productItem["price"]; ?>
              </span>
						  <h1>
                <?= $productItem["title"]; ?>
						  </h1>
							<p>
                <?= $productItem["text"]; ?>
							</p>
						</a>
            <hr>
					</div>
          <?php
                  }
                }
              ?>
        </div>
        <div id="smoothies" class="tabcontent">
          <?php
            for ($i = 0; $i < count($products); ++$i)
            {
              $productItem = $products[$i];
              $productType = $productItem["typeProduct"];
              if($productType == "smoothies") {
          ?>
          <div class = "ProductItem">
						<a href="product.php?id=<?= $i; ?>">
              <span>
                 <?= $productItem["price"]; ?>
              </span>
						  <h1>
                <?= $productItem["title"]; ?>
						  </h1>
							<p>
                <?= $productItem["text"]; ?>
							</p>
						</a>
            <hr>
					</div>
            <?php
                 } 
               }
              ?>
        </div>
        <div id="warmedranken" class="tabcontent">
          <?php
              for ($i = 0; $i < count($products); ++$i)
            {
              $productItem = $products[$i];
              $productType = $productItem["typeProduct"];
              if($productType == "warmedranken") {
          ?>
          <div class = "ProductItem">
						<a href="product.php?id=<?= $i; ?>">
              <span>
                 <?= $productItem["price"]; ?>
              </span>
						  <h1>
                <?= $productItem["title"]; ?>
						  </h1>
							<p>
                <?= $productItem["text"]; ?>
							</p>
						</a>
            <hr>
					</div>
            <?php
                } 
               }
              ?>
        </div>
      </div>
      <script>
        function openPage(pageName, elmnt, color) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
              tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablink");
          for (i = 0; i < tablinks.length; i++) {
              tablinks[i].style.backgroundColor = "";
          }
          document.getElementById(pageName).style.display = "block";
          elmnt.style.backgroundColor = color;
        }
        document.getElementById("defaultOpen").click();
      </script>  
      <div id="footer">
        <p>
          The Crepe Room
        </p>
      </div>
    </div>
  </body>
</html>