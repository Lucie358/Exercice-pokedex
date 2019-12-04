<?php
function calcStat($stat)
{
    return $stat * 100 / 255;
}
?>

<h1>Details de <?= $templateData["pokemon"]['nom'] ?></h1>

<div class='d-flex'>
    <img class="img-pokemon" src="<?= $baseUrl . '/img' . '/' . $templateData["pokemon"]['numero'] . '.png' ?>" alt="img">
    <div class="card-pokemon flex-grow-1" style="width: 18rem;">

        <div class="card-body">
            <h5 class="card-title">#<?php echo $templateData["pokemon"]['numero'] . ' ' . $templateData["pokemon"]['nom'] ?></h5>

            <div class="d-flex mb-2">
                <?php foreach ($templateData["types"] as $type) : ?>
                    <div class="card mr-2 rounded" style="width: 18rem;">

                        <a class="btn" href="<?= $router->generate('pokemonByType', array('id' => $type['id'])); ?>" style=<?php echo '"background-color: #' . $type['color'] . '; color: white;"' ?>><?php echo $type["name"] ?></a>

                    </div>

                <?php endforeach ?>

            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        PV
                    </div>
                    <div class="col-sm">
                        <?= $templateData["pokemon"]['pv'] ?>
                    </div>
                    <div class="col-sm">
                        <div class="progress mb-2">
                            <div class="progress-bar" role="progressbar" <?= "style='width:" . calcStat($templateData["pokemon"]['pv']) . "%'" ?>></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        Attaque
                    </div>
                    <div class="col-sm">
                        <?= $templateData["pokemon"]['attaque'] ?>
                    </div>
                    <div class="col-sm">
                        <div class="progress mb-2">
                            <div class="progress-bar" role="progressbar" <?= "style='width:" . calcStat($templateData["pokemon"]['attaque']) . "%'" ?>></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        Defense
                    </div>
                    <div class="col-sm">
                        <?= $templateData["pokemon"]['defense'] ?>
                    </div>
                    <div class="col-sm">
                        <div class="progress mb-2">
                            <div class="progress-bar" role="progressbar" <?= "style='width:" . calcStat($templateData["pokemon"]['defense']) . "%'" ?>></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        Attaque spé.
                    </div>
                    <div class="col-sm">
                        <?= $templateData["pokemon"]['attaque_spe'] ?>
                    </div>
                    <div class="col-sm">
                        <div class="progress mb-2">
                            <div class="progress-bar" role="progressbar" <?= "style='width:" . calcStat($templateData["pokemon"]['attaque_spe']) . "%'" ?>></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        Defense spé.
                    </div>
                    <div class="col-sm">
                        <?= $templateData["pokemon"]['defense_spe'] ?>
                    </div>
                    <div class="col-sm">
                        <div class="progress mb-2">
                            <div class="progress-bar" role="progressbar" <?= "style='width:" . calcStat($templateData["pokemon"]['defense_spe']) . "%'" ?>></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        Vitesse
                    </div>
                    <div class="col-sm">
                        <?= $templateData["pokemon"]['vitesse'] ?>
                    </div>
                    <div class="col-sm">
                        <div class="progress mb-2">
                            <div class="progress-bar" role="progressbar" <?= "style='width:" . calcStat($templateData["pokemon"]['vitesse']) . "%'" ?>></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>