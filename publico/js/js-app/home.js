// Creación del módulo
var sed = angular.module('mppeuct', ['ngRoute', 'ngSanitize', 'ngProgressLite', 'datatables']);

sed.controller('app', ["$scope", "$window", "$rootScope", 'ngProgressLite', '$timeout', function ($scope, $window, $rootScope, ngProgressLite, $timeout) {
        $rootScope.base_url = base_url;
        $rootScope.base_url_doc = base_url + 'privado/docs/';
        ngProgressLite.start();
        $timeout(function () {

            ngProgressLite.done();

        }, 200);


    }]);

