(function () {

    var app = angular.module('MewApp', ['ngRoute', 'ngAnimate']);

    app.config(function ($routeProvider) {
        $routeProvider
            .when('/',
            {
                controller: 'CustomersController',
                templateUrl: 'app/views/customers.html'
            })
            .when('/customers/:customerId',
            {
                controller: 'CustomersController',
                templateUrl: 'app/views/customer.html'
            })
            .when('/orders/:customerId',
            {
                controller: 'OrdersController',
                templateUrl: 'app/views/orders.html'
            })
            .when('/orders',
            {
                controller: 'AllOrdersController',
                templateUrl: 'app/views/allorders.html'
            })
            .otherwise( { redirectTo: '/' } );

    });

}());