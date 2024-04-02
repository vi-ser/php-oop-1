<?php

require './Models/Movie.php';


$movie1 = new Movie("Road House", "L'ex lottatore Elwood Dalton viene assunto come buttafuori e direttore di una roadhouse di Florida Keys, inimicandosi la malavita locale.", 2024);

// var_dump($movie1);

$movies = [
    $movie1,
];

// var_dump($movies);