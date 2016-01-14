(function() {

    'use strict';

    angular
        .module('app')
        .config(config);

    function config($stateProvider) {

        var local_url = 'app/js/modules/profile/';

        $stateProvider
            .state('profile', {
                url : '/profile',
                templateUrl: local_url + 'show/profile.show.html'
            });
    }

})();

