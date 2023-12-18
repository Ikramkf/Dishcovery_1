
<?php
session_start();
if (!isset($_SESSION["user"])){
    header("Location: login.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Menu</title>
   <link rel="stylesheet" href="menu.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
   <script src="menu.js"></script>
</head>
<header>
  <header class="site-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header-logo">
                    <a href="">Dishcovery</a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="main-navigation">
                    <nav class="header-menu">
                        <ul class="menu food-nav-menu">
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#menu">Menu</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#blog">Blog</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<body>
  <h1>Recherche de recettes</h1>
	<form method="post" action="recherche.php">
    <div class="search">
      <label for="mc">Mot-clé :</label>
      <input type="text" name="mc" id="mc"><br>
      <label for="ing">Ingrédient :</label>
      <input type="text" name="ing" id="ing"><br>
      <button> recherche</button>
    </div>
   <div class="menu">
      <div class="menu-item">
        <img src="Images/pancakes.jpg" alt="pancakes">
        <div class="menu-item-details">
          <h3>Pancakes</h3>
          <p>Temps de préparation: 45 minutes</p>
          <p>Ingrédients: poulet, poivrons, oignons, riz</p>
        </div>
      </div>
      <div class="menu-item">
        <img src="Images/pestopasta.jpg" alt="Pesto Pasta">
        <div class="menu-item-details">
          <h3>Pesto pasta</h3>
          <p>Temps de préparation: 60 minutes</p>
          <p>Ingrédients: poisson, légumes, quinoa</p>
        </div>
      </div>
      <div class="menu-item">
        <img src="Images/burger.jpg" alt="burger">
        <div class="menu-item-details">
          <h3>Burger</h3>
          <p>Temps de préparation: 45 minutes</p>
          <p>Ingrédients: poulet, poivrons, oignons, riz</p>
        </div>
      </div>
      <div class="menu-item">
        <img src="Images/salade1.jpg" alt="salade1">
        <div class="menu-item-details">
          <h3>Salade Indienne</h3>
          <p>Temps de préparation: 45 minutes</p>
          <p>Ingrédients: poulet, poivrons, oignons, riz</p>
        </div>
      </div>
      <div class="menu-item">
        <img src="Images/mexianTacos.jpg" alt="mexianTacos">
        <div class="menu-item-details">
          <h3>Mexian Tacos</h3>
          <p>Temps de préparation: 45 minutes</p>
          <p>Ingrédients: poulet, poivrons, oignons, riz</p>
        </div>
      </div>
      <div class="menu-item">
        <img src="Images/Boules de viandes.jpg" alt="Boules de viandes">
        <div class="menu-item-details">
          <h3>Boules de viandes</h3>
          <p>Temps de préparation: 45 minutes</p>
          <p>Ingrédients: poulet, poivrons, oignons, riz</p>
        </div>
      </div>
      <div class="menu-item">
        <img src="Images/ramen1.jpg" alt="ramen1">
        <div class="menu-item-details">
          <h3>Ramen</h3>
          <p>Temps de préparation: 45 minutes</p>
          <p>Ingrédients: poulet, poivrons, oignons, riz</p>
        </div>
      </div>
      <div class="menu-item">
        <img src="Images/fraisier.jpg" alt="Fraisier">
        <div class="menu-item-details">
          <h3>Fraisier</h3>
          <p>Temps de préparation: 45 minutes</p>
          <p>Ingrédients: poulet, poivrons, oignons, riz</p>
        </div>
      </div>
      <div class="menu-item">
        <img src="Images/indianpizza.jpg" alt="indianpizza">
        <div class="menu-item-details">
          <h3>Indian Pizza</h3>
          <p>Temps de préparation: 45 minutes</p>
          <p>Ingrédients: poulet, poivrons, oignons, riz</p>
        </div>
      </div>
    
    </div>
    <div class="pagination">
      <button id="load-more">Charger plus</button>
    </div>
  </form>
  <footer>
    <div class="social-links">
      <a href="https://www.facebook.com/discovery" target="_blank"><i class="fab fa-facebook-f"></i></a>
      <a href="https://twitter.com/discovery" target="_blank"><i class="fab fa-twitter"></i></a>
      <a href="https://www.instagram.com/discovery" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>
  
      <div class="copy">
        <p>&copy; 2023 Discovery. Tous droits réservés.</p>
      </div>
      <div class="feedback">
        <h4>Donnez votre avis a propos DISHCOVERY</h4>
        <form>
          <textarea placeholder="Écrivez votre commentaire ici"></textarea>
          <button type="submit">Envoyer</button>
        </form>
      </div>
  
  </footer>
</body>




</html>