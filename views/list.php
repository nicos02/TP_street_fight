<?php include 'controller/liste_controller.php' ?>
<?php if (empty($personnages)) : ?> <!-- Si $personnages est vide alors on affiche ce message -->
    <div class="text-center">
        <p class="mt-5">Veuillez créer un personnage</p>
        <a href="index.php?create" class="btn btn-primary mt-5">Creer un personnage</a>
    </div>
<?php else : ?> <!-- Sinon on affiche le tableau -->
    <h3 class="text-center mt-5">Affichage des personnages</h3>
    <div class="d-flex justify-content-center">
        <img class="img-fluid " src="assets/lib/images/img_list.gif" alt="image_list">
    </div>
    <table class="table table-hover mt-5 mb-5 mx-auto w-75 shadow">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($personnages as $personnage) : ?>
                <tr>
                    <td>
                        <a href="index.php?id=<?php echo $personnage['id']; ?>">
                            <?php echo $personnage['name']; ?>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>