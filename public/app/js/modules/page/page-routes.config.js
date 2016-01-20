(function() {

    'use strict';

    angular
        .module('app')
        .config(config);

    function config($stateProvider, $urlRouterProvider) {

        var path = 'app/js/modules/page/static/';
        $stateProvider
            .state('auth.home', {
                url: '/',
                templateUrl: path + 'home.html',
                controller: 'PageController',
                controllerAs: 'vm'
            })
            .state('about', {
                url: '/about',
                templateUrl: path + 'about.html'
            })
            .state('contact', {
                url: '/contact',
                templateUrl: path + 'contact.html'
            });

    }

})();