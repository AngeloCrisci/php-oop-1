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


    function __construct($_name , $_author, int $_time, int $_release_date , int $_vote)
    {
        $this->name = $_name;
        $this->author = $_author;
        $this->time = $_time;
        $this->release_date = $_release_date;
        $this->vote = $_vote;
    }



}

$movie_1 = new Movie ( 'Io robot' , 'Alex Proyas' , 115 , 2004 , 4 );
$movie_1->setSuggestion((4));
$suggestion_movie_1 = $movie_1->getSuggestion();
$movie_1->setGenre("fantascienza, action");
var_dump($movie_1);
$movie_2 = new Movie ( 'Io sono leggenda' , 'Francis Lawrence' , 100 , 2007 , 3 );
$movie_2->setSuggestion((3));
$suggestion_movie_2 = $movie_2->getSuggestion();
var_dump($movie_2);

?>