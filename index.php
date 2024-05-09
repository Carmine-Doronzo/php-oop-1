<?php
class Production
{

    public $title;
    public $lang;
    public $vote;

    function __construct($_title, $_lang, $_vote)
    {
        $this->title = $_title;
        $this->lang = $_lang;
        $this->vote = $_vote;
    }

    
}

$Star_Wars = new Production('Star Wars','eng',7);
$Pulp_Fiction = new Production('Pulp Fiction','eng',9);
$Inglorious_Bastards = new Production('Bastardi senza gloria','eng',10);

var_dump($Star_Wars);


