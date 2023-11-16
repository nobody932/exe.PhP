<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="../../index.php">Accueil</a>
                </li>
                <li>
                    <a href="../movies/index.php">Movie</a>
                </li>
                <li>
                    <a href="#">Store</a>
                </li>
            </ul>
        </nav>
    </header>
    <h1>Store</h1>

    <!-- create -->
    <h1>Create</h1>
    <form action="../../assets/php/controllers/store/create_store.php" method="POST">
        <div>
            <label for="store-picture">Photo</label>
            <input type="text" id="store-picture" name="store-picture">
        </div> 
        <div>
            <label for="store-name">Nom</label>
            <input type="text" id="store-name" name="store-name">
        </div> 
        <div>
            <label for="store-adress">Adresse</label>
            <input type="text" id="store-adress" name="store-adress">
        </div>
        <div>
            <label for="store-description">Description</label>
            <input type="text" id="store-description" name="store-description">
        </div>
    
        <button type="submit">Envoyer</button>
    </form>
        
    <!-- read -->
        <h1>Read</h1>

        <?php
        
        require_once('../../assets/php/middleware/connect.php');

        $query_store = $db_connect->query('SELECT * FROM store');

        foreach ($query_store as $store) {
            echo $store['store_name'];
            echo '<br />';
            echo $store['adress'];
            echo '<br />';
        }

    ?>
        <!-- update -->
    <h1>Update</h1>
    <form action="../../assets/php/controllers/store/update_store.php" method="POST">
        <div>
            <label for="store-id">Id</label>
            <input type="text" id="store-id" name="store-id">
        </div>
        <div>
            <label for="store-picture">Photo</label>
            <input type="text" id="store-picture" name="store-picture">
        </div> 
        <div>
            <label for="store-name">Nom</label>
            <input type="text" id="store-name" name="store-name">
        </div> 
        <div>
            <label for="store-adress">Adresse</label>
            <input type="text" id="store-adress" name="store-adress">
        </div>
        <div>
            <label for="store-description">Description</label>
            <input type="text" id="store-description" name="store-description">
        </div>
        <button type="submit">Envoyer</button>
    </form>
        <!-- delete -->
        <h1>Delete</h1>

        <form action="../../assets/php/controllers/store/delete_store.php" method="POST">
        <div>
            <label for="store-id">Id</label>
            <input type="text" id="store-id" name="store-id">
        </div>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>