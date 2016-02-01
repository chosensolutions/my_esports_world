(function() {

    'use strict';

    angular
        .module('app.profile')
        .controller('ProfileShowController', ProfileShowController);

    function ProfileShowController($stateParams , ProfileService) {

        var vm = this;

        console.log('----------------------------------------');
        console.log('---------- DEBUG - Profile Show --------');
        console.log('----------------------------------------');

        ProfileService
            .getById($stateParams.id)
            .then(function(response) {
                vm.profile = response.data.data.profile;
                vm.summoner = response.data.data.summoner;

                vm.native_languages = [];
                vm.professional_languages = [];
                vm.limited_languages = [];

                _.forEach(vm.profile.languages, function(language, value) {
                    if(language.fluency == 'native')
                        vm.native_languages.push(language.type);
                    else if(language.fluency == 'professional')
                        vm.professional_languages.push(language.type);
                    else if(language.fluency == 'limited')
                        vm.limited_languages.push(language.type);
                });

                console.log(JSON.stringify(vm.summoner, null, '\t'));
            }, function() {
                // the user id dne, redirect to a 404 page possibly?
            });

    }

})();