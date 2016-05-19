var app = angular.module('mtm', []);

app.controller('mtmMakers', function($scope, $http) {
  $http.get('/wp-content/themes/MiniMakerFaire/entity.json')
  .then(function successCallback(response) {
    $scope.makers = response.data.entity;
    $scope.category = '';
    $scope.tags = [];
    angular.forEach($scope.makers, function(maker) {
      for (var i = 0; i < maker.category_id_refs.length; i++) {
        if ($scope.tags.indexOf(maker.category_id_refs[i]) == -1)
            $scope.tags.push(maker.category_id_refs[i]);
      }
    });
  }, function errorCallback(error) {
    console.log(error);
  });
  $scope.setTagFilter = function (tag) {
    $scope.category = tag;
  }
});

app.filter('byCategory', function(){
    return function(items, maker) {
        var filtered = [];

        if (!maker || !items.length) {
          return items;
        }
        items.forEach(function(itemElement, itemIndex) {
          itemElement.category_id_refs.forEach(function(categoryElement, categoryIndex) {

            if (categoryElement === maker) {
              filtered.push(itemElement);
              return false;
            }
          });
        });

        return filtered;
    };
  });