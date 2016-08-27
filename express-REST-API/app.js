'use strict';
var express = require('express');
var app = express();
var routes = require('./routes.js');

var jsonParser = require('body-parser').json;
var logger = require('morgan');

app.use(logger('dev'));
app.use(jsonParser());

var mongoose = require('mongoose');

mongoose.connect('mongodb://localhost:27017/qa');

var db = mongoose.connection;

db.on('error', function(err) {
  console.error('connection error', err);
});

db.once('open', function() {
  console.log('Database connection was successful!');
});

app.use(function(req, res, next) {
  res.header('Access-Control-Allow-Origin', '*');
  res.header('Access-Control-Allow-Headers', 'Origin, X-Requested-With, Content-Type, Accept');
  if(req.method === 'OPTIONS') {
    res.header('Access-Control-Allow-Origin', 'PUT, POST, DELETE');
    return res.status(200).json({});
  }
  next();
});

app.use('/questions', routes);

// Catch 404 error handler
app.use(function(req, res, next) {
  var err = new Error('Not Found');
  err.status = 404;
  next(err);
});

// Error handler
app.use(function(err, req, res, next) {
  res.status(err.status || 500);
  res.json({
    error: {
      message: err.message
    }
  });
});

// EXPRESS SERVER
var port = process.env.PORT || 3000;
app.listen(port, function() {
  console.log('Server is up and running Toastface!!! Listening on port', port);
});
