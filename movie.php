<?php

class Movie {
    public $title;
    public $director;
    public $year;
    public $duration;
    public $genres;

    public function __construct($title, $director, $year, $duration, $genres) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->duration = $duration;
        $this->genres = $genres;
    }

    public function printMovie() {
        echo "Title: " . $this->title . "<br>";
        echo "Director: " . $this->director . "<br>";
        echo "Year: " . $this->year . "<br>";
        echo "Duration: " . $this->duration . " minutes<br>";
        echo "Genres: " . implode(", ", $this->genres) . "<br>";
    }
}

?>