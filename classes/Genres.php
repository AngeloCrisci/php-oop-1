<?php

class Genres {
    public $name;
   
    function __construct(
        string $_name,
    )
    {
        $this->name = $_name;
    }
    
    public function getGenre() : string {
            return $this->name;
        }
    

    public function setGenre($_name) : void {
        if (!empty($_name) && strlen($_name) > 2){
            $this->name = $_name;
        }
    }

}


?>