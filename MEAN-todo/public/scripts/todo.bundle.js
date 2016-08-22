(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';
var angular = require('angular');

angular.module('todoListApp', []);

require('./scripts/controllers/main.js');
require('./scripts/controllers/todo.js');
require('./scripts/directives/todo.js');
require('./scripts/services/data.js');

},{"./scripts/controllers/main.js":2,"./scripts/controllers/todo.js":3,"./scripts/directives/todo.js":4,"./scripts/services/data.js":5,"angular":"angular"}],2:[function(require,module,exports){
'use strict';
var angular = require('angular');

angular.module('todoListApp')
.controller('mainCtrl', function($scope, $interval, $log, dataService){

  $scope.seconds = 0;
  $scope.counter = function() {
    $scope.seconds++;
    $log.log($scope.seconds + ' have passed!');
  }
  $interval($scope.counter, 1000, 10);

  dataService.getTodos(function(response){
    var todos = response.data.todos;
    $scope.todos =  todos;
    });

  $scope.addTodo = function() {
    $scope.todos.unshift({name: "This is a new todo.",
                      completed: false});
  };

})

},{"angular":"angular"}],3:[function(require,module,exports){
'use strict';
var angular = require('angular');

angular.module('todoListApp')
.controller('todoCtrl', function($scope, dataService) {
  $scope.deleteTodo = function(todo, index) {
    $scope.todos.splice(index, 1);
    dataService.deleteTodo(todo);
  };

  $scope.saveTodos = function() {
    var filteredTodos = $scope.todos.filter(function(todo){
      if(todo.edited) {
        return todo
      };
    })
    dataService.saveTodos(filteredTodos).finally($scope.resetTodoState());
  };

  $scope.resetTodoState = function() {
    $scope.todos.forEach(function(todo) {
      todo.edited = false;
    });
  }
});

},{"angular":"angular"}],4:[function(require,module,exports){
'use strict';
var angular = require('angular');

angular.module('todoListApp')
.directive('todo', function(){
  return {
    templateUrl: 'templates/todo.html',
    replace: true,
    controller: 'todoCtrl'
  }
});

},{"angular":"angular"}],5:[function(require,module,exports){
'use strict';
var angular = require('angular');

angular.module('todoListApp')
.service('dataService', function($http, $q) {
  this.getTodos = function(cb) {
    $http.get('/api/todos').then(cb);
  };

  this.deleteTodo = function(todo) {
    $http.delete('/api/todos/' + todo._id).then(todo);
  };

  this.saveTodos = function(todos) {
    var queue = [];
    todos.forEach(function(todo) {
      var request;
      if(!todo._id) {
        request = $http.post('/api/todos', todo)
      } else {
        request = $http.put('/api/todos/' + todo._id, todo)
          .then(function(result) {
            todo = result.data.todo;
            return todo;
          })
      }
      queue.push(request);
    });
    return $q.all(queue).then(function(results) {
      console.log('I saved' + todos.length + ' todos!');
    });
  };

});

},{"angular":"angular"}]},{},[1]);
