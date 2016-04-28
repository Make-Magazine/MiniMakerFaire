var app = angular.module('mtm', []);

app.controller('mtmMakers', function($scope, $http) {
  $http.get('http://www.makershed.com/collections/just-arrived/products.json')
  .success(function(response) {
    $scope.makers = response.products;
  });
});