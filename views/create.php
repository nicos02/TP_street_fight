<h1 class="text-center mt-5">Création du personnage</h1>
<div class="form_container">
      <form class="text-center mt-5 form" id="form_create" action="controller/insert_controller.php" method="post">
         <div class="form-group">
            <label class="form-label" for="name">Nom</label>
            <br>
            <input type="text" name="name" id="name" required>
         </div>
         <div class="form-group">
            <label class="form-label mt-3" for="atk">Atk</label>
            <br>
            <input type="number" name="atk" id="atk" required>
         </div>
         <div class="form-group">
            <label class="form-label mt-3" for="life">Vie</label>
            <br>
            <input type="number" name="life" id="life" required>
         </div>
         <div class="form-group mb-5">
            <label class="form-label mt-3" for="color">Couleur</label>
            <br>
            <input type="text" name="color" id="color" required>
         </div>
         <button type="submit" class="btn btn-primary">Créer Personnage</button>
      </form>
   
</div>