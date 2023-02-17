<?php

//Genre
$action_movies = new Genre("Action");
$adventure_movies = new Genre("Adventure");
$drama_movies = new Genre("Drama");
$fantasy_movies = new Genre("Fantasy");
$war_movies = new Genre("War");

//Movie
// !Creation movie objects 
$movies = array(
    new Movie("Inception", "Christopher Nolan", 2010, array($action_movies, $drama_movies)),
    new Movie("Interstellar", "Christopher Nolan", 2014, array($adventure_movies, $drama_movies)),
    new Movie("The Green Mile", "Frank Darabont", 1999, array($drama_movies, $fantasy_movies)),
    new Movie("300", "Zack Snyder", 2006, array($action_movies, $war_movies)),
    new Movie("Jurassic Park", "Steven Spielberg", 1993, array($adventure_movies, $fantasy_movies))
);

// $movie1 = new Movie("Inception", "Christopher Nolan", 2010);
// $movie2 = new Movie("Interstellar", "Christopher Nolan", 2014);
// $movie3 = new Movie("The Green Mile", "Frank Darabont", 1999);
// $movie4 = new Movie("300", "Zack Snyder", 2006);
// $movie5 = new Movie("Jurassic Park", "Steven Spielberg", 1993);