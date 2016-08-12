'use-strict';
var angular = require('angular');

var app = angular.module('TMDb', ['TMDb.controllers', require('angular-route'), 'TMDb.filters', 'TMDb.services']);

app.config(function($routeProvider) {
  $routeProvider
    .when('/movie', {
      controller: 'MoviesListCtrl', 
      templateUrl: 'partials/movie_list.html'
    })
    .when('/tv', {
      controller: 'TVListCtrl', 
      templateUrl: 'partials/tv_list.html'
    })
    .when('/movie/:id', {
      controller: 'MovieCtrl', 
      templateUrl: 'partials/movie.html'
    })
    .when('/tv/:id', {
      controller: 'TVCtrl', 
      templateUrl: 'partials/tv.html'
    })
    .otherwise({
      redirectTo: '/movie'
    })
});