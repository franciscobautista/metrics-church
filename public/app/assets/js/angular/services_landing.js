(function() {

    angular.module('app.services', [])
        /**************************************************
                     USUARIOS
        **************************************************/
        .factory('usersService', ['$http', '$q', '$window', function($http, $q, $window) {

            function login(formData) {
                var deferred = $q.defer();
                $http.post('/login', formData)
                    .success(function(data) {
                        deferred.resolve(data);
                    })
                    .error(function(response, data, status) {
                        console.log(response)
                        console.log(data);
                        switch (status) {
                            /*case 500: $window.location.href="/500"; break;
                            case 400: $window.location.href="/400";break;
                            default: $window.location.href="/500"; */
                        }
                    });
                return deferred.promise;
            };

            function createAccount(formData) {
                var deferred = $q.defer();
                $http.post('/users', formData)
                    .success(function(data) {
                        deferred.resolve(data);
                    })
                    .error(function(response, data, status) {
                        console.log(data + response);
                        switch (data) {
                            case 500:
                                $window.location.href = "/500";
                                break;
                            case 400:
                                $window.location.href = "/400";
                                break;
                            default:
                                $window.location.href = "/500";
                        }
                    });
                return deferred.promise;
            };

            function forgotPassword(formData) {
                var deferred = $q.defer();
                $http.post('/forgot_password', formData)
                    .success(function(data) {
                        deferred.resolve(data);
                    })
                    .error(function(response, data, status) {
                        console.log(data + response);
                        switch (data) {
                            case 500:
                                $window.location.href = "/500";
                                break;
                            case 400:
                                $window.location.href = "/400";
                                break;
                            default:
                                $window.location.href = "/500";
                        }
                    });
                return deferred.promise;
            };

            function resetPassword(formData) {
                var deferred = $q.defer();
                $http.post('/reset_password', formData)
                    .success(function(data) {
                        deferred.resolve(data);
                    })
                    .error(function(response, data, status) {
                        console.log(response);
                        switch (data) {
                            case 500:
                                $window.location.href = "/500";
                                break;
                            case 400:
                                $window.location.href = "/400";
                                break;
                            default:
                                $window.location.href = "/500";
                        }
                    });
                return deferred.promise;
            };


            return {
                login: login,
                //signUp: signUp,
                forgotPassword: forgotPassword,
                resetPassword: resetPassword,
                createAccount: createAccount
            };
        }])


})();