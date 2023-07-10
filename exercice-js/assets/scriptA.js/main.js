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
