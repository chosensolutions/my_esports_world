(function() {

    'use strict';

    angular
        .module('app.profile')
        .controller('ProfileShowController', ProfileShowController);

    function ProfileShowController($state, $stateParams , ProfileService) {

        var vm = this;

        console.log('---------------------------------');
        console.log('---------- DEBUG ----------------');
        console.log('---------------------------------');

        ProfileService
            .getById($stateParams.id)
            .then(function(response) {
                console.log(JSON.stringify(response.data.data, null, '\t'));
                vm.profile = response.data.data.profile;
                vm.summoner = response.data.data.summoner;

                vm.native_languages = [];
                vm.professional_languages = [];
                vm.limited_languages = [];

                _.forEach(vm.profile.languages, function(language, value) {
                    console.log(language.fluency);
                    if(language.fluency == 'native')
                        vm.native_languages.push(language.type);
                    else if(language.fluency == 'professional')
                        vm.professional_languages.push(language.type);
                    else if(language.fluency == 'limited')
                        vm.limited_languages.push(language.type);
                });

                console.log(JSON.stringify(vm.native_languages, null, '\t'));
                console.log(JSON.stringify(vm.professional_languages, null, '\t'));

            }, function() {

            });

    }

})();