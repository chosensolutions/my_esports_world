(function() {

    'use strict';

    angular
        .module('app')
        .factory(SessionService);

    function SessionService($rootScope, $location, $state, $http, AuthenticationService, API)
    {
        return {
            set: set(),
            get: get(),
            remove: remove()
        };

        function set(key, value)
        {
            sessionStorage.setItem(key, value);
        }

        function get(key)
        {
            sessionStorage.getItem(key);
        }

        function remove(key)
        {
            sessionStorage.removeItem(key);
        }
    }

})();