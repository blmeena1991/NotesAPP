(function() {
  'use strict';

  angular
    .module('noteApp')
    .config(config);

  /** @ngInject */
  function config($logProvider, toastrConfig) {
    // Enable log
    $logProvider.debugEnabled(true);

    angular.extend(toastrConfig, {
      autoDismiss: false,
      allowHtml:true,
      timeOut:5000 ,
      progressBar:true,
      containerId: 'toast-container',
      maxOpened: 0,
      newestOnTop: true,
      positionClass: 'toast-top-right',
      preventDuplicates: false,
      preventOpenDuplicates: false,
      target: 'body'
    });
  }

})();
