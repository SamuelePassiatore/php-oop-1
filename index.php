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
}

// Creation movie objects 
$movies = array(
    new Movie("Inception", "Christopher Nolan", 2010),
    new Movie("Interstellar", "Christopher Nolan", 2014),
    new Movie("The Green Mile", "Frank Darabont", 1999),
    new Movie("300", "Zack Snyder", 2006),
    new Movie("Jurassic Park", "Steven Spielberg", 1993)
);
// $movie1 = new Movie("Inception", "Christopher Nolan", 2010);
// $movie2 = new Movie("Interstellar", "Christopher Nolan", 2014);
// $movie3 = new Movie("The Green Mile", "Frank Darabont", 1999);
// $movie4 = new Movie("300", "Zack Snyder", 2006);
// $movie5 = new Movie("Jurassic Park", "Steven Spielberg", 1993);

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movie</title>
</head>

<body>
    <div>
        <?php foreach ($movies as $movie) : ?>
            <h1><?php echo $movie->getMovieTitle() ?></h1>
            <p><?php echo $movie->getMovieDirector() ?></p>
            <p><?php echo $movie->getMovieYear() ?></p>
        <?php endforeach; ?>
    </div>
</body>

</html>