// Récupération des éléments nécessaires
const loadMoreBtn = document.getElementById('load-more');
const menuContainer = document.querySelector('.menu');

// Événement de clic sur le bouton "Charger plus"
loadMoreBtn.addEventListener('click', () => {
  // Effectuer une requête AJAX pour récupérer plus de données
  // Par exemple, vous pouvez utiliser fetch() ou axios()

  // Ajouter les données récupérées à votre page
  const newMenuItems = `
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
  <img src="/Images/mexianTacos.jpg" alt="mexianTacos">
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
  <img src="/Images/fraisier.jpg" alt="Fraisier">
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

  `;
  menuContainer.innerHTML += newMenuItems;
});



// Intercepter l'événement de soumission du formulaire de recherche par mot clé
document.querySelector('#search-form').addEventListener('submit', function(event) {
  event.preventDefault();

  // Récupérer la valeur de l'entrée de texte
  const searchKeyword = document.querySelector('#search-keyword').value;

  // Effectuer une requête AJAX pour récupérer les plats correspondants
  axios.get('/search', {
    params: {
      keyword: searchKeyword
    }
  })
  .then(function(response) {
    // Afficher les résultats de la recherche
    console.log(response.data);
  })
  .catch(function(error) {
    console.error(error);
  });
});
