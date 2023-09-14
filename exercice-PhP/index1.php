<!-- 
Dans cet exercice, vous apprendrez à manipuler les tableaux php.
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
    <link rel="stylesheet" href="./assets/css/styles.css">
    <script src="./assets/js/main.js"></script>
</head>

<body>
    <h1 class="text-center py-10">Learn PHP - Step 1</h1>

    <!-- Step 1.1 -->
    <!-- Déclarer une variable MY PRODUCT de type tableau en SNAKE CASE
    -->
<?php

use function PHPUnit\Framework\stringContains;

$MyProduct=['phone','pc','télévision'];
print_r($MyProduct);
echo '<br/>';
$array_map=array_map(NULL,$MyProduct);
echo '<br/>';


$stack = ['console', 'micro'];
array_push($stack, 'écran', 'pc gamer');
print_r($stack);
echo '<br/>';

$delete = array_pop($MyProduct);
print_r($stack);
echo '<br/>';
$replacements = array(0 => "casque", 4 => "tablette");
$replacements2 = array(0 => "chargeur");
print_r($replacements);
echo '<br/>';
print_r($replacements2);
echo '<br/>';
$switch = array_replace($stack, $replacements, $replacements2);
print_r($switch);
echo '<br/>';
$new_merge= array_merge($MyProduct, $stack);
print_r($new_merge);
echo '<br/>';
$new_rand= array_rand($new_merge, 2);
echo $new_merge[$new_rand[0]];
echo $new_merge[$new_rand[1]];

$arr=[1,2,3,4,5];
echo $arr;
$replace=['console'=>'micro'];
?>
    <!-- Step 1.2 -->
    <!-- Dans la variable créée plus tôt, insérer 3 valeurs ou plus. Utiliser la méthode ARRAY_MAP avec la valeur NULL en premier argument.
    -->

    <!-- Step 1.3 -->
    <!-- Avec la même variable, ajouter 1 valeur ou plus au tableau avec la méthode ARRAY_PUSH.
    -->

    <!-- Step 1.4 -->
    <!-- Avec la même variable, supprimer la dernière valeur avec la méthode ARRAY_POP.
    -->

    <!-- Step 1.5 -->
    <!-- Déclarer une nouvelle variable de type tableau en y insérant 3 valeurs ou plus. Remplacer l'ancien tableau de votre première variable par la deuxième avec la méthode ARRAY_REPLACE.
    -->

    <!-- Step 1.6 -->
    <!-- A l'aide de vos deux variables, effectuer une fusion de deux tableaux grâce à la méthode ARRAY_MERGE.
    -->

    <!-- Step 1.7 -->
    <!-- A l'aide de votre précédent tableau fusionné, utiliser la méthode ARRAY_RAND afin de choisir au hasard des valeurs à print.
    -->

    <!-- Step 1.8 -->
    <!-- Déclarer une variable contenant 3 valeurs ou plus de type tableau associatif en textualisant les clés d'un tableau avec la méthode ARRAY. Ensuite, faites un print d'une valeur au choix en utilisant sa clé associée et la méthode PRINT_R ou ECHO.
    -->

    <!-- Step 1.9 -->
    <!-- Avec le tableau associatif créé précédemment, remplacer la valeur d'une des clés avec la méthode ARRAY_REPLACE.
    -->

    <!-- Step 2 -->
    <!--
    Bravo, vous venez de terminer la manipulation d'un tableau PHP ! Ils existent encore pleins d'autres méthodes consultables ici :

    https://www.php.net/manual/en/ref.array.php
    
    Passons à la suite en vous rendant sur ce lien :

    https://github.com/Lazy974/s2
**
    Made with ❤️ by HelloDev
    -->

</body>

</html>