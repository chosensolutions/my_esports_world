(function() {
    
    'use strict';
    
    angular
        .module('app')
        .constant('API', {
            version: 'v1',
            type: 'web',
            port: '8000',
            host: 'http://localhost:',
            url: 'http://localhost:8000/api/web/v1/'
        })
        .constant('APP', {
            name: 'My E-Sports World',
            version: 1.0
        })
        .value('PATH', {
            modules : 'app/js/modules/'
        });

})();