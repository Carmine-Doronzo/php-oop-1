<?php
//require_once __DIR__.'/index.php';
class Movie extends Production{

    public $profits;
    public $length;

    function __construct($_title, $_lang, $_vote, $_profits,$_length)
    {
        parent:: __construct($_title, $_lang, $_vote);

        
        $this->profits = $_profits;
        $this->length = $_length;
        
    }

}

