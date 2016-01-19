(function() {

    'use strict';

    angular
        .module('app.auth')
        .controller('AuthenticationLoginController', AuthenticationLoginController);

    function AuthenticationLoginController($state, $stateParams, AuthenticationService) {

        var vm = this;

        vm.input = {
            auth_type: 'normal',
            email: 'test@test.com',
            password: 'password'
        };

        vm.login = function()
        {
            AuthenticationService
                .login(vm.input)
                .then(function successCallback(response)
                {
                    console.log('---------------------------------');
                    console.log('---------- Success --------------');
                    console.log('---------------------------------');
                    console.log('Code:', response.data.code);
                    console.log('Message:', response.data.message);
                    console.log('Data:', response.data.data);
                    console.log('Status Code: ' + response.status);
                    console.log('Status Text: ' + response.statusText);

                    if(response.data.data.login_attempt)
                    {
                        $state.transitionTo('auth.profileEdit', $stateParams, {
                            reload: true,
                            inherit: false,
                            notify: true
                        });
                    }
                    else {
                        toastr.error('Your Email/Password is Incorrect.', 'Login Failed.');
                    }

                }, function errorCallback(response)
                {
                    console.log('---------------------------------');
                    console.log('---------- Error ----------------');
                    console.log('---------------------------------');
                    console.log('Code:', response.data.code);
                    console.log('Message:', response.data.message);
                    console.log('Data:', response.data.data);
                    console.log('Status Code: ' + response.status);
                    console.log('Status Text: ' + response.statusText);
                });
        };
    }

})();