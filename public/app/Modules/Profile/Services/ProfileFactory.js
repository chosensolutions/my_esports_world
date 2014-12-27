(function() {

    var ProfileFactory = function($http) {

        return {
            get : function() {
                return $http.get('/api/v1/profiles');
            },
            show : function(id) {
                return $http.get('/api/v1/profiles' + id);
            },
            save : function(commentData) {
                return $http({
                    method: 'POST',
                    url: 'api/comments',
                    headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                    data: $.param(commentData)
                });
            },
            destroy : function(id) {
                return $http.delete('/api/v1/profiles' + id);
            }
        }
    };

    ProfileFactory.$inject = ['$http'];

    angular.module('MewApp', [])
        .factory('ProfileFactory', ProfileFactory);

}());