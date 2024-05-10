<?php 
require_once __DIR__.'/Movie.php';
require_once __DIR__.'/Tvseries.php';
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