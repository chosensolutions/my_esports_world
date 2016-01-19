(function() {

    'use strict';

    angular
        .module('app')
        .controller('NavbarController', NavbarController);

    function NavbarController($state, $stateParams, $timeout, AuthenticationService) {

        var vm = this;

        vm.logout = function()
        {
            AuthenticationService
                .logout()
                .then(function successCallback(response)
                {
                    location.reload();
                    $timeout(function() {
                        toastr.success('You are now Logged out.');
                        $state.transitionTo('auth.home', $stateParams, {
                            reload: true,
                            inherit: true,
                            notify: true
                        });
                        console.log('update with timeout fired')
                    }, 1000);

                    console.log(response.data);
                }, function errorCallback(response)
                {
                    console.log(response.data);
                });
        }

    }

})();