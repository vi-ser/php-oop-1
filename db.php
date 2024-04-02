<?php

require './Models/Movie.php';


$movie1 = new Movie("Road House", "L'ex lottatore Elwood Dalton viene assunto come buttafuori e direttore di una roadhouse di Florida Keys, inimicandosi la malavita locale.", 2024);

// var_dump($movie1);

$movie2 = new Movie("Godzilla e Kong - Il nuovo impero", "L'epica battaglia continua! Una nuovissima avventura che vedrà l'onnipotente Kong e il temibile Godzilla combattere fianco a fianco contro una colossale minaccia sconosciuta che si cela nel nostro mondo, mettendo a dura prova la loro stessa esistenza... e la nostra.", 2024);

$movie3 = new Movie("Alienoid", "I guru della tarda dinastia Goryeo cercano di ottenere una leggendaria spada sacra e gli umani nel 2022 danno la caccia a un prigioniero alieno rinchiuso nel corpo di un essere umano. Le due parti si incrociano quando si apre un portale per viaggiare nel tempo.", 2022);

$movie4 = new Movie("Damsel", "Il matrimonio di una giovane donna con un affascinante principe si trasforma in una feroce lotta per la sopravvivenza quando è offerta in sacrificio a un drago sputafuoco.", 2024);

$movies = [
    $movie1,
    $movie2,
    $movie3,
    $movie4,
];

// var_dump($movies);