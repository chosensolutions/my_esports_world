(function() {
    var customersFactory = function($http) {

        var factory = {};

        factory.getCustomers = function() {
            return $http.get('/api/v1/profiles');
        };

        factory.getCustomer = function(customerId) {
            return $http.get('/api/v1/profiles' + customerId);
        };

        factory.getOrders = function() {
            return $http.get('/orders');
        };

        factory.deleteCustomer = function(customerId) {
            return $http.delete('/customers/' + customerId);
        }

        return factory;
    };

    customersFactory.$inject = ['$http'];

    angular.module('MewApp').factory('customersFactory', customersFactory);

}());