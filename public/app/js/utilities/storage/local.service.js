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
            localStorage.setItem(key, value);
        }

        function get(key)
        {
            localStorage.getItem(key);
        }

        function remove(key)
        {
            localStorage.removeItem(key);
        }
    }

})();