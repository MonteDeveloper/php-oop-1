<?php

include 'db.php';

// foreach ($spidermanMovies as $movie) {
//     $movie->printMovie();
//     echo "\n";
// }

?>

<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Spiderman Movies</title>

    <link rel="stylesheet" href="style.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>
</head>

<body class="bg-dark text-white">

    <div class="d-flex flex-wrap justify-content-center vh-100 p-5">
        <?php
        foreach ($spidermanMovies as $movie) {
        ?>
        <div class="p-3 col-3">
            <div class="my-glassBox h-100 p-3 text-center d-flex align-items-center justify-content-center">
                <p class="m-0">
                    <?php
                    $movie->printMovie();
                    ?>
                </p>
            </div>
        </div>
        <?php
        }
        ?>
    </div>

    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4' crossorigin='anonymous'></script>
</body>

</html>