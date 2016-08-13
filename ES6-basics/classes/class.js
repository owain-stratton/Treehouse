'use strict';

class student {
  constructor({ name, age, interestLevel = 5 } = {}) {
    this.name = name;
    this.age = age;
    this.interestLevel = interestLevel;
    this.grades = new Map();
  }
}

let joey = new student({ name: 'Joey', age: 25 });
let sarah = new student({ name: 'Sarah', age: 22 });
let angie = new student({ name: 'Angie', age: 27 });

angie.grades.set('History', 'B');
angie.grades.set('Math', 'A*');

console.log(joey);
console.log(sarah);
console.log(Array.from(angie.grades));