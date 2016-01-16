(function() {

    'use strict';

    angular
        .module('app')
        .controller('NavbarController', NavbarController);

    function NavbarController($state, $stateParams, AuthenticationService) {

        var vm = this;

        console.log('navbar');

        vm.logout = function()
        {
            AuthenticationService
                .logout()
                .then(function successCallback(response)
                {
                    $state.transitionTo('auth.home', $stateParams, {
                        reload: true,
                        inherit: true,
                        notify: true
                    });
                    console.log(response.data);
                }, function errorCallback(response)
                {

                });
        }

    }

})();