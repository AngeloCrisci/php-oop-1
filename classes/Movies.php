<?php

require_once __DIR__ . '/Genres.php';


class Movie {
    public $name;
    public $genre;
    public $author;
    public $time;
    public $release_date;
    public $vote;
    public $suggestion;


    public function setSuggestion($vote){
        if( $vote > 3 ) {
            $this->suggestion = 'Da non perdere!!';
        }
    }

    public function getSuggestion(){
        return $this->suggestion;
    }


    function __construct($_name , Genres $_genre,  $_author, int $_time, int $_release_date , int $_vote)
    {
        $this->name = $_name;
        $this->genre = $_genre;
        $this->author = $_author;
        $this->time = $_time;
        $this->release_date = $_release_date;
        $this->vote = $_vote;
    }



}


?>