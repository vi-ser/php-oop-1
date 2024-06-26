<?php

require 'db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie OOP</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body data-bs-theme="dark">

    <div class="container m-5 mx-auto p-4">

        <h1 class="text-center mb-5">Movie List OOP</h1>
        <ul class="list-unstyled d-flex flex-wrap" style='gap: 20px'>
            <?php
            foreach ($movies as $movie) {

                echo "
            <li class='p-4 bg-body-tertiary rounded-3' style='width: calc(100% / 4 - 20px / 4 * 3)'>
            <strong>Title:</strong><br>" . $movie->title . "<br><br><strong>Description:</strong><br>" . $movie->description . "<br><br><strong>Year:</strong><br>" . $movie->year . "<br>
            </li>";

            }
            ?>
        </ul>
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>