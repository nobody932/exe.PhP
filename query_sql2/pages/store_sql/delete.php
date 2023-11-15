<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer une Part</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <script src="../../assets/js/main.js"></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                <a href="../store_sql/index.php">Accueil</a>
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

    <form action="../../assets/php/controllers/store_sql/delete_store.php" method="POST">
        <div>
            <label for="id-delete">Id</label>
            <input type="text" id="id-delete" name="id-delete">
        </div>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>