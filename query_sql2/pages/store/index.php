<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <title classname="uppercase">Store</title>
</head>
<body class="colorbg ">
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
    <h1 class="text-center">Store</h1>

    <section class="contain self-center">

        <!-- create -->
        <div class="glassblack">
             <h1 class="text-center">Create</h1>
        </div>
        <form class="flex-container self-center pading" action="../../assets/php/controllers/store/create_store.php" method="POST">
            <div class="container-center  marggin">
                <div class="marggin self-center">
                    <label for="store-picture">Photo</label>
                    <input type="text" id="store-picture" name="store-picture">
                </div> 
                <div class="marggin self-center">
                    <label for="store-name">Nom</label>
                    <input type="text" id="store-name" name="store-name">
                </div> 
                <div class="marggin self-center">
                    <label for="store-adress">Adresse</label>
                    <input type="text" id="store-adress" name="store-adress">
                </div>
                <div class="marggin self-center">
                    <label for="store-description">Description</label>
                    <input type="text" id="store-description" name="store-description">
                </div>
                <div class="self-center">
                    <button class=" self-center" type="submit">Envoyer</button>
                </div>
               
            </div>
         </form>
    </section>
    <div class="margin">
    </div>
    
    <!-- read -->
    <section class="glassblue flex-contain self-center">
    <h1 class="text-center glassblack">Apperçus de l'ajouts</h1>
        <div class=" pading self-center">
            <div class="text-center flex-contain">
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
        </div>
        </div>
        </section>

        <div class="margin">
        </div>

        <!-- update -->
        <section class="contain  self-center padding">
        <h1 class="text-center glassblack">Update</h1>
            <div class="">
                <form class="flex-container self-center pading" action="../../assets/php/controllers/store/update_store.php" method="POST">
                    <div class="container-center ">
                        <div class="marggin self-center">
                            <label for="store-id">Id</label>
                            <input type="text" id="store-id" name="store-id">
                        </div>
                        <div class="marggin self-center">
                            <label for="store-picture">Photo</label>
                            <input type="text" id="store-picture" name="store-picture">
                        </div> 
                        <div class="marggin self-center">
                            <label for="store-name">Nom</label>
                            <input type="text" id="store-name" name="store-name">
                        </div> 
                        <div class="marggin self-center">
                            <label for="store-adress">Adresse</label>
                            <input type="text" id="store-adress" name="store-adress">
                        </div>
                        <div class="marggin self-center">
                            <label for="store-description">Description</label>
                            <input type="text" id="store-description" name="store-description">
                        </div>
                        <button type="submit">Envoyer</button>
                    </form>
                </div>    
                </div>
            </section>
            <div class="margin">

            </div>
    <!-- delete -->
    <section class=" glassblue self-center">
      <h1 class="text-center glassblack">Delete</h1> 
        <div class="text-center">
            
            <form action="../../assets/php/controllers/store/delete_store.php" method="POST">
                <div class="marggin self-center">
                    <label for="store-id">Id</label>
                    <input type="text" id="store-id" name="store-id">
                </div>
                <button type="submit">Envoyer</button>
            </form>
        </div>
    </section>
</body>
</html>