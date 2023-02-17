<body class="bg-dark">
    <div class="container mt-5">
        <header>
            <h1 class="text-center text-white pb-3">Movies</h1>
        </header>
        <main>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Director</th>
                        <th scope="col">Year</th>
                        <th scope="col">Genres</th>
                    </tr>
                </thead>
                <tbody>
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
        </main>
    </div>
</body>