'use strict';

function submit(name, comments, rating = 5) {
  let data = {name, comments, rating};
  
  for(let key in data) {
    console.log(`${key}:`, data[key]);
  }
  // ...do AJAX request
}

submit('English', 'Great Course!');