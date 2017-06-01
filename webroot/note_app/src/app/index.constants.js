/* global malarkey:false, moment:false */
(function() {
  'use strict';

  angular
    .module('noteApp')
    .constant('moment', moment)
   .constant('API_VERSION', '/v1') ;

})();
