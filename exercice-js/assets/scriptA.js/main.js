const expr = (Fruit) => {
  switch (Fruit) {
    case "Fraise":
      console.log("Vous avez choisi une Fraise");
      break;

    case "Aubergine":
      console.log("vous avez choisi un légume");
      break;
    default:
      console.log();
      break;
  }
};

expr("Fraise");

/*Challenge JS : Créer une fonction showName avec deux paramètres : firstName et lastName. La fonction doit renvoyer dans la console > Bonjour, je m'appelle FIRSTNAME et LASTNAME.*/


const showName = (firstName,lastName) => {
console.log(`bonjour,je m'appelle ${firstName} ${lastName}`);

}

showName();



/*Challenge JS : Créer une fonction Multiply ayant un seul argument permettant de multiplier le nombre par lui même.

Exemple : lors de l'appel à la fonction, dans la console, l'argument 5 aura pour résultat 5 x 5 qui fait donc 25.*/


const Multiply =(number)=>{
console.log(number*number)

}
Multiply(5)