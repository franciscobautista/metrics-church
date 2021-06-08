(function() {

    angular.module('app.services', [])
        /**************************************************
                PURCHASES
        **************************************************/
        .factory('notificacionesService', ['$http', '$q', '$window', function($http, $q, $window) {

            function verificaRedModbus() {
                var deferred = $q.defer();
                $http.get('/redmodbus/verificar')
                    .success(function(data) {
                        deferred.resolve(data);
                    })
                    .error(function(response, data, status) {
                        switch (status) {
                            /*case 500:
                                $window.location.href = "/500";
                                break;
                            case 400:
                                $window.location.href = "/400";
                                break;
                            case 401:
                                $window.location.href = "/login";
                                break;
                            default:
                                $window.location.href = "/500"; */
                        }
                    });
                return deferred.promise;
            };

            return {
                verificaRedModbus: verificaRedModbus
            };
        }])

    /**************************************************
            CLIENTES
    **************************************************/
    .factory('accionesService', ['$http', '$q', '$window', function($http, $q, $window) {

        function cargarAccion(accion, valor, receta_id) {
            var deferred = $q.defer();
            $http.get('/acciones/' + accion + '/' + valor + '/' + receta_id)
                .success(function(data) {
                    deferred.resolve(data);
                })
                .error(function(response, data, status) {});
            return deferred.promise;
        };

        function verificaAccion(accion, valor, receta_id) {
            var deferred = $q.defer();
            $http.get('/acciones/verificar/' + accion + '/' + valor + '/' + receta_id)
                .success(function(data) {
                    deferred.resolve(data);
                })
                .error(function(response, data, status) {});
            return deferred.promise;
        };

        return {
            cargarAccion: cargarAccion,
            verificaAccion: verificaAccion
        };
    }])


    /**************************************************
            RECERAS
    **************************************************/
    .factory('recetasService', ['$http', '$q', '$window', function($http, $q, $window) {

        function recetasCliente(organizacion_id) {
            var deferred = $q.defer();
            $http.get('/recetas/organizacion/' + organizacion_id)
                .success(function(data) {
                    deferred.resolve(data);
                })
                .error(function(response, data, status) {});
            return deferred.promise;
        };



        return {
            recetasCliente: recetasCliente
        };
    }])




})();