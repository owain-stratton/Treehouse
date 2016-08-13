'use strict';

let classroom = new Set();

let stevenJ = { name: 'Steven', age: 22 },
    sarah = { name: 'Sarah', age: 23 },
    stevenS = { name: 'Steven', age: 22 };

classroom.add(stevenJ);
classroom.add(sarah);
classroom.add(stevenS);

if(classroom.has(stevenJ)) console.log('Steven J is in the classrooom');
if(classroom.has(sarah)) console.log('Sarah is in the classrooom');
if(classroom.has(stevenS)) console.log('Steven S is in the classrooom');


console.log(`classroom size: ${classroom.size}`);

classroom.delete(stevenJ);

console.log(`classroom size: ${classroom.size}`);

// create an array of students in the classroom Set()

let arrayofStudents = Array.from(classroom);
console.log(arrayofStudents);

let alumni = new Set(arrayofStudents);
console.log(`Alumni size: ${alumni.size}`);