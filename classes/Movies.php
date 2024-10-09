<?php




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


    function __construct($_name, $_genre, $_author, int $_time, int $_release_date , int $_vote)
    {
        $this->name = $_name;
        $this->genre = $_genre;
        $this->author = $_author;
        $this->time = $_time;
        $this->release_date = $_release_date;
        $this->vote = $_vote;
    }



}

$movie_1 = new Movie ( 'Io robot' , 'fantascienza' , 'Alex Proyas' , 115 , 2004 , 4 );
$movie_1->setSuggestion((4));
$suggestion_movie_1 = $movie_1->getSuggestion();
var_dump($movie_1);
$movie_2 = new Movie ( 'Io sono leggenda' , 'horror' , 'Francis Lawrence' , 100 , 2007 , 3 );

var_dump($movie_2);

?>