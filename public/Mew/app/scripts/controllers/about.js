'use strict';

/**
 * @ngdoc function
 * @name mewApp.controller:AboutCtrl
 * @description
 * # AboutCtrl
 * Controller of the mewApp
 */
angular.module('mewApp')
  .controller('AboutCtrl', function ($scope) {
    $scope.awesomeThings = [
      'HTML5 Boilerplate',
      'AngularJS',
      'Karma'
    ];
  });
