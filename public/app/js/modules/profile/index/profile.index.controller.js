(function() {

    'use strict';

    angular
        .module('app.profile')
        .controller('ProfileIndexController', ProfileIndexController);

    function ProfileIndexController($state, profilesData) {

        var vm = this;

        vm.profiles = profilesData;

        //console.log(JSON.stringify(profilesData, null, '\t'));
    }

})();