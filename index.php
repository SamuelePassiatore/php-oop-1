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
