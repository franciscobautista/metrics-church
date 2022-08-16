(function() {

    angular.module('app.controllers', [])
        .controller('categoriasController', [
            '$scope',
            'SweetAlert',
            '$window',
            function($scope, SweetAlert, $window) {
                $scope.deleteCategory = function(id) {
                    SweetAlert.swal({
                            title: "",
                            text: "¿Deseas eliminar la categoría?",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText: "Si!",
                            cancelButtonText: "No, Cancelar!",
                            closeOnConfirm: true,
                            closeOnCancel: true
                        },
                        function(isConfirm) {
                            if (isConfirm) {
                                window.location.href = "/categories/delete/" + id;
                            }
                        });
                }
                $scope.deleteSubcategory = function(id) {
                    SweetAlert.swal({
                            title: "",
                            text: "¿Deseas eliminar la categoría?",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText: "Si!",
                            cancelButtonText: "No, Cancelar!",
                            closeOnConfirm: true,
                            closeOnCancel: true
                        },
                        function(isConfirm) {
                            if (isConfirm) {
                                window.location.href = "/subcategories/delete/" + id;
                            }
                        });
                }
                

            }
        ])
        .controller('notificacionesController', [
            '$scope',
            '$window',
            'toastr',
            'notificacionesService',
            function($scope, $window, toastr, notificacionesService) {
                setInterval(() => {
                    $scope.verificaRedModbus();
                }, 10000);

                $scope.verificaRedModbus = function() {
                    console.log("verifica redmodbus");
                    notificacionesService.verificaRedModbus().then(function(data) {
                        console.log(data);
                        if (data == 1)
                            toastr.error('Falla en red modbus', 'Error!', {
                                position: 'toast-top-left',
                                closeButton: true,
                                progressBar: true,
                            });
                    });
                }

            }
        ])
        .controller('accionesController', [
            '$scope',
            '$window',
            'toastr',
            'SweetAlert',
            'accionesService',
            'recetasService',
            function($scope, $window, toastr, SweetAlert, accionesService, recetasService) {


                /***************** CARGAR ************ */

                $scope.moverHome = function(valor, receta_id) {
                    SweetAlert.swal({
                            title: "",
                            text: "¿Deseas mover a home?",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText: "Si!",
                            cancelButtonText: "No, Cancelar!",
                            closeOnConfirm: true,
                            closeOnCancel: true
                        },
                        function(isConfirm) {
                            if (isConfirm) {
                                $scope.loading_cargar_datos_plc = true;
                                window.location.href = "/acciones/home/" + valor + "/" + receta_id;
                            }
                        });
                }

                $scope.mover = function(valor, receta_id) {
                    SweetAlert.swal({
                            title: "",
                            text: "¿Deseas mover?",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText: "Si!",
                            cancelButtonText: "No, Cancelar!",
                            closeOnConfirm: true,
                            closeOnCancel: true
                        },
                        function(isConfirm) {
                            if (isConfirm) {
                                $scope.loading_cargar_datos_plc = true;
                                window.location.href = "/acciones/mueve/" + valor + "/" + receta_id;
                            }
                        });
                }

                $scope.inicializarVariadores = function(valor, receta_id) {
                    SweetAlert.swal({
                            title: "",
                            text: "¿Deseas inicializar Variadores?",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText: "Si!",
                            cancelButtonText: "No, Cancelar!",
                            closeOnConfirm: true,
                            closeOnCancel: true
                        },
                        function(isConfirm) {
                            if (isConfirm) {
                                $scope.loading_cargar_datos_plc = true;
                                window.location.href = "/acciones/inicializar_variadores/" + valor + "/" + receta_id;
                            }
                        });
                }

                $scope.cargarDatos = function(valor, receta_id) {
                        SweetAlert.swal({
                                title: "",
                                text: "¿Deseas cargar los datos en el PLC?",
                                type: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#DD6B55",
                                confirmButtonText: "Si!",
                                cancelButtonText: "No, Cancelar!",
                                closeOnConfirm: true,
                                closeOnCancel: true
                            },
                            function(isConfirm) {
                                if (isConfirm) {
                                    $scope.loading_cargar_datos_plc = true;

                                    window.location.href = "/acciones/carga/" + valor + "/" + receta_id;

                                    /*accionesService.cargarAccion(accion, valor, receta_id).then(function(data) {
                                        console.log(accion, valor, receta_id);
                                        //$scope.verificaCarga($scope.receta_id);
                                    });*/
                                }
                            });
                    }
                    /*setInterval(() => {
                            $scope.verificaCarga($scope.receta_id);
                        }, 5000);
                    $scope.verificaCarga = function(receta_id) {
                            $scope.loading_verificando_carga = true;
                            //$scope.receta_cargada = false;
                            accionesService.verificaAccion('Carga', 1, receta_id).then(function(data) {
                                console.log(data);
                                //$scope.receta_cargada = false;
                                if (data != null) {
                                    if (data.estatus == 1)
                                        $scope.receta_cargada = true;

                                    if (data.estatus == 0)
                                        $scope.receta_cargada = false;
                                }

                            });
                        }*/
                    /***************** MOVER ************ */
                    /*$scope.Mover = function(accion, valor, receta_id) {
                            SweetAlert.swal({
                                    title: "",
                                    text: "¿Deseas Mover?",
                                    type: "warning",
                                    showCancelButton: true,
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "Si!",
                                    cancelButtonText: "No, Cancelar!",
                                    closeOnConfirm: true,
                                    closeOnCancel: true
                                },
                                function(isConfirm) {
                                    if (isConfirm) {
                                        $scope.loading_mover = true;
                                        accionesService.cargarAccion(accion, valor, receta_id).then(function(data) {
                                            $scope.verificaMover($scope.receta_id);
                                        });
                                    }
                                });
                        }
                        setInterval(() => {
                            $scope.verificaMover($scope.receta_id);
                        }, 5000);
                        $scope.verificaMover = function(receta_id) {
                            $scope.loading_verificando_mover = true;
                            accionesService.verificaAccion('Mueve', 1, receta_id).then(function(data) {
                                    console.log(data);
                                    if (data != null) {
                                        if (data.valor == 1)
                                            $scope.mover_receta = false;

                                        if (data.valor == 0)
                                            $scope.mover_receta = true;
                                        $scope.receta_cargada = false;
                                        $scope.home_receta = false;


                                        $scope.loading_verificando_carga = false;
                                        $scope.loading_verificando_home = false;
                                    }
                                }
                            });
                    }*/

                /******************  HOME  ************************* */
                $scope.Home = function(accion, valor, receta_id) {
                        SweetAlert.swal({
                                title: "",
                                text: "¿Deseas ir a Home?",
                                type: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#DD6B55",
                                confirmButtonText: "Si!",
                                cancelButtonText: "No, Cancelar!",
                                closeOnConfirm: true,
                                closeOnCancel: true
                            },
                            function(isConfirm) {
                                if (isConfirm) {
                                    $scope.loading_home = true;
                                    accionesService.cargarAccion(accion, valor, receta_id).then(function(data) {
                                        $scope.verificaHome($scope.receta_id);
                                    });
                                }
                            });
                    }
                    /*setInterval(() => {
                        $scope.verificaHome($scope.receta_id);
                    }, 5000);
                    $scope.verificaHome = function(receta_id) {
                        $scope.loading_verificando_home = true;
                        accionesService.verificaAccion('Home', 1, receta_id).then(function(data) {
                            console.log(data);
                            if (data != null) {
                                if (data.valor == 1)
                                    $scope.home_receta = false;

                                if (data.valor == 0)
                                    $scope.home_receta = true;
                            }
                        });
                    } */

                $scope.recetasCliente = function(organizacion_id) {
                    $scope.cargando_recetas = true;
                    recetasService.recetasCliente(organizacion_id).then(function(data) {
                        console.log(data);
                        $scope.recetas = data;
                        $scope.cargando_recetas = false;
                    });
                }

                $scope.detalleReceta = function(receta_id) {
                    window.location.href = "/recipes/edit/" + receta_id;
                }



                $scope.eliminarReceta = function(receta_id) {

                    SweetAlert.swal({
                            title: "",
                            text: "¿Seguro de eliminar la receta?",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText: "Si, eliminarla",
                            cancelButtonText: "No, Cancelar!",
                            closeOnConfirm: true,
                            closeOnCancel: true
                        },
                        function(isConfirm) {
                            if (isConfirm) {
                                window.location.href = "/recipes/delete/" + receta_id;
                            }
                        });


                }

            }
        ]).controller('ServiceTimesController', [
            '$scope',
            'SweetAlert',
            '$window',
            '$http',
            function($scope, SweetAlert, $window,$http) {
               
                $scope.initEdit = function (hour) {
                   
                    $('#kt_datetimepicker_edit').datetimepicker({ 
                        format: "hh:ii",
                        showMeridian: true,
                        todayHighlight: true,
                        autoclose: true,
                        startView: 1,
                        minView: 0,
                        maxView: 1,
                        forceParse: 0,
                        pickerPosition: 'bottom-left', 
                        value:new Date()
                    });  
                    $('#kt_datetimepicker_edit').val(hour); 
                };
                $scope.initNew = function () { 

                    $('#kt_datetimepicker_new').datetimepicker({
                        format: "hh:ii",
                        showMeridian: true,
                        todayHighlight: true,
                        autoclose: true,
                        startView: 1,
                        minView: 0,
                        maxView: 1,
                        forceParse: 0,
                        pickerPosition: 'bottom-left'
                    });
                };
                $scope.deleteServicioTimes = function(id) {
                    SweetAlert.swal({
                            title: "",
                            text: "¿Deseas eliminar el servicio?",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText: "Si!",
                            cancelButtonText: "No, Cancelar!",
                            closeOnConfirm: true,
                            closeOnCancel: true
                        },
                        function(isConfirm) {
                            if (isConfirm) {
                                window.location.href = "/servicetimes/delete/" + id;
                            }
                        });
                } 
                $scope.addServiceType = function() {
                    $("#modaladdservicetype").modal("show");
               }       
               $scope.saveServiceTypes=function(){
                var _token = $('meta[name="csrf-token"]').attr('content');

                if( $("#type_name").val().trim() == ""  ||  $("#type_description").val().trim() == ""){
                    alert("Los valores son requeridos");
                    return false;
                }

                $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded"; 
                var form = new FormData();
                form.append('name', $("#type_name").val());
                form.append('description', $("#type_description").val());

                $http.post('/servicetypes/store', form, {
                    headers: {
                        "Content-type": undefined
                    },
                    transformRequest: angular.identity
                })
                .success(function(data) { 
                    if(data.success == true ){
                        var selected="";
                        var options='<option value="">Seleccionar</option>';
                        for(var i=0; i< data.services.length;i++){
                            var selected=data.services[i].id == data.idserv ? "selected" : "";
                            options+='<option value="'+data.services[i].id+'" '+selected+'  >'+data.services[i].name+'</option>';
                        }
                        $("#service_type_id").html(options);
                        $('#modaladdservicetype').modal('hide');
                    }else{
                        alert(data.message);
                    }
                  
                })
                .error(function(response, data, status) {
                    alert("Error al guardar el servicio.");
                }); 
               }            
                

            }
        ]).controller('ServiceTypesController', [
            '$scope',
            'SweetAlert',
            '$window',
            function($scope, SweetAlert, $window) { 

                $scope.deleteServicioTypes = function(id) {
                    SweetAlert.swal({
                            title: "",
                            text: "¿Deseas eliminar el servicio?",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText: "Si!",
                            cancelButtonText: "No, Cancelar!",
                            closeOnConfirm: true,
                            closeOnCancel: true
                        },
                        function(isConfirm) {
                            if (isConfirm) {
                                window.location.href = "/servicetypes/delete/" + id;
                            }
                        });
                }               
                

            }
        ])


})();