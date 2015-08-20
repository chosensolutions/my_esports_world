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
                templateUrl: 'js/config/home.html'
            })
            .state('about', {
                url: '/about',
                templateUrl: 'js/config/about.html'
            })
            .state('contact', {
                url: '/contact',
                templateUrl: 'js/config/contact.html'
            });
    
    }
    
})();