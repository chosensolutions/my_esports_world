(function() {

    'use strict';

    angular
        .module('app')
        .controller('NavbarController', NavbarController);

    function NavbarController($state, $stateParams, AuthenticationService) {

        var vm = this;

        vm.logout = function()
        {
            AuthenticationService
                .logout()
                .then(function successCallback(response)
                {
                    toastr.success('You are now Logged out.');
                    $state.transitionTo('auth.home', $stateParams, {
                        reload: true,
                        inherit: true,
                        notify: true
                    });
                    console.log(response.data);
                }, function errorCallback(response)
                {
                    console.log(response.data);
                });
        }

    }

})();