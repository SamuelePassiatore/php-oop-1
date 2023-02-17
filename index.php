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
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
    <title>PHP Movie</title>
</head>

<body>
    <div class="container mt-5">
        <table class="table table-warning">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Director</th>
                    <th scope="col">Year</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($movies as $movie) : ?>
                    <tr>
                        <td><?php echo $movie->getMovieTitle() ?></td>
                        <td><?php echo $movie->getMovieDirector() ?></td>
                        <td><?php echo $movie->getMovieYear() ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>