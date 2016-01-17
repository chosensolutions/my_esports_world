(function() {

    'use strict';

    angular
        .module('app.auth')
        .factory('AuthenticationService', AuthenticationService);

    function AuthenticationService($http, API)
    {
        var local_url = 'users/';

        return {
            register: postRegisterUser,
            login: postLoginUser,
            logout: postLogoutUser,
            getAuthUser: getAuthUser
        };

        function postRegisterUser(data)
        {
            return $http({
                method: 'POST',
                url: API.url + local_url + 'register',
                headers: {
                    'Content-Type' : 'application/x-www-form-urlencoded'
                },
                data: $.param(data)
            });
        }

        function postLoginUser(data)
        {
            return $http.post(API.url + local_url + 'login', data);
        }

        function postLogoutUser()
        {
            return $http({
                method: 'GET',
                url: API.url + local_url + 'logout'
            });
        }

        function getAuthUser()
        {
            return $http.get(API.url + local_url + 'get-auth-user');
        }

        function test()
        {
            return $http.post('http://mew.musbe.ca/api/v1/test');
        }
    }

}());
