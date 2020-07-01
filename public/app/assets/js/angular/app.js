(function () {

  	var app=angular.module('app',[
    	'app.controllers',
    	'app.services',
  	])

  	app.config(['$httpProvider', function($httpProvider) {
		$httpProvider.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
	}]);

})();