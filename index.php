<?php
require_once __DIR__.'/Models/Movie.php';
require_once __DIR__.'/Models//Tvseries.php';
$films = [];
$series = [];
class Production
{

    public $title;
    public $lang;
    public $vote;
    //public $profits;

    function __construct($_title, $_lang, $_vote,)
    {
        $this->title = $_title;
        $this->lang = $_lang;
        $this->vote = $_vote;
        //$this->profits = $_profits;
    }

    // public function setProfits(Profits $_profits) 
    // {
    //     $this->profits = $_profits;
    // }

}

$Star_Wars = new Movie('Star Wars', 'eng', 7,'1.000.000','90 min');
$Pulp_Fiction = new Movie('Pulp Fiction', 'eng', 9,'10.000.000','104 min');
$Inglorious_Bastards = new Movie('Bastardi senza gloria', 'eng', 10,'100.000.000','134 min');
$Walking_dead = new TvSeries('The Walking Dead', 'eng', 10, 10);
array_push($films, $Star_Wars, $Pulp_Fiction, $Inglorious_Bastards);
array_push($series, $Walking_dead);

//$films[]= $Star_Wars . $Pulp_Fiction . $Inglorious_Bastards; 

//var_dump($films);
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