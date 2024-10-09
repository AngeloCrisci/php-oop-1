<?php

class Genre {
    public $horror;
    public $action;
    public $science;
    public $comedy;
    public $love_story;

    public function __construct(bool $horror , bool $action , bool $science , bool $comedy , bool $love_story)
    {
        $this->horror = $horror;
        $this->action = $action;
        $this->science = $science;
        $this->comedy = $comedy;
        $this->love_story = $love_story;

    }



}





?>