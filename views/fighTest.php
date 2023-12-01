<?php include 'controller/fight_controller.php'; ?>
<div class="d-flex justify-content-center align-items-center">
   <div class="d-flex flex-column">
      <label for="perso"> choisissez votre personnage</label>
      <select name="perso" id="">
         <option value="ken"></option>
      </select>
      <img src="assets/lib/images/ryu.gif" alt="ryu">
   </div>

   <!-- tableau des caractéristiques -->
   <div>
      <table class="table">
         <thead>
            <tr>
               <th scope="col">Caractéristiques</th>
               <th scope="col"></th>
               <th scope="col">Caractéristiques</th>
            </tr>
         </thead>
      </table>
   </div>

   <div>
      <div class="d-flex flex-column">
         <label for="personnage"> choisissez votre personnage</label>
         <select name="personnage" id=""></select>
         <img class="image-fight" src="assets/lib/images/ken.gif" alt="ryu">
      </div>
   </div>
</div>