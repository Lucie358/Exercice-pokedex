<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= $baseUrl ?>/css/style.css">


  <title>Pokedex</title>
</head>

<body>
  <nav class="pokenav">
    <h2>Pokedex !</h2>
    <div>

      <a class="nav_link" href="<?= $router->generate('homepage') ?>">Liste</a>


      <a class="nav_link" href="<?= $router->generate('typeList') ?>">Types</a>


    </div>

  </nav>