(function() {

    'use strict';

    angular
        .module('app.profile')
        .factory('ProfileService', ProfileService);

    function ProfileService($http, API)
    {
        var local_url = 'profiles/';

        return {
            getAll: getAllProfiles,
            getById: getProfileById
        };

        function getProfileById(id)
        {
            return $http({
                method: 'GET',
                url: API.url + local_url + id,
                headers: {
                    'Content-Type' : 'application/x-www-form-urlencoded'
                }
            });
        }

        function getAllProfiles()
        {
            return $http({
                method: 'GET',
                url: API.url + local_url,
                headers: {
                    'Content-Type' : 'application/x-www-form-urlencoded'
                }
            }).then(function(response) {
                return response.data;
            });
        }

    }

}());
