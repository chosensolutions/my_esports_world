(function() {
    
    'use strict';
    
    angular
        .module('app', [
            'ui.router'
        ])
        .config(config);
    
    function config($stateProvider, $urlRouterProvider) {
        
        $urlRouterProvider.otherwise('/');

/*        $stateProvider
            .state('home', {
                url: '/',
                templateUrl: 'app/js/modules/page/home.html'
            })
            .state('about', {
                url: '/about',
                templateUrl: 'app/js/modules/page/about.html'
            })
            .state('contact', {
                url: '/contact',
                templateUrl: 'app/js/modules/page/contact.html'
            });*/
    
    }
    
})();