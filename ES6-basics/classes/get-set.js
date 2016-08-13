'use strict';

class Student {
  get name() {
    return `${this.firstName} ${this.lastName}`;
  }
  set name(input) {
    let name = input.split(' ');
    this.firstName = name[0];
    this.lastName = name[1] + ' ' + name[2];
  }
  constructor({ firstName, lastName, age, interestLevel = 5} = {}) {
    this.firstName = firstName;
    this.lastName = lastName;
    this.age = age;
    this.interestLevel = interestLevel;
  }
}

let Angie = new Student({ firstName: 'Angie', lastName: 'The Fearless', age: 27 });

console.log(Angie.name);
Angie.name = 'Angie The Bold';
console.log(Angie.name);



