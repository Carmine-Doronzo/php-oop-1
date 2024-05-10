<?php 


class TvSeries extends Production{

    public $season;

    function __construct($_title, $_lang, $_vote,$_season)
    {
        parent::__construct($_title, $_lang, $_vote,);
        $this->season = $_season;
    }

}

?>