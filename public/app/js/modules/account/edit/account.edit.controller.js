(function() {

    'use strict';

    angular
        .module('app.auth')
        .controller('AuthenticationRegisterController', AuthenticationRegisterController);

    function AuthenticationRegisterController($state, $http, API, PATH) {

        var vm = this;

        vm.hi = "asdasd";

        console.log(API.url);
        console.log(PATH.modules);

        $http({
            method: 'GET',
            url: 'http://jsonplaceholder.typicode.com/posts',
            headers: {
                'Content-Type': undefined
            },
            data: {
                test: 'test'
            }
        })
        .then(function successCallback(response) {

            vm.friends = response.data;
            console.log(response.data); // data – {string|Object} – The response body transformed with the transform functions.
            console.log(response.status); // status – {number} – HTTP status code of the response.
            console.log(response.headers); // headers – {function([headerName])} – Header getter function.
            console.log(response.config); // config – {Object} – The configuration object that was used to generate the request.
            console.log(response.statusText); // statusText – {string} – HTTP status text of the response.
        }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
        });

    }

})();