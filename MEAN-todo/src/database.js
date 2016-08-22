'use strict';
var mongoose = require('mongoose');

mongoose.connect('mongodb://localhost/mean-todo', function(err) {
  if(err) {
    console.log('failed to connect to MongoDB');
  } else {
    console.log('successfully connected to MongoDB');
  }
});
