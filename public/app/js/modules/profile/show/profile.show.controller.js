(function() {

    'use strict';

    angular
        .module('app.profile')
        .controller('ProfileShowController', ProfileShowController);

    function ProfileShowController($rootScope) {

        var vm = this;

        console.log('---------------------------------');
        console.log('---------- DEBUG-- --------------');
        console.log('---------------------------------');
        console.log((window.location.origin).toString() == 'http://localhost:8000');

    }

})();