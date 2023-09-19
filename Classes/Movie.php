<?php


class Movie {
    public $title;
    public $genre;
    public $year;
    public $director;



    function __construct(string $_title, $_year )
    {
        $this->title = $_title;
        $this->year = $_year;
    }

}

?>