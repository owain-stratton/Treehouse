'use strict';
var express = require('express');
var app = express();
var routes = require('./routes.js');

var jsonParser = require('body-parser').json;
var logger = require('morgan');

app.use(logger('dev'));
app.use(jsonParser());

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