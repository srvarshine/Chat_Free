
(function(){ 
    'use strict';
    var myApp = angular.module("myApp", []);
    myApp.controller("myController", function($scope) {
    $scope.length = '';
    $scope.getStrLength = function() {
       $scope.status=''
        $scope.length = $scope.inputText.length;
        if($scope.length<8)
        {
           $scope.status='The password is of Invalid length'
        }
        else
        {
           $scope.status='The password is of  Valid length'
        }
    };
   });
})();     
