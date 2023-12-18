<?php
// Connexion à la base de données
$conn = mysqli_connect("localhost", "root", "", "dishcovery");

// Vérification de la connexion
if (!$conn) {
    die("La connexion a échoué: " . mysqli_connect_error());
}

// Récupération des paramètres de recherche
$mc = $_POST["mc"];
$ing = $_POST["ing"];

// Requête de recherche
$sql =( "SELECT * FROM plat WHERE nom_plat LIKE '%{$mc}%' OR ingredients LIKE '%{$ing}%'");

$result = mysqli_query($conn, $sql);

// Affichage des résultats

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='search-results'>";
        echo "<div class='menu-item'>";
            echo "<img src='".$row["image"]."' alt='".$row["nom_plat"]."'>";
            echo "<div class='menu-item-details'>";
            echo "<h3>".$row["nom_plat"]."</h3>";
            echo "<p>Temps de préparation: ".$row["temps_prep"]." minutes</p>";
            echo "<p>Ingrédients: ".$row["ingredients"]."</p>";
            echo "</div>";
            echo "</div>";
        echo "</div>";
        
    }
} else {
    echo "Aucun plat trouvé.";
}

// Fermeture de la connexion
mysqli_close($conn);
?>