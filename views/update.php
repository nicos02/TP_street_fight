<?php 
include 'models/modify.php';
include 'controller/modify_controller.php';

?>

<!-- Formulaire pour modifier un personnage -->
<h1 class="text-center mt-5">Modification d'un personnage</h1>
<div class="form_container">
      <form class="text-center mt-5 form" id="form_update" method="post">
         <div class="form-group">
            <label class="form-label" for="name">Nom</label>
            <br>
            <input type="text" name="name" id="name" value="<?php echo $existingData['name']; ?>" required>
         </div>
         <div class="form-group">
            <label class="form-label mt-3" for="atk">Atk</label>
            <br>
            <input type="number" name="atk" id="atk" value="<?php echo $existingData['atk']; ?>" required>
         </div>
         <div class="form-group">
            <label class="form-label mt-3" for="life">Vie</label>
            <br>
            <input type="number" name="life" id="life" value="<?php echo $existingData['life']; ?>"required>
         </div>
         <div class="form-group mb-5">
            <label class="form-label mt-3" for="color">Couleur</label>
            <br>
            <input type="text" name="color" id="color" value="<?php echo $existingData['color']; ?>" required>
         </div>

         <?php if (!empty($message)) : ?>
    <div class="success-message bg-success text-white mb-5 p-3""><?php echo $message; ?></div>
    <script>
        setTimeout(function() {
            // Redirection vers la page de détails d'un personnage
            window.location.href = 'index.php?id=<?php echo $id; ?>';
        }, 3000); // Temporisation de 3 secondes avant la redirection
    </script>
<?php endif; ?>
         <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
   
</div>