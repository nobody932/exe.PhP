<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher des Magasin</title>
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
    </header>
    
    <h1>Liste des Magasins</h1>

    <?php 

    require_once('../../assets/php/middleware/connect.php');

    $query_store = $db_connect->query('SELECT * FROM store');

    foreach ($query_store as $store) {
        echo $store['adress'];
        echo $store['store_name'];
    }

    ?>
</body>
</html>