'use strict';
var express = require('express');
var Todo = require('../models/todo');
// var todos = require('../../mock/todos.json');

var router = express.Router();

router.get('/todos', function(req, res) {
  Todo.find({}, function(err, todos) {
    if(err) {
      return res.status(500).json({ message: err.message });
    } else {
      res.json({ todos: todos });
    }
  });
});

router.put('/todos/:id', function(req, res) {
  var id = req.params.id;
  var todo = req.body;
  if(todo && todo._id !== id) {
    return res.status(500).json({ err: 'Id does not match!' });
  }
  Todo.findByIdAndUpdate(id, todo, { new: true }, function(err, todo) {
    if(err) {
      return res.status(500).json({ err: err.message });
    }
    res.json({ 'todo': todo, message: 'Todo Updated' });
  });
});

router.post('/todos', function(req, res) {
  var todo = req.body;
  Todo.update(todo, function(err, todo) {
    if(err) {
      return res.status(500).json({ err: err.message });
    }
    res.json({ 'todo': todo, message: 'Todo Created' });
  });
});

// TODO: add DELETE route to delect entries
router.delete('/todos/:id', function(req, res) {
  var id = req.params.id;
  Todo.remove({ '_id': id }, function(err, todo) {
    if(err) {
      return res.status(500).json({ err: err.message });
    }
    res.send('Todo deleted!');
  });
});

module.exports = router;
