'use strict';

let teachers = [
  { 
    name: 'Ken',
    comments: 'Amazing',
    rating: 4
  },{ 
    name: 'James',
    comments: 'Awesome',
    rating: 2
  },{ 
    name: 'Dave',
    comments: 'Astounding',
    rating: 3
  },{ 
    name: 'John',
    comments: 'Awe-inspiring',
    rating: 7
  },{ 
    name: 'Andrew',
    comments: 'Adorable',
    rating: 10
  },{ 
    name: 'Liz',
    comments: 'Awful',
    rating: 1
  }
];

// ES5 syntax
teachers.forEach(teacher => {
  //console.log(teacher.name);
  if(teacher.name === 'Andrew') {
   // console.log(teacher.rating);
  }
});

// ES6 for...of loop syntax
for(let teacher of teachers) {
  //console.log(teacher.name);
  if(teacher.name === 'Andrew') {
    //console.log(teacher.rating);
    break;
  }
};

// ES6 for...in loop syntax
for(let prop in teachers[0]) {
  console.log('properties:' + prop  + ' = ' + teachers[0][prop]);
}
