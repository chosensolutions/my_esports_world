(function () {

    'use strict';

    angular
        .module('app', [
            'ui.router',
            'app.navbar',
            'app.auth',
            'app.account',
            'app.profile',
            'app.page'
        ]);

})();

