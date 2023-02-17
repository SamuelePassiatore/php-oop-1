<?php
// Movie class
class Movie
{
    //Properties or istance variables
    public $title;
    public $director;
    public $year;

    //Class constructor
    public function __construct($title, $director, $year)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
    }

    // Methods all details
    public function getMovieTitle()
    {
        return "Title " . $this->title;
    }

    public function getMovieDirector()
    {
        return "Director " . $this->director;
    }

    public function getMovieYear()
    {
        return "Year " . $this->year;
    }
}

// Creation movie objects
$movie1 = new Movie("Inception", "Christopher Nolan", 2010);
$movie2 = new Movie("Interstellar", "Christopher Nolan", 2014);
$movie3 = new Movie("The Green Mile", "Frank Darabont", 1999);
$movie4 = new Movie("300", "Zack Snyder", 2006);
$movie5 = new Movie("Jurassic Park", "Steven Spielberg", 1993);
