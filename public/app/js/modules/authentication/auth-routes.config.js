(function() {

    'use strict';

    angular
        .module('app.auth')
        .config(config);

    function config($stateProvider) {

        var path = 'app/js/modules/authentication/';

        $stateProvider
            .state('register', {
                url: '/register',
                templateUrl: path + 'register/register.html',
                controller: 'AuthenticationRegisterController',
                controllerAs: 'vm'
            })
            .state('login', {
                url: '/login',
                templateUrl: path + 'login/login.html',
                controller: 'AuthenticationLoginController',
                controllerAs: 'vm',
                 resolve: {
                     test: function() {
                         return true
                     }
                 }
            });

        function getData(companyData, $stateParams) // companyData is a factory
        {
            return companyData.load($stateParams.companyId);
        }

    }

})();
