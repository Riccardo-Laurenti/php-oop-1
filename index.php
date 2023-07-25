<?php

require __DIR__ . '/Movie.php';

$movies = [
    new Movie("Boxe", "Action", 120, "https://www.postermania.it/87308-thickbox_default/manifesto-boxe-pugile-gene-hackman-jennifer-beals-split-decisions-pugilato-a133.jpg"),
    new Movie("Kill Bill", "Action", 180, "https://www.postermania.it/2401-thickbox_default/locandina-kill-bill-quentin-tarantino-uma-thurman-david-carradine-poster-cat2.jpg")

];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .locandina {
            width: 90px;
        }
    </style>
</head>

<body>
    <?php foreach ($movies as $movie) { ?>
        <div>
            <h2><?= $movie->titolo ?></h2>
            <ul>
                <li>Genere: <?= $movie->genere ?></li>
                <li>Durata: <?= $movie->duration ?></li>


            </ul>
            <img class="locandina" src=<?= $movie->locandina ?> alt="">
        </div>
    <?php } ?>
</body>

</html>