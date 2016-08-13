'use strict';

let student = function(data) {
  this.name = data.name;
  this.age = data.age;
}

let joey = new student({ name: 'Joey', age: 25 });
let sarah = new student({ name: 'Sarah', age: 22 });

console.log(joey);
console.log(sarah);