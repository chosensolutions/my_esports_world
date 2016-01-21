(function() {

    'use strict';

    angular
        .module('app')
        .config(config);

    function config($stateProvider, $urlRouterProvider)
    {
        $urlRouterProvider
            .otherwise('/');

        $stateProvider
            .state('auth', {
                abstract: true,
                template: '<ui-view></ui-view>',
                resolve: {
                    authUser: function(AuthenticationService, API, $rootScope) {
                        AuthenticationService
                            .getAuthUser(API.url + 'users/get-auth-user')
                            .then(
                                function successCallback(response)
                                {
                                    $rootScope.authUser = response.data.data;

                                    console.log('---------------------------------');
                                    console.log('---------- Success --------------');
                                    console.log('---------------------------------');
                                    console.log('Code:', response.data.code);
                                    console.log('Message:', response.data.message);
                                    console.log('Data:', response.data.data);
                                    console.log('Status Code: ' + response.status);
                                    console.log('Status Text: ' + response.statusText);
                                    console.log('=================================');

                                    return response.data.data;
                                },
                                function errorCallback(response)
                                {
                                    console.log('---------------------------------');
                                    console.log('---------- Failed ---------------');
                                    console.log('---------------------------------');
                                    console.log('Code:', response.data.code);
                                    console.log('Message:', response.data.message);
                                    console.log('Data:', response.data.data);
                                    console.log('Status Code: ' + response.status);
                                    console.log('Status Text: ' + response.statusText);
                                    console.log('=================================');

                                    return response.data.data;
                                }
                            );
                    }
                }
            });
    }

})();