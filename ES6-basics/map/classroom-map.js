'use strict';

let classroom = new Map();

let stevenJ = { name: 'Steven', age: 22 },
    sarah = { name: 'Sarah', age: 23 },
    stevenS = { name: 'Steven', age: 22 };

classroom.set('stevenJ', stevenJ);
classroom.set('sarah', sarah);
classroom.set('stevenS', stevenS);

//console.log(`classroom size: ${classroom.size}`); // returns 3
//classroom.clear(); // clears the classroom map
//console.log(`classroom size: ${classroom.size}`); // returns 0

if(classroom.has('stevenJ')) console.log('Steven J is in the classroom');
if(classroom.has('sarah')) console.log('Sarah is in the classroom');
if(classroom.has('stevenS')) console.log('Steven S is in the classroom');

//console.log('sarah:', classroom.get('sarah'));

for(let student of classroom) {
  console.log(`'${student[0]}': ${student[1].name} is ${student[1].age} years old`);
}