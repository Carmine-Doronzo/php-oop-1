<?php
require_once __DIR__.'/Models/Production.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>PHP OOP 1</title>
</head>

<body>
    <div class="container">
        <div class="row py-4">
            <?php
            foreach ($films as $film) {
            ?>

                <div class="col-4">
                    <div class="card">
                        <p>Titolo: <?= $film->title ?></p>
                        <p>Lingua: <?= $film->lang ?></p>
                        <p>Voto: <?= $film->vote ?></p>
                        <p>Incasso: <?= $film->profits ?></p>
                        <p>Durata: <?= $film->length ?></p>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>
        <div class="row py-4">
            <?php
            foreach ($series as $serie) {
            ?>

                <div class="col-4">
                    <div class="card">
                        <p>Titolo: <?= $serie->title ?></p>
                        <p>Lingua: <?= $serie->lang ?></p>
                        <p>Voto: <?= $serie->vote ?></p>
                        <p>Season <?= $serie->season ?></p>
                        
                    </div>
                </div>

            <?php
            }
            ?>
        </div>
    </div>

</body>

</html>