<!-- 
Dans cet exercice, vous apprendrez à manipuler la syntaxe php.
Veillez à bien lire les instructions présentes en commentaires.

Good luck & happy coding !
-->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Made with ❤️ by HelloDev</title>
    <!-- Ici, réaliser un lien avec le fichier styles.css -->
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <!-- Ici, réaliser un lien avec le fichier main.js sans oublier l'attribut DEFER ou ASYNC -->
    <script src="./assets/js/main.js" defer></script>
</head>

<body>
    <h1 class="text-center py-10">Learn PHP - Step 0</h1>
    <!-- Ici, réaliser une ouverture et une fermeture de balise de type PHP -->
    <!-- Dans la balise PHP, déclarer une variable NAME ayant pour valeur votre prénom. Ensuite, effectuer un print grâce à la méthode ECHO 
    Exemple : John-->
    <?php
    $name = 'haykel';
    echo "$name";

    $lastname ='ALERTE';
    print "$lastname";

    echo "<br> Je m'appelle $NAME $LASTNAME <br>";
    echo "Je m'appelle {$NAME}  {$LASTNAME} <br>"; 
    // FAUX
    ?>

    <!-- Step 0.1 -->
    <!-- Déclarer une variable LASTNAME ayant pour valeur votre nom de famille puis effectuer une concaténation avec NAME. Enfin, faites un print avec la méthode ECHO.
    Exemple : John Doe -->

      <!-- Step 0.2 -->
    <!-- Déclarer des variables avec tous les types primitif en PHP.
    --><?php
    $age = 20;
    $a_str ="foo";
    $c = array("rouge","bleu","vert"); // SEMI FAUX
    $vrai = true;
    $faux = false; 
    $vide = null;
    $vide2;
    echo "La variable $vide contient une valeur de type $faux <br>";
    echo gettype($vrai);
    
    echo $age;
    echo $vrai;
     ?>
  
    <!-- Step 0.3 -->
    <!-- Déclarer des variables avec tous les types primitif en PHP.
    -->
    <!-- Step 0.4 -->
    <!-- Quelles types primitifs n'ont pas pu être déclarés ?
    -->
    bool   array <!-- FAUX -->
    

    <!-- Step 0.5 -->
    <!-- Déclarer une variable X et une variable Y. Leurs types primitif est un nombre. Additionner les deux valeurs dans une variable SUM puis un print du total avec la méthode ECHO.
    --> 
    <?php 
     $x = 2;
     $y = 3;
     $total = $y + $x;
     echo "l'addition de {$x} et {$y} fais {$total}";
         ?>
    <!-- Step 0.6 -->
    <!-- Déclarer une variable PRODUCTS. Le type primitif est un tableau. Ajouter plusieurs produits de votre choix en "dur". 
    Afficher les informations de cette variable avec la méthode VAR_DUMP.
    -->
    <?php
    $PRODUCTS= array(1=>'Boards','Trucks','Roues','Grip','Baskets'); // SEMI FAUX
    var_dump($PRODUCTS);
    ?>
    <!-- Step 0.7 -->
    <!-- Quelle est la différence entre les méthodes ECHO et VAR_DUMP ?
    --> La méthode ECHO affiche une chaines de caractères (Les types primitifs) alors que la méthode VAR_DUMP affiche les détails d'un tableau en fournissant plus d'information

    <!-- Step 0.8 -->
    <!-- Déclarer une variable de type string. Afficher les informations de cette variable avec la méthode PRINT_R.
    -->
<?php
    
$marks="<br> thrasher <br>";
echo '<br> <br>';
print_r($PRODUCTS);
?>
    <!-- Step 0.9 -->
    <!-- 
    PRINT_R est équivalent à ECHO ? oui
    PRINT_R est équivalent à VAR_DUMP ? nan vus que VAR_DUMP donne plus d'information 
    ECHO est équivalent à VAR_DUMP ? nan 
    -->

    <!-- Step 1 -->
    <!--
    Bravo, vous venez de terminer votre initiation à PHP ! Passons à la suite en vous rendant sur ce lien :

    https://github.com/Lazy974/s1

    Made with ❤️ by HelloDev
    -->
</body>

</html>