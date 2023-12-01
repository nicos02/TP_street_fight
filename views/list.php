<?php include 'controller/liste_controller.php' ?>
<?php if (empty($personnages)) : ?> <!-- Si $personnages est vide alors on affiche ce message -->
   <div class="text-center">
         <p class="mt-5">Veuillez créer un personnage</p>
         <a href="index.php?create" class="btn btn-primary mt-5">Creer un personnage</a>
   </div>
<?php else : ?> <!-- Sinon on affiche le tableau -->
   <h3 class="text-center mt-5">Affichage des personnages</h3>
   <table class="table table-hover mt-5 mb-5 mx-auto w-75 shadow">
      <thead class="table-dark">
         <tr>
               <th>Name</th>
               <th>Atk</th>
               <th>Life</th>
               <th>Color</th>
         </tr>
      </thead>
      <tbody>
      <?php foreach ($personnages as $personnages) : ?> <!-- Parcourir chaque élément de l'array $personnages et stocker dans la variable $personnages -->
      <tr>
         <td><?php echo $personnages['name']; ?></td> <!-- Affichage du nom du personnage-->
         <td><?php echo $personnages['atk']; ?></td> <!-- Affichage de la force du personnage-->
         <td><?php echo $personnages['life']; ?></td> <!-- Affichage de la vie du personnage-->
         <td><?php echo $personnages['color']; ?></td> <!-- Affichage de la couleur du personnage-->
      </tr>
   <?php endforeach; ?>
      </tbody>
   </table>
<?php endif; ?>