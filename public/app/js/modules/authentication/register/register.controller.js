(function() {

    'use strict';

    angular
        .module('app.auth')
        .controller('AuthenticationRegisterController', AuthenticationRegisterController);

    function AuthenticationRegisterController($state, AuthenticationService) {

        var vm = this;

        vm.input = {
            auth_type: 'facebook',
            email: 'test@test.com',
            password: 'password'
        };

        vm.register = function(auth_type)
        {
            console.log('authTYPE:', auth_type);
            AuthenticationService
                .register(vm.input)
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
                    $state.go('home');
                    toastr.success('You will now be redirected to the home page.', 'Registration Success!');
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

                    _(response.data.data).forEach(function(value, key) {
                        toastr.error(value, 'Registration Failed.');
                    });
                });
        };
    }

})();