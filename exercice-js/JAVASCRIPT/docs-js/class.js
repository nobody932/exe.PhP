class Car {
  constructor(mark, price, model) {
    this.mark = mark;
    this.price = price;
    this.model = model;
  }
}

let car1 = new Car("tesla", 100000, "Y");

class Accessories extends Car {
  constructor(mark, price, model) {
    super(mark, price, model);
  }
}
