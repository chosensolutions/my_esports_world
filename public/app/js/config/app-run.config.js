(function() {

    'use strict';

    angular
        .module('app.routes')
        .run(appRun);


    function appRun($rootScope, $location, $state, authenticationService) {

        //console.log('apprun',$state,$rootScope,$rootScope.authUser);
        $rootScope.waitingForLogin = true;
        $rootScope.tenants_waiting_approval = 0;
        $rootScope.publicStates =  ['main.login','main.register',"main.register.step_2"
            ,"main.register.step_3", 'main.passwordRemind'];
			
			
		$rootScope.$on('$viewContentLoaded', function(){
			$('#main-region').show();
			setTimeout("$('.btn[disabled],.btn-disable-me').parent().on('click',function() {\
				if($('.toast-error').length == 0 && $('.btn[disabled]').length > 0)\
					toastr.error('Please fill out the entire form before continuing');\
				});\
				$('.only-number').on('change keyup', function() {\
                    var sanitized = $(this).val().replace(/[^0-9]/g, '');\
                    $(this).val(sanitized);\
                });",500);

		});
        $rootScope.$on('$stateChangeStart', function(event, toState, toParams, fromState, fromParams) {
			$('#main-region').hide();
			toastr.clear();

               // console.log('state change to,from',toState,fromState,$rootScope.authUser,
               //     toState.name+' public',$.inArray(toState.name,$rootScope.publicStates));


                if($.inArray(toState.name,$rootScope.publicStates) >= 0 && $rootScope.authUser !== undefined){
                    //console.log('already logged in go to dashboard');

                    event.preventDefault();
                    $state.go('main.dashboard', { redirect : true });

                }

                //private url and not logged in
                if($.inArray(toState.name,$rootScope.publicStates) < 0 && $rootScope.authUser === undefined){
                   // console.log('redirect to login page');
                    if($rootScope.waitingForLogin){
                       // console.log('still waiting for login');
                    }
                    else {
                        event.preventDefault();
                        $state.go('main.login', {redirect: true});
                    }

                }


            });

    }

})();