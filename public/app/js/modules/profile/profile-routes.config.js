(function() {

    'use strict';

    angular
        .module('app.profile')
        .config(config);

    function config($stateProvider) {

        var local_url = 'app/js/modules/profile/';

        $stateProvider
            .state('profiles', {
                url : '/profile/:id',
                templateUrl: local_url + 'show/profile.show.html',
                controller: 'ProfileShowController',
                controllerAs: 'vm'
            })
            .state('auth.profile', {
                url : '/profile',
                templateUrl: local_url + 'show/profile.show.html',
                controller: 'ProfileEditController',
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

