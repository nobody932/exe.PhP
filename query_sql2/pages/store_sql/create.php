<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une part</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="../assets/js/main.js"></script>
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
    <form action="../../assets/php/controllers/store_sql/create_store.php" method="POST">
    <div>
            <label for="title">nom de la part </label>
            <input type="text" id="title" name="title">
        </div> 
        <div>
            <label for="movie">vidéo</label>
            <input type="text" id="movie" name="movie">
        </div> 
        <div>
            <label for="description">Description</label>
            <input type="text" id="description" name="description">
        </div>
        <div>
            <label for="country">Country</label>
            <input type="text" id="country" name="country">
        </div>
    
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>