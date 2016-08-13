'use strict';

var Person = function(data) {
  for(var key in data) {
    this[key] = data[key];
  }
  this.getKeys = () => {
    return Object.keys(this);
  }
}

var Alana = new Person({
  name: 'Alana',
  role: 'Teacher'
});

console.log('Alana\'s keys:', Alana.getKeys()); // 'this' refers to Alana

var getKeys = Alana.getKeys;

console.log(getKeys()); // 'this' refers to Alana