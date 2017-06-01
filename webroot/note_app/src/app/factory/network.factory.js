/**
 * Created by root on 01/06/17.
 */

/**
 * Created by root on 06/01/17.
 */
(function() {
    'use strict';

    angular
        .module('noteApp')
        .factory('NetworkFactory', NetworkFactory);
    function NetworkFactory($http, $q,$window,$location,API_VERSION) {
        var factory = {};


        /*Get All notes based on query*/
        factory.editNote = function(noteId){
            var defer = $q.defer();
            var config = {
                headers : {'Accept' : 'application/json'}
            };
            var url=API_VERSION+'/notes/view/'+noteId+'.json';

            $http.get(url,config)
                .success(function(res){
                    defer.resolve(res);
                })
                .error(function (err, status) {
                    defer.resolve(err);
                });
            return defer.promise;
        }


        /*Delete the note*/
        factory.deleteNote = function(noteId){
            var defer = $q.defer();
            var config = {
                headers : {'Accept' : 'application/json'}
            };
            var url=API_VERSION+'/notes/deleteNote/'+noteId+'.json';
            $http.get(url,config)
                .success(function(res){
                    defer.resolve(res);
                })
                .error(function (err, status) {
                    defer.resolve(err);
                });
            return defer.promise;
        }

        /*Get All note list based on query and filters*/

        factory.getNoteLists = function(query,filters) {
            var defer = $q.defer();
            var data = {
                query: query,
                filters: filters
            }
            var config = {
                params: data,
                headers: {'Accept': 'application/json'}
            };
            var url = API_VERSION + '/notes/index.json';

            $http.get(url, config)
                .success(function (res) {
                    defer.resolve(res);
                })
                .error(function (err, status) {
                    defer.resolve(err);
                });
            return defer.promise;
        }

        factory.addNote = function(noteData){
            var defer = $q.defer();
            var url=API_VERSION+'/notes/create.json';
            $http({
                method: 'POST',
                url: url,
                data: (noteData),
                headers: {'Content-Type': 'application/json','Accept' : 'application/json'}
            })
                .success(function(res){
                    defer.resolve(res);
                })
                .error(function(err,status){
                    defer.resolve(err);
                })

            return defer.promise;
        };
        return factory;
    }
})();
