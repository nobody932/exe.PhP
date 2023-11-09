<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editer une part</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="../assets/js/main.js"></script>
</head>
</head>
<body>
    <header>
    <nav>
            <ul>
                <li>
                    <a href="../index.php">Accueil</a>
                </li>
                <li>
                    <a href="../store_sql/read.php">Afficher</a>
                </li>
                <li>
                    <a href="../store_sql/create.php">Créer</a>
                </li>
                <li>
                    <a href="../store_sql/update.php">Editer</a>
                </li>
                <li>
                    <a href="../store_sql/delete.php">Supprimer</a>
                </li>
            </ul>
        </nav>
    </header>

    <h1>Editer un utilisateur</h1>

    <form action="../../assets/php/controllers/store_sql/update_store.php" method="POST">
        <div>
            <label for="id">Id</label>
            <input type="text" id="id" name="id">
        </div>
        <div>
            <label for="title">Title</label>
            <input type="title" id="title" name="tilte">
        </div>
        <div>
            <label for="movie">Movie</label>
        <input type="text" id="movie" name="movie">
        </div>
        <div>
            <label for="description">Description</label>
        <input type="text" id="description" name="description">
        </div>
        <div>
            <label for="country">$country</label>
            <input type="text" id="country" name="country">
        </div>
        <button type="submit">Envoyer</button>
    </form>

</body>
</html>