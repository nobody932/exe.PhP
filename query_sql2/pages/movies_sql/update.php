<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Magazin</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <script src="../../assets/js/main.js"></script>
</head>
<body>
    <header>
    <nav>
            <ul>
                <li>
                    <a href="../">Accueil</a>
                </li>
                <li>
                    <a href="./">Afficher</a>
                </li>
                <li>
                    <a href="../../pages/movies_sql/create.php">Créer</a>
                </li>
                <li>
                    <a href="../">Editer</a>
                </li>
                <li>
                    <a href="../../pages/movies_sql/delete.php">Supprimer</a>
                </li>
            </ul>
        </nav>
        <form action="../../assets/php/controllers/movies_sql/update_movies.php" method="POST">
    <div>
            <label for="storename">Nom Du Magazin </label>
            <input type="text" id="storename" name="storename">
        </div> 
        <div>
            <label for="storepicture">Photo Magasin</label>
            <input type="text" id="storepicture" name="storepicture">
        </div> 
        <div>
            <label for="adress">Adresse</label>
            <input type="text" id="adress" name="adress">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" id="description" name="decription">
        </div>
    
        <button type="submit">Envoyer</button>
    </form>
    </header>
</body>