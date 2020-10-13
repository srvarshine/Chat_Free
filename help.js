(function(angular) {
    'use strict';
  var myApp = angular.module('scopeInheritance', []);
  myApp.controller('MainController', ['$scope', function($scope) {
    $scope.name1 = 'Varshine';
  }]);
  myApp.controller('ChildController', ['$scope', function($scope) {
    $scope.name2 = 'S R';
  }]);
  })(window.angular);