var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http, $sce) {

    $scope.txtCat = "PizzAamiea";
    /** Add button click */
    $scope.displayModal = function() {
        /** Change HTML on add button click */
        $scope.card_title = function(htmlCode) {
            return $sce.trustAsHtml(htmlCode);
        };
        $scope.addText = '<b>Add Food Category</b>';
        /** Remove value of Category */
        $scope.txtCategory = "Pizza";
    }
});