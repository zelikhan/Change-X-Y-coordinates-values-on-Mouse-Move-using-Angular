<!DOCTYPE html>
<html ng-app="myApp">
<head>
 <title>Change X, Y Coordinates on Mouse Move using AngularJS</title>
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
 <style>
 #box {
 width: 200px;
 height: 200px;
 background-color: lightblue;
 position: relative;
 }
 #coords {
 position: absolute;
 top: 0;
 left: 0;
 }
 </style>
</head>
<body ng-controller="myCtrl">
 <h1>Change X, Y Coordinates on Mouse Move using AngularJS</h1>
 
 <div id="box" ng-mousemove="updateCoords($event)">
 <div id="coords">X: {{xCoord}}, Y: {{yCoord}}</div>
 </div>
 
 <script>
 var app = angular.module('myApp', []);
 app.controller('myCtrl', function($scope) {
 $scope.xCoord = 0;
 $scope.yCoord = 0;
 
 $scope.updateCoords = function(event) {
 $scope.xCoord = event.clientX;
 $scope.yCoord = event.clientY;
 };
 });
 </script>
</body>
</html>