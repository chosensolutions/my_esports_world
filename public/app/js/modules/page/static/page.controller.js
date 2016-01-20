(function() {

    'use strict';

    angular
        .module('app')
        .controller('PageController', PageController);

    function PageController($state, $stateParams) {

        var vm = this;

        vm.input = {

        };

        vm.submit = function()
        {
            console.log(vm.input.search);
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

        $('#remote .typeahead').typeahead(
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

    }

})();