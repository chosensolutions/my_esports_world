(function() {

    'use strict';

    angular
        .module('app', [

    ]);

})();


(function() {

    'use strict';

    angular.module('app.page', [

    ]);

})();


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
                templateUrl: 'app/js/modules/page/home.html'
            })
            .state('about', {
                url: '/about',
                templateUrl: 'app/js/modules/page/about.html'
            })
            .state('contact', {
                url: '/contact',
                templateUrl: 'app/js/modules/page/contact.html'
            });

    }

})();
/**
 * Created by yichen on 1/11/2016.
 */

//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImNvbmZpZy9hcHAubW9kdWxlLmpzIiwibW9kdWxlcy9wYWdlL3BhZ2UubW9kdWxlLmpzIiwiY29uZmlnL2FwcC5jb25maWcuanMiLCJtb2R1bGVzL3BhZ2UvcGFnZS1yb3V0ZXMuY29uZmlnLmpzIiwibW9kdWxlcy9hdXRoZW50aWNhdGlvbi9yZWdpc3Rlci5jb250cm9sbGVyLmpzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQ1hBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUNWQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQzlCQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQzlCQTtBQUNBO0FBQ0E7QUFDQSIsImZpbGUiOiJhcHAuanMiLCJzb3VyY2VzQ29udGVudCI6WyIoZnVuY3Rpb24oKSB7XHJcblxyXG4gICAgJ3VzZSBzdHJpY3QnO1xyXG5cclxuICAgIGFuZ3VsYXJcclxuICAgICAgICAubW9kdWxlKCdhcHAnLCBbXHJcblxyXG4gICAgXSk7XHJcblxyXG59KSgpO1xyXG5cclxuIiwiKGZ1bmN0aW9uKCkge1xyXG5cclxuICAgICd1c2Ugc3RyaWN0JztcclxuXHJcbiAgICBhbmd1bGFyLm1vZHVsZSgnYXBwLnBhZ2UnLCBbXHJcblxyXG4gICAgXSk7XHJcblxyXG59KSgpO1xyXG5cclxuIiwiKGZ1bmN0aW9uKCkge1xyXG4gICAgXHJcbiAgICAndXNlIHN0cmljdCc7XHJcbiAgICBcclxuICAgIGFuZ3VsYXJcclxuICAgICAgICAubW9kdWxlKCdhcHAnLCBbXHJcbiAgICAgICAgICAgICd1aS5yb3V0ZXInXHJcbiAgICAgICAgXSlcclxuICAgICAgICAuY29uZmlnKGNvbmZpZyk7XHJcbiAgICBcclxuICAgIGZ1bmN0aW9uIGNvbmZpZygkc3RhdGVQcm92aWRlciwgJHVybFJvdXRlclByb3ZpZGVyKSB7XHJcbiAgICAgICAgXHJcbiAgICAgICAgJHVybFJvdXRlclByb3ZpZGVyLm90aGVyd2lzZSgnLycpO1xyXG5cclxuLyogICAgICAgICRzdGF0ZVByb3ZpZGVyXHJcbiAgICAgICAgICAgIC5zdGF0ZSgnaG9tZScsIHtcclxuICAgICAgICAgICAgICAgIHVybDogJy8nLFxyXG4gICAgICAgICAgICAgICAgdGVtcGxhdGVVcmw6ICdhcHAvanMvbW9kdWxlcy9wYWdlL2hvbWUuaHRtbCdcclxuICAgICAgICAgICAgfSlcclxuICAgICAgICAgICAgLnN0YXRlKCdhYm91dCcsIHtcclxuICAgICAgICAgICAgICAgIHVybDogJy9hYm91dCcsXHJcbiAgICAgICAgICAgICAgICB0ZW1wbGF0ZVVybDogJ2FwcC9qcy9tb2R1bGVzL3BhZ2UvYWJvdXQuaHRtbCdcclxuICAgICAgICAgICAgfSlcclxuICAgICAgICAgICAgLnN0YXRlKCdjb250YWN0Jywge1xyXG4gICAgICAgICAgICAgICAgdXJsOiAnL2NvbnRhY3QnLFxyXG4gICAgICAgICAgICAgICAgdGVtcGxhdGVVcmw6ICdhcHAvanMvbW9kdWxlcy9wYWdlL2NvbnRhY3QuaHRtbCdcclxuICAgICAgICAgICAgfSk7Ki9cclxuICAgIFxyXG4gICAgfVxyXG4gICAgXHJcbn0pKCk7IiwiKGZ1bmN0aW9uKCkge1xyXG5cclxuICAgICd1c2Ugc3RyaWN0JztcclxuXHJcbiAgICBhbmd1bGFyXHJcbiAgICAgICAgLm1vZHVsZSgnYXBwJywgW1xyXG4gICAgICAgICAgICAndWkucm91dGVyJ1xyXG4gICAgICAgIF0pXHJcbiAgICAgICAgLmNvbmZpZyhjb25maWcpO1xyXG5cclxuICAgIGZ1bmN0aW9uIGNvbmZpZygkc3RhdGVQcm92aWRlciwgJHVybFJvdXRlclByb3ZpZGVyKSB7XHJcblxyXG4gICAgICAgICR1cmxSb3V0ZXJQcm92aWRlci5vdGhlcndpc2UoJy8nKTtcclxuXHJcbiAgICAgICAgJHN0YXRlUHJvdmlkZXJcclxuICAgICAgICAgICAgLnN0YXRlKCdob21lJywge1xyXG4gICAgICAgICAgICAgICAgdXJsOiAnLycsXHJcbiAgICAgICAgICAgICAgICB0ZW1wbGF0ZVVybDogJ2FwcC9qcy9tb2R1bGVzL3BhZ2UvaG9tZS5odG1sJ1xyXG4gICAgICAgICAgICB9KVxyXG4gICAgICAgICAgICAuc3RhdGUoJ2Fib3V0Jywge1xyXG4gICAgICAgICAgICAgICAgdXJsOiAnL2Fib3V0JyxcclxuICAgICAgICAgICAgICAgIHRlbXBsYXRlVXJsOiAnYXBwL2pzL21vZHVsZXMvcGFnZS9hYm91dC5odG1sJ1xyXG4gICAgICAgICAgICB9KVxyXG4gICAgICAgICAgICAuc3RhdGUoJ2NvbnRhY3QnLCB7XHJcbiAgICAgICAgICAgICAgICB1cmw6ICcvY29udGFjdCcsXHJcbiAgICAgICAgICAgICAgICB0ZW1wbGF0ZVVybDogJ2FwcC9qcy9tb2R1bGVzL3BhZ2UvY29udGFjdC5odG1sJ1xyXG4gICAgICAgICAgICB9KTtcclxuXHJcbiAgICB9XHJcblxyXG59KSgpOyIsIi8qKlxyXG4gKiBDcmVhdGVkIGJ5IHlpY2hlbiBvbiAxLzExLzIwMTYuXHJcbiAqL1xyXG4iXSwic291cmNlUm9vdCI6Ii9zb3VyY2UvIn0=
