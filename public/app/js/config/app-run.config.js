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

        $rootScope.$on('$stateChangeStart', function(event, toState, toParams, fromState, fromParams) {
            //$('.content').hide();
            //toastr.clear();
            //event.preventDefault();

            console.log('Event: ', event);
            console.log('toState: ', toState);
            console.log('fromState: ', fromState);
        });
    }

})();