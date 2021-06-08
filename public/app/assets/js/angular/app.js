(function() {

    var app = angular.module('app', [
        'app.controllers',
        'app.services',
        'app.directives',
        //'ngAnimate',
        'ui.bootstrap',
        'toastr',
        'oitozero.ngSweetAlert',
        //'ngImgCrop',
        //'xeditable',
        //'chart.js',
        //'angularTrix',
        //'ngSanitize',
        //'ui.select',
        //'angularUtils.directives.dirPagination',
    ])

    app.config(['$httpProvider', function($httpProvider) {
        $httpProvider.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
    }]);

})();