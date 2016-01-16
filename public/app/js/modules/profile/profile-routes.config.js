(function() {

    'use strict';

    angular
        .module('app.profile')
        .config(config);

    function config($stateProvider) {

        var local_url = 'app/js/modules/profile/';

        $stateProvider
            .state('profiles', {
                url : '/profiles',
                templateUrl: local_url + 'index/profile.index.html'
            })
            .state('auth.profile', {
                url : '/profile',
                templateUrl: local_url + 'show/profile.show.html',
                controller: 'ProfileShowController',
                controllerAs: 'vm'
            })
            .state('auth.profileEdit', {
                url : '/profile/edit',
                templateUrl: local_url + 'edit/profile.edit.html',
                controller: 'ProfileEditController',
                controllerAs: 'vm'
            });
    }

})();

