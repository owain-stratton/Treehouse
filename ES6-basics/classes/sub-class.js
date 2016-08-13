'use strict';

class person {
  dance() {
    const dances = [
      'waltz',
      'tango',
      'mambo',
      'foxtrot'
    ];
    console.log(`${this.name} is doing the ${dances[Math.floor(Math.random() * dances.length)]}!`);
  }
  constructor({ name, age, eyecolor = 'brown' } = {}) {
    this.name = name;
    this.age = age;
    this.eyecolor = eyecolor;
  }
}

class student extends person {
  dance(traditional) {
    if(traditional) {
      super.dance();
      return;
    }
    const dances = [
      'jive',
      'lyrical',
      'interpretive',
      'ballet'
    ];
    console.log(`${this.name} is doing the ${dances[Math.floor(Math.random() * dances.length)]}!`);
  }
  constructor({ name, age, interestLevel = 5 } = {}) {
    super({ name, age });
    this.name = name;
    this.age = age;
    this.interestLevel = interestLevel;
    this.grades = new Map();
  }
}

let Angie = new student({ name: 'Angie', age: 27, interestLevel: 3 });
Angie.dance(true);
Angie.dance(false);
console.log(Angie.interestLevel);