(function() {
    var CustomersController = function ($scope, $log, $routeParams, customersFactory, appSettings) {

        var customerId = $routeParams.customerId;

        $scope.sortBy = 'name';
        $scope.reverse = false;
        $scope.customers = [];
        $scope.appSettings = appSettings;

        function init() {
            customersFactory.getAllProfiles()
                .success(function(customers) {
                    $scope.customers = customers;
                })
                .error(function(data, status, headers, config) {
                    $log.log(data.error + ' ' + status);
                });
        }

        init();

        customersFactory.getCustomers(customerId).
            success(function (customer) {
                $scope.user = customer;
            });


        $scope.doSort = function(propName) {
            $scope.sortBy = propName;
            $scope.reverse = !$scope.reverse;
        };

        $scope.deleteCustomer = function(customerId) {
            customersFactory.deleteCustomer(customerId)
                .success(function(status) {
                    if (status) {
                        for (var i= 0,len=$scope.customers.length;i<len;i++) {
                            if ($scope.customers[i].id === customerId) {
                                $scope.customers.splice(i,1);
                                break;
                            }
                        }
                    }
                    else {
                        $window.alert('Unable to delete customer');
                    }

                })
                .error(function(data, status, headers, config) {
                    $log.log(data.error + ' ' + status);
                });
        };
    };

    // dealing with minification
    CustomersController.$inject = ['$scope', '$log', 'customersFactory', 'appSettings'];

    angular.module('MewApp')
        .controller('CustomersController', CustomersController);
}());