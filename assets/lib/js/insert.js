document.getElementById('form_create').addEventListener('submit', function(event) {
   event.preventDefault(); // Empêche le comportement par défaut du formulaire

// Récupérer les données du formulaire
var formData = new FormData(this);

// Créer un nouvel objet XMLHttpRequest qui permettra de communiquer avec le serveur
var xhr = new XMLHttpRequest();

// Définir la méthode HTTP et l'URL de la requête
xhr.open('POST', 'controller/insert_controller.php', true);

// Définir le gestionnaire d'événements onload pour la requête (onload c'est quand la requête est finie)
xhr.onload = function() {
   // Vérifier si le statut de la réponse est 200 (OK)
   if (xhr.status === 200) {
      // La réponse du serveur est stockée dans la variable 'response'
      var response = 'Personnage ajouté avec succès';

      // Afficher une alerte avec le message de réussite
      alert(response);

      // Réinitialiser le formulaire avec l'ID 'form_create'
      document.getElementById('form_create').reset();
   } else {
      // Afficher une alerte en cas d'erreur lors de la requête AJAX
      alert('Erreur lors de la requête AJAX');
   }
};

// Envoyer les données du formulaire via la requête XMLHttpRequest
xhr.send(formData);

});