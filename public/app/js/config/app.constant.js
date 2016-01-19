(function () {

    'use strict';

    angular
        .module('app')
        .constant('API', {
            version: 'v1',
            type: 'web',
            port: '8000',
            host: 'http://localhost:', //'http://mew.musbe.ca/',
            url: /*'http://mew.musbe.ca/api/v1/' */'http://localhost:8000/api/v1/'
        })
        .constant('APP', {
            name: 'My E-Sports World',
            version: 1.0
        })
        .value('PATH', {
            modules: 'app/js/modules/'
        });

})();