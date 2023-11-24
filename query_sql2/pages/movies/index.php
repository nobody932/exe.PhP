<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <title classname="uppercase ">movies</title>
</head>
<body class="colorbgg">
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
    <h1 class="text-center">Movie</h1>

    <!-- create -->
    <section class="glasspink self-center">
        <h2 class="text-center glassblack">Create</h2>
        <div class="pading self-center">
            <div class="flex-contain">
                <form action="../../assets/php/controllers/movies/create_movies.php" method="POST">
                    <div class="marggin self-center">
                        <label for="movie-title">Titre</label>
                        <input type="text" id="movie-title" name="movie-title">
                    </div> 
                    <div class="marggin self-center">
                        <label for="movie-url">URL</label>
                        <input type="text" id="movie-url" name="movie-url">
                    </div> 
                    <div class="marggin self-center">
                        <label for="movie-description">Description</label>
                        <input type="text" id="movie-description" name="movie-description">
                    </div>
                    <div class="marggin self-center">
                        <label for="movie-country">Pays</label>
                        <input type="text" id="movie-country" name="movie-country">
                    </div>
                    
                    <button type="submit">Envoyer</button>
                </div>
            </div>
    </section>
    </form>
    
<div class="margin">

</div>

    <!-- read -->
    <section class="contain self-center">
        <h2 class="text-center glassblack">Apperçus de l'ajouts</h2>
        <div class="pading self-center">
            <div class="flex-contain">
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
            </div>
        </div>
</section>
    <div class="margin">

    </div>
    <section class="glassblue  self-center ">
        <h1 class="text-center glassblack">Update</h1>
            <div class="">
                <form class="flex-container self-center pading" action="../../assets/php/controllers/movies/update_movies.php" method="POST">
                <div class="marggin self-center">
                    <label for="movie-id">Id</label>
                    <input type="text" id="movie-id" name="movie-id">
                </div>
                <div class="marggin self-center">
                    <label for="movie-title">Titre</label>
                    <input type="text" id="movie-title" name="movie-title">
                </div> 
                <div class="marggin self-center">
                    <label for="movie-url">URL</label>
                    <input type="text" id="movie-url" name="movie-url">
                </div> 
                <div class="marggin self-center">
                    <label for="movie-description">Description</label>
                    <input type="text" id="movie-description" name="movie-description">
            </div>
            <div class="marggin self-center">
                <label for="movie-country">Pays</label>
                <input type="text" id="movie-country" name="movie-country">
            </div>
            
            <button type="submit">Envoyer</button>
    </form>
    </section>
    
    <!-- delete -->
    <section class="glassgrey self-center">
      <h1 class="text-center glassblack">Delete</h1> 
        <div class="text-center">
            <form class="glassgrey self-center pading" action="../../assets/php/controllers/movies/delete_movies.php" method="POST">
                <div class="marggin self-center">
                    <label for="movie-id">Id</label>
                    <input type="text" id="movie-id" name="movie-id">
                </div>
                <button type="submit">Envoyer</button>
            </form>
        </div>
    </section>
</body>
</html>