<?php
include 'controller/liste_controller.php';
// Récupérer l'ID du personnage à partir de l'URL
$id = $_GET['id'];

// Rechercher le personnage correspondant dans votre tableau de personnages
$personnage = null;  // La variable $personnage est initialisée à null. Cela servira à stocker le personnage trouvé, s'il existe.
foreach ($personnages as $p) {
   // Parcourir tous les personnages dans le tableau $personnages
   if ($p['id'] == $id) {
      // Si l'identifiant du personnage correspond à l'identifiant recherché ($id)
      $personnage = $p;  // Stocker le personnage dans la variable $personnage
      break;  // Sortir de la boucle foreach
   }
}

// Vérifier si le personnage a été trouvé
if ($personnage) {
   // Afficher les valeurs "atk", "life" et "color" dans un nouveau tableau
?>

   <h3 class="text-center mt-5">Détails du personnage <?php echo $personnage['name']; ?></h3>
   <table class="table table-hover mt-5 mb-5 mx-auto w-50 shadow">
      <thead class="table-dark">
         <tr>
            <th>Atk</th>
            <th>Life</th>
            <th>Color</th>
            <th>Modifier</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td><?php echo $personnage['atk']; ?></td>
            <td><?php echo $personnage['life']; ?></td>
            <td><?php echo $personnage['color']; ?></td>
            <td><a href="index.php?update=<?php echo $id; ?>" class="btn btn-primary">Modifier</a></td>
         </tr>
      </tbody>
   </table>

   <div class="text-center">
      <a href="index.php?list" class="btn btn-primary mt-5">Retour</a>
   </div>
<?php
} else {
   // Si le personnage n'a pas été trouvé, afficher un message d'erreur
?>
   <div class="text-center">
      <p class="mt-5">Personnage introuvable</p>
   </div>
<?php
}

?>