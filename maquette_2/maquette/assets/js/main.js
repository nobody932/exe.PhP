console.log("test");
console.error("error");

// Peut être re déclarer et ré assigné
var firstName = "florian";
// console.log(firstName);
let lastName = "Alerte";
console.log(lastName);

const city = "Meaux";
console.log(city);

firstName = 1;
// console.log(firstName);

// Peut être ré assigné mais pas re déclaré
// let lastName = 1;
// console.log(lastName);

// Ne peut être re déclarer et ré assigner
// const city = "Paris";
// console.log(city);

// TYPE PRIMITIF

let string = "abcdef";
let number = 1;
let boolean = true || false;
let array = [];
let object = {};
let nulll = null;
// let undefined = undefined;
// let symbol = Symbol();
// let bigInt = BigInt();

const MyFirstFunction = (name, age) => {
  // alert("Salut !");
  console.log("Bonjour, je m'apelle " + name + " et j'ai " + age + " ans !");
  console.log(`Bonjour, je m'appelle ${name} et j'ai ${age} ans!`);
};
MyFirstFunction("Florian", 31);

let btnBronze = document.getElementById("btn-bronze");
// console.log(btnBronze);
btnBronze.addEventListener("click", () => {
  alert("Vous avez choisi l'offre bronze !");
});

// let input1 = document.getElementById("input-1");
// input1.addEventListener("input", () => {
//   console.log(input1.value);
// });

// EXO JS
// - Créer un formulaire avec deux inputs et un button
// - Récupérer les inputs et le button en javascript
// - Créer une fonction qui additionne la valeur des deux inputs lors de la soumission du formulaire

// Vous aurez besoin de la fonction parseInt()

let input1 = document.getElementById("input-1");
let input2 = document.getElementById("input-2");
let btnSubmit = document.getElementById("btn-submit");
let results = document.getElementById("results");

const Add = () => {
  // console.log(input1.value + input2.value);
  let value1 = parseInt(input1.value);
  let value2 = parseInt(input2.value);
  let sum = (value1 += value2);
  results.append(sum);
};

btnSubmit.addEventListener("click", () => Add());

const inputText = document.getElementById("input-text");
const buttonText = document.getElementById("btn-text");
const textResult = document.getElementById("text-result");

const createText = () => {
  if (inputText.value === "") {
    alert("Remplissez le champ");
  } else if (inputText.value === "bollo") {
    alert("Vous avez écrit bollo");
  } else {
    // console.log(inputText.value);
    const text = document.createElement("p");
    // text.innerHTML = "Vous avez écrit " + inputText.value;
    text.innerHTML = `Vous avez écrit ${inputText.value}`;
    textResult.append(text);
  }
};

buttonText.addEventListener("click", () => createText());
console.log(inputText);

const Test = () => {
  let age = 10;

  if (age >= 18) {
    console.log("Tu peux conduire");
  } else if (age < 18) {
    console.log("Tu peux pas conduire");
  }
};
Test();
