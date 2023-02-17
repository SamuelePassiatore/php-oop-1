<?php
// Movie class
class Movie
{
    //!Properties or istance variables
    public $title;
    public $director;
    public $year;
    public $genres;

    //!Class constructor
    public function __construct($title, $director, $year, $genres)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->genres = $genres;
    }

    //! Methods all details
    public function getMovieTitle()
    {
        return $this->title;
    }

    public function getMovieDirector()
    {
        return $this->director;
    }

    public function getMovieYear()
    {
        return $this->year;
    }

    public function getMovieGenres()
    {
        $genreNames = '';
        foreach ($this->genres as $genre) {
            $genreNames .= $genre->name . ', ';
        }
        return $genreNames;
    }
}
