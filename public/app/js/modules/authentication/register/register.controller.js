(function() {

    'use strict';

    angular
        .module('app.auth')
        .controller('AuthenticationRegisterController', AuthenticationRegisterController);

    function AuthenticationRegisterController($state, AuthenticationService) {

        var vm = this;

        vm.input = {
            type: 'normal',
            email: 'string@sadasd.com',
            password: 'password'
        };

        vm.register = function()
        {
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
                        toastr.error(value, 'Failed to Create your Account.');
                    });
                });
        };
    }

})();