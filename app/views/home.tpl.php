<body>
    <header>

    </header>
    <main>
        <div class="d-flex flex-wrap justify-content-center">
            <!-- Je boucle sur les personnages pour faire un tableau contenant leur caractéristique -->
            <?php foreach ($templateData["pokemons"] as $pokemon) : ?>

                <a href='<?= $router->generate('pokemonDetails', array('id' => $pokemon['id'])); ?>' class=" card-pokemon" style="width: 18rem;">
                    <img class="card-img-top" src="<?= $baseUrl . '/img' . '/' . $pokemon['numero'] . '.png' ?>" alt="img">

                    <h5>#<?php echo $pokemon["numero"] . ' ' . $pokemon["nom"] ?></h5>



                </a>

            <?php endforeach ?>
        </div>






    </main>
    <footer>

    </footer>
</body>

</html>