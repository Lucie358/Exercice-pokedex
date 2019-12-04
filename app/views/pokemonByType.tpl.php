<h1>Les pokemons de type <span style=<?php echo'"color: #'. $templateData['currentType']['color'] . ';"' ?>><?= $templateData['currentType']['name'] ?></span></h1>





<div class="d-flex flex-wrap justify-content-center" >
        <?php 
        if (count($templateData["pokemons"]) === 0) {
              echo'<h5 class="card m-5 p-4 rounded bg-warning">Pas de pokémons dans cette catégorie</h5>';
        } 
        ?>

        <!-- Je boucle sur les personnages pour faire un tableau contenant leur caractéristique -->
        <?php foreach ($templateData["pokemons"] as $pokemon) : ?>
            <a href='<?= $router->generate('pokemonDetails', array('id' => $pokemon['id'])); ?>' class="card-pokemon" style="width: 18rem;">
                <img class="card-img-top" src="<?= $baseUrl . '/img' . '/' . $pokemon['numero'] . '.png' ?>" alt="img">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $pokemon["nom"] ?></h5>
                    <p class="card-text">#<?php echo $pokemon["numero"] ?></p>
                </div>

            </a>

        <?php endforeach ?>
</div>