(function() {

    'use strict';

    angular
        .module('app')
        .config(routeConfig);

    function routeConfig($stateProvider)
    {
        var local_url = 'app/js/modules/blog/';

        $stateProvider
            .state('main.blog', {
                url : '/blog',
                templateUrl: local_url + 'index/blog.index.html'
            })
            .state('main.blogEdit', {
                url : '/blog/:blogId/edit',
                templateUrl: local_url + 'edit/blog.edit.html'
            });
    }

})();

