(function() {
    
    'use strict';
    
    angular
        .module('app', [
            'ui.router'
        ])
        .config(config);
    
    function config($stateProvider, $urlRouterProvider) {
        
        $urlRouterProvider.otherwise('/');

        $stateProvider
            .state('home', {
                url: '/',
                templateUrl: 'app/js/config/home.html'
            })
            .state('about', {
                url: '/about',
                templateUrl: 'app/js/config/about.html'
            })
            .state('contact', {
                url: '/contact',
                templateUrl: 'app/js/config/contact.html'
            });
    
    }
    
})();