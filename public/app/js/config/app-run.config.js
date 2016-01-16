(function() {

    'use strict';

    angular
        .module('app')
        .run(appRun);

    function appRun($rootScope, $location, $state, $http, API)
    {
        console.log('-------------------------------------');
        console.log('---------- APP INITIALIZED ----------');
        console.log('=====================================');

        $http.get(API.url + 'users/get-auth-user')
            .then(
                function successCallback(response) {},
                function errorCallback(response) {}
            )
            .then()
    }

})();