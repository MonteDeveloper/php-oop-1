<?php

include 'movie.php';

$spiderman1 = new Movie("Spider-Man", "Sam Raimi", 2002, 121, ["Action", "Adventure"]);
$spiderman2 = new Movie("Spider-Man 2", "Sam Raimi", 2004, 127, ["Action", "Adventure"]);
$spiderman3 = new Movie("Spider-Man 3", "Sam Raimi", 2007, 139, ["Action", "Adventure"]);
$amazingSpiderman1 = new Movie("The Amazing Spider-Man", "Marc Webb", 2012, 136, ["Action", "Adventure"]);
$amazingSpiderman2 = new Movie("The Amazing Spider-Man 2", "Marc Webb", 2014, 142, ["Action", "Adventure"]);
$homecoming = new Movie("Spider-Man: Homecoming", "Jon Watts", 2017, 133, ["Action", "Adventure"]);
$farFromHome = new Movie("Spider-Man: Far From Home", "Jon Watts", 2019, 129, ["Action", "Adventure"]);
$noWayHome = new Movie("Spider-Man: No Way Home", "Jon Watts", 2021, 148, ["Action", "Adventure"]);

$spidermanMovies = [$spiderman1, $spiderman2, $spiderman3, $amazingSpiderman1, $amazingSpiderman2, $homecoming, $farFromHome, $noWayHome];

?>