
(function(){ 
'use strict';

var app = angular.module('myApp', []);
app.controller('myController',
    function ($scope, $http) {
        $scope.kp2=50;
        var request = {
            method: 'get',
            url: 'Users.json',
            dataType: 'json',
            contentType: "application/json"
        };

        $scope.users = new Array;

        $http(request)
        .then(function (jsonData) {
                $scope.users = jsonData;
               
                console.log(jsonData);
            });
            $scope.orderByMe = function(x) {
        $scope.myOrderBy = x;
    }
           
    });

    app.directive("w3TestDirective", function() {
        return {
            restrict : "A",
            template : "<h2>Listing Users in Network....</h2>"
        };
    });
    app.directive("w3TestDirective1", function() {
        return {
            restrict : "A",
            template : "<h2>Search for Users in Network....</h2>"
        };
    });

    app.directive("w3TestDirective2", function() {
        return {
            restrict : "A",
            template : "<h2>Post your Views here....</h2>"
        };
    });


})(); 