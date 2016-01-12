(function() {

    'use strict';

    angular
        .module('app.account')
        .config(config);

    function config($stateProvider) {

        var path = 'app/js/modules/account/';

        $stateProvider
            .state('account', {
                url: '/account',
                templateUrl: path + 'edit/account.edit.html',
                controller: 'AccountEditController',
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
