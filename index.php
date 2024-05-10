<?php
require_once __DIR__.'/profits.php';
$films = [];
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

$Star_Wars = new Profits('Star Wars', 'eng', 7,'1.000.000','90 min');
$Pulp_Fiction = new Profits('Pulp Fiction', 'eng', 9,'10.000.000','104 min');
$Inglorious_Bastards = new Profits('Bastardi senza gloria', 'eng', 10,'100.000.000','134 min');

array_push($films, $Star_Wars, $Pulp_Fiction, $Inglorious_Bastards);

//$films[]= $Star_Wars . $Pulp_Fiction . $Inglorious_Bastards; 

var_dump($films);
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
    </div>

</body>

</html>