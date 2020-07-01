(function() {

    angular.module('app.controllers', [])


    /*************************************************
        LANDING
    **************************************************/
    .controller('landingFormsController', [
        '$scope',
        'usersService',
        '$window',
        function($scope, usersService, $window) {
            $scope.login = function() {
                if ($scope.formLogin.$valid) {
                    $scope.loading = true;
                    usersService.login($scope.formData).then(function(data) {
                        console.log(data);
                        switch (data.success) {
                            case false:
                                $scope.success = false;
                                $scope.error = data.error;
                                break;
                            case true:
                                $scope.success = true;
                                if (data.intented != null)
                                    url = data.intented;
                                else
                                    url = data.url;
                                $window.location.href = url;
                                break;
                        }
                        $scope.loading = false;
                    });
                }
            }

            $scope.register = function() {
                if ($scope.registroForm.$valid) {
                    $scope.loading = true;
                    usersService.createAccount($scope.formData).then(function(data) {
                        console.log(data);
                        switch (data.success) {
                            case false:
                                $scope.success = false;
                                $scope.errors = data.errors;
                                break;
                            case true:
                                $scope.success = true;
                                $window.location.href = data.redirect;
                                break;
                        }
                        $scope.loading = false;
                    });
                }
            }


            $scope.master = {};
            $scope.forgotPassword = function() {
                $scope.loading = true;

                usuariosService.forgotPassword($scope.formData).then(function(data) {
                    console.log(data);
                    switch (data.success) {
                        case false:
                            $scope.estatus = false;
                            $scope.errors = data.errors;
                            $scope.error = data.error;
                            break;
                        case true:
                            $scope.estatus = true;
                            $scope.mensaje = data.mensaje;
                            $scope.formData = angular.copy($scope.master);
                            $scope.forgotPasswordForm.$setPristine();
                            break;
                    }
                    $scope.loading = false;
                });
            }

            $scope.resetPassword = function() {
                $scope.loading = true;
                usuariosService.resetPassword($scope.formData).then(function(data) {
                    //console.log(data);
                    switch (data.success) {
                        case false:
                            $scope.success = false;
                            $scope.errors = data.errors;
                            $scope.error = data.error;
                            break;
                        case true:
                            $window.location.href = '/cursos';
                            break;
                    }
                    $scope.loading = false;
                });
            }


        }
    ])



})();