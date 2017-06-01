(function() {
  'use strict';

  angular
    .module('noteApp')
    .config(routerConfig);


    /** @ngInject */
    function routerConfig($stateProvider, $urlRouterProvider) {
        $stateProvider
            .state('/', {
                url: '/',
                views: {
                    'content@': {
                        templateUrl: 'note_app/src/app/main/main.html',
                        controller: 'MainController',
                        controllerAs: 'main'
                    }
                }
            }).state('home', {
                url: '/',
                views: {
                    'content@': {
                        templateUrl: 'note_app/src/app/main/main.html',
                        controller: 'MainController',
                        controllerAs: 'main'
                    }
                }
            });
        $urlRouterProvider.otherwise('/');
    }

})();
