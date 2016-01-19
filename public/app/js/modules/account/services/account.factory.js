(function() {

    'use strict';

    angular
        .module('app.account')
        .factory('AccountService', AccountService);

    function AccountService($http, API)
    {
        var local_url = 'accounts/';

        return {
            getAccount: getAccount,
            updateAccount: updateAccount,
            verifySummoner: verifySummoner
        };

        function getAccount(data)
        {
            return $http({
                method: 'POST',
                url: API.url + local_url + 'account',
                headers: {
                    'Content-Type' : 'application/x-www-form-urlencoded'
                },
                data: $.param(data)
            });
        }

        function updateAccount(data)
        {
            return $http.post(API.url + local_url + 'login', data);
        }

        /**
         * @param data
         * input:
         * - summoner_name
         * - verification_token
         */
        function verifySummoner(data)
        {
            $http({
                method: 'POST',
                url: API.url + 'accounts/verify-summoner',
                data: $.param(data)
            })
        }
    }

}());
