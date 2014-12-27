(function() {

    var app = angular.module('MewApp', [
        'ngRoute',
        'ngAnimate'
    ]);

    app.config(function ($routeProvider) {
        $routeProvider
            .when('/',
            {
                controller: 'ProfilesController',
                templateUrl: 'app/views/customers.html'
            })
            .when('/profiles/:id',
            {
                controller: 'ProfilesController',
                templateUrl: 'app/views/customer.html'
            })
            .otherwise({
                redirectTo: '/'
            });
    });

}());