<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title classname="uppercase ">movies</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="../../index.php">Accueil</a>
                </li>
                <li>
                    <a href="#">Movie</a>
                </li>
                <li>
                    <a href="../store/index.php">Store</a>
                </li>
            </ul>
        </nav>
    </header>
    <h1>Movie</h1>

    <!-- create -->
    <h2>Create</h2>
    <form action="../../assets/php/controllers/movies/create_movies.php" method="POST">
    <div>
            <label for="movie-title">Titre</label>
            <input type="text" id="movie-title" name="movie-title">
        </div> 
        <div>
            <label for="movie-url">URL</label>
            <input type="text" id="movie-url" name="movie-url">
        </div> 
        <div>
            <label for="movie-description">Description</label>
            <input type="text" id="movie-description" name="movie-description">
        </div>
        <div>
            <label for="movie-country">Pays</label>
            <input type="text" id="movie-country" name="movie-country">
        </div>
    
        <button type="submit">Envoyer</button>
    </form>

    <!-- read -->

    <h2>Read</h2>
    <?php 

    require_once('../../assets/php/middleware/connect.php');

    $query_movies = $db_connect->query('SELECT * FROM movies');

    foreach ($query_movies as $movie) {
        echo $movie['title'];
        echo '<br />';
        echo $movie['url'];
        echo '<br />';
    }

    ?>

    <h2>Update</h2>
    <!-- update -->
    <form action="../../assets/php/controllers/movies/update_movies.php" method="POST">
        <div>
            <label for="movie-id">Id</label>
            <input type="text" id="movie-id" name="movie-id">
        </div>
        <div>
            <label for="movie-title">Titre</label>
            <input type="text" id="movie-title" name="movie-title">
        </div> 
        <div>
            <label for="movie-url">URL</label>
            <input type="text" id="movie-url" name="movie-url">
        </div> 
        <div>
            <label for="movie-description">Description</label>
            <input type="text" id="movie-description" name="movie-description">
        </div>
        <div>
            <label for="movie-country">Pays</label>
            <input type="text" id="movie-country" name="movie-country">
        </div>
    
        <button type="submit">Envoyer</button>
    </form>

    <!-- delete -->
    <h2>Delete</h2>
    <form action="../../assets/php/controllers/movies/delete_movies.php" method="POST">
        <div>
            <label for="movie-id">Id</label>
            <input type="text" id="movie-id" name="movie-id">
        </div>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>