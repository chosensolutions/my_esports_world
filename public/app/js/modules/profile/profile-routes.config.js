(function() {

    'use strict';

    angular
        .module('app.profile')
        .config(config);

    function config($stateProvider) {

        var local_url = 'app/js/modules/profile/';

        $stateProvider
            .state('auth.profiles', {
                url : '/profiles',
                templateUrl: local_url + 'index/profile.index.html',
                controller: 'ProfileIndexController',
                controllerAs: 'vm',
                resolve: {
                    profilesData: function(ProfileService, $q) {
                        return $q.resolve(ProfileService.getAll()).then(
                            function (results) {
                                return results.data;
                            });
                    }
                }
            })
            .state('profile', {
                url : '/profile/:id',
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

