<?php

require __DIR__ . '/classes/Movies.php'

?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OOP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script defer src="./main.js"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.7/axios.min.js"></script>
        <script defer src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <link rel="stylesheet" href="./style/style.css">
    </head>

<body>
    <?php
        $action =  ('Action');
        $horror =  ('Horror');
        $science = ('Science');
        $comedy = ('Comedy');
        $love_story = ('Love Story');
    
        $genres = [
           $action,
           $horror,
           $science,
           $comedy,
           $love_story,
        ];

       

        $movie_1 = new Movie ( 'Io robot' , new Genres ($genres[2]. " " . $genres[0]) , 'Alex Proyas' , 115 , 2004 , 4 );
        $movie_1->setSuggestion(($movie_1->vote));
        $suggestion_movie_1 = $movie_1->getSuggestion();
        $movie_2 = new Movie ( 'Io sono leggenda' ,  new Genres ($genres[0] . " ". $genres[1] . " " . $genres[2]) , 'Francis Lawrence' , 100 , 2007 , 3 );
        $movie_2->setSuggestion(($movie_2->vote));
        $suggestion_movie_2 = $movie_2->getSuggestion();

       
        $movies = [
            $movie_1,
            $movie_2,
        ]
?>

    <h1 class="text-center">
        I MIEI FILM OOP TRY
    </h1>
    <div class="container">
        <div class="row justify-content-center">
            <?php foreach($movies as $movie) { ?>
            <div class="card col-4 h100">
                <div class="card-body">
                    <h5 class="card-title">
                        <?=  $movie->name ?>
                    </h5>
                    <p class="card-text">
                        Genere : <strong><?= $movie->genre->name ?></strong>
                    </p>
                    <p class="card-text">
                       Autore: <strong><?= $movie->author ?></strong>
                    </p>
                    <p class="card-text">
                       Voto: <strong><?= $movie->vote ?></strong>
                    </p>
                    <p class="card-text">
                       Durata: <strong><?= $movie->time ?></strong>
                    </p>
                    <p class="card-text">
                       Anno: <strong><?= $movie->release_date ?></strong>
                    </p>
                    <p class="card-text">
                       Consigliato: <strong><?= $movie->suggestion ?></strong>
                    </p>
                </div>
            </div>
            
            <?php } ?>
        </div>
    </div>


</body>
</html>