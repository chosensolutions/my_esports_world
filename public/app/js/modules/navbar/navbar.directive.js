(function () {

    'use strict';

    angular
        .module('app.navbar')
        .directive('appNavbar', directive);

    function directive() {
        return {
            restrict: 'EA',
            templateUrl: 'app/js/modules/navbar/navbar.tpl.html',
            replace: true,
            transclude: true,
            scope: {
                data: '='
            },
            controller: 'NavbarController',
            link: function (scope, element, attributes) {
                element.on('click', function (){
                   console.log('you clicked on this shit!');
                });
            }
        };
    }

})();

