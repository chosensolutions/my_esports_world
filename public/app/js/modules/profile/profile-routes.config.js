(function() {

    'use strict';

    angular
        .module('app')
        .config(routeConfig);

    function routeConfig($stateProvider)
    {
        var local_url = 'app/js/modules/profile/';

        $stateProvider
            .state('profile', {
                url : '/profile',
                templateUrl: local_url + 'profile.html'
            });
    }

})();

