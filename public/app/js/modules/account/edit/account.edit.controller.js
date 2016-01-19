(function() {

    'use strict';

    angular
        .module('app.account')
        .controller('AccountEditController', AccountEditController);

    function AccountEditController($state, AccountService) {

        var vm = this;

        var randomString = function(length) {
            var text = "";
            var possible = "abcdefghijklmnopqrstuvwxyz0123456789";
            for(var i = 0; i < length; i++) {
                text += possible.charAt(Math.floor(Math.random() * possible.length));
            }
            return text;
        };

        vm.input = {
            summoner_name: 'fashionman69',
            verification_code: randomString(10)
        };

        vm.verify = function() {

            console.log(vm.input);
            AccountService
                .verifySummoner(vm.input)
                .then(function successCallback(response) {
                    console.log(response.data);
                }, function errorCallback(response) {

            });
        }

    }

})();