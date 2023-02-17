<?php
include_once __DIR__ . '/models/Genre.php';
include_once __DIR__ . '/models/Movie.php';
include_once __DIR__ . '/db.php';
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
        <table class="table">
            <thead class="table-danger">
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Director</th>
                    <th scope="col">Year</th>
                    <th scope="col">Genres</th>
                </tr>
            </thead>
            <tbody class="table-warning">
                <?php foreach ($movies as $movie) : ?>
                    <tr>
                        <td><?php echo $movie->getMovieTitle() ?></td>
                        <td><?php echo $movie->getMovieDirector() ?></td>
                        <td><?php echo $movie->getMovieYear() ?></td>
                        <td><?php echo $movie->getMovieGenres() ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>