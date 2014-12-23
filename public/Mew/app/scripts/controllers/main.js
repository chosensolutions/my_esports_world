'use strict';

/**
 * @ngdoc function
 * @name mewApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the mewApp
 */
angular.module('mewApp')
  .controller('MainCtrl', function ($scope) {
    $scope.awesomeThings = [
      'HTML5 Boilerplate',
      'AngularJS',
      'Karma'
    ];
  });
