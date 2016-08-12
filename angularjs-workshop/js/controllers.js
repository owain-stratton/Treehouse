'use strict';

var controllers = angular.module('TMDb.controllers', []);

controllers.controller('appCtrl', function ($scope) {
  $scope.name = 'World!!';
  
  $scope.updateName = function() {
    $scope.name = 'World from function';
  }
});


controllers.controller('MoviesListCtrl', function($scope, $routeParams, TMDbFactory) { 
  TMDbFactory.list('movie')
    .then(function(data) {
      $scope.list = data.data;
      console.log(data.data);   
    });
  
  $scope.loadNextPage = function() {
    TMDbFactory.list('movie', {page: $scope.list.page + 1})
      .then(function(data) {
        $scope.list.page = data.data.page;
        $scope.list.results = $scope.list.results.concat(data.data.results);
        console.log(data);
      });
  }
  
});

controllers.controller('TVListCtrl', function($scope, $routeParams, TMDbFactory) { 
  TMDbFactory.list('tv')
    .then(function(data) {
      $scope.list = data.data;
      console.log(data.data);   
    });
  
  $scope.loadNextPage = function() {
    TMDbFactory.list('tv', {page: $scope.list.page + 1})
      .then(function(data) {
        $scope.list.page = data.data.page;
        $scope.list.results = $scope.list.results.concat(data.data.results);
        console.log(data);
      });
  }
  
});

controllers.controller('MovieCtrl', function($scope, $routeParams, TMDbFactory) {    
  var id = $routeParams.id;
  
  TMDbFactory.single('movie', id).then(function(data) {
      $scope.movie = data.data;
      console.log(data);   
    });
});

controllers.controller('TVCtrl', function($scope, $routeParams, TMDbFactory) {  
  var id = $routeParams.id;
  
  TMDbFactory.single('tv', id).then(function(data) {
      $scope.tv = data.data;
      console.log(data);   
    });
});

