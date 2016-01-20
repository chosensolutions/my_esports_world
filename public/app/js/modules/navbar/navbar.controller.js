(function() {

    'use strict';

    angular
        .module('app')
        .controller('NavbarController', NavbarController);

    function NavbarController($state, $stateParams, $timeout, AuthenticationService) {

        var vm = this;

        vm.input = {};

        vm.logout = function()
        {
            AuthenticationService
                .logout()
                .then(function successCallback(response)
                {
                    location.reload();
                    $timeout(function() {
                        toastr.success('You are now Logged out.');
                        $state.transitionTo('auth.home', $stateParams, {
                            reload: true,
                            inherit: true,
                            notify: true
                        });
                        console.log('update with timeout fired')
                    }, 1000);

                    console.log(response.data);
                }, function errorCallback(response)
                {
                    console.log(response.data);
                });
        };

        var users = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('first_name'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            //prefetch: '../data/films/post_1960.json',
            remote: {
                url: 'api/v1/search-profiles?query=%QUERY',
                wildcard: '%QUERY'
            }
        });

        $('#searchBox .typeahead').typeahead(
            {
                hint: true,
                highlight: true,
                minLength: 1
            },
            {
                name: 'users',
                displayKey: 'first_name',
                source: users
            });

        $('.typeahead')
            .on('typeahead:selected', function(event, data, name, callback) {
                vm.input.search = data;
            });

        // on click / press enter, we do a search and call an api to redirect to a profile page
    }

})();