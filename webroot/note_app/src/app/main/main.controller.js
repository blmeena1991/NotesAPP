(function() {
  'use strict';

  angular
    .module('noteApp')
    .controller('MainController', MainController);

  /** @ngInject */
  function MainController(NetworkFactory,toastr,$compile,$scope) {
    var vm = this;

    angular.extend(vm, {
      NoteLists:[],
      NoteListsAvailable:false,
      Pagination:[],
      note:{}
    });


    vm.submitNoteForm = function(isValid) {
      // check to make sure the form is completely valid
      if (isValid) {
          var payload = {};
          if(vm.note && vm.note !== null || vm.note !== undefined) {
              payload=vm.note;
              NetworkFactory.addNote(payload).then(function (res) {
                  console.log(res);
                  if (res && res.success == true && res.data) {
                      toastr.success('Note successfully added/updated.');
                  }else{
                      toastr.error('Note unable to add/update.');
                  }
                  vm.getNoteLists();
                  vm.note = {};
              });
          }
      }
    };

    vm.deleteNote = function(id) {
          if(id!== null || id !== undefined) {
              NetworkFactory.deleteNote(id).then(function (res) {
                  console.log(res);
                  if (res && res.success == true && res.data) {
                      toastr.success('Note successfully deleted.');
                  }else{
                      toastr.error('Unable to delete note.');
                  }
                  vm.getNoteLists();
              });
          }
    };


    vm.editNote = function(id) {
      if(id!== null || id !== undefined) {
          NetworkFactory.editNote(id).then(function (res) {
              console.log(res);
              if (res && res.success == true && res.data) {
                  vm.note.title=res.data.title;
                  vm.note.body=res.data.body;
                  vm.note.id=res.data.id;
              }

          });
      }
    };

    vm.getNoteLists = function () {
      vm.NoteListsAvailable=false;
      NetworkFactory.getNoteLists().then(function (NoteLists) {
        if(NoteLists && NoteLists.success == true && NoteLists.data) {
          vm.NoteListsAvailable=true;
          vm.NoteLists = NoteLists.data;
          vm.Pagination=NoteLists.pagination;
          console.log(vm.NoteLists);
        }else{
          vm.NoteLists =[];
          vm.Pagination=[];
        }
      })
    };

    /*INIT function  here  */
    var init = (function () {
      vm.getNoteLists();
    })();
  }
})();
