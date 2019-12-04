<h1> Liste des types </h1>
<p>Cliquez sur un type pour voir tout les pokemons de ce type</p>
<div class="d-flex flex-wrap justify-content-center">
    <?php foreach ($templateData["types"] as $type) : ?>
        <div class="card m-2 rounded" style="width: 18rem;">

                <a class="btn" href="<?= $router->generate('pokemonByType', array('id' => $type['id'])); ?>" style=<?php echo'"background-color: #'. $type['color'] . '; color: white;"' ?>><?php echo $type["name"] ?></a>

        </div>

    <?php endforeach ?>
    
</div>

