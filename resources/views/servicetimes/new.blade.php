@extends('layouts.master_app')
@section('title') Sevice Times @endsection

@section('css')
@endsection

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
      <!--begin::Subheader-->
    <div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5"><a href="/settings/service_times" style="color: #000"> Tiempos de Servicio </a> </h5>
                <!--end::Title-->
                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <!--end::Separator-->
                <!--begin::Search Form-->
                <div class="d-flex align-items-center" id="kt_subheader_search">
                    <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">Nuevo</span>
                </div>
                <!--end::Search Form-->
            </div>
           
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid" ng-controller="ServiceTimesController" ng-init="initNew()">
        <!--begin::Container-->
        <div class="container">

            <div class="card card-custom gutter-b">
                <div class="card-body">  
                    <form class="form" id="kt_form" method="POST" action="/servicetimes/store" enctype="multipart/form-data">
                        <div class="tab-content">
                            <!--begin::Tab-->
                            <div class="tab-pane show active px-7" id="kt_user_edit_tab_1" role="tabpanel">
                                @include('partials.errors')
                                @csrf
                                <!--begin::Row-->
                                <div class="row"> 
                                    <div class="col-xl-12 my-2">
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <div class="col-3 row">
                                                <label class="col-form-label  text-lg-right text-left">Nombre</label>
                                                <div class="col-9">
                                                    <input class="form-control form-control-lg form-control-solid" name="name" type="text" value="{{ old('name') }}" required autofocus/>
                                                </div>
                                            </div>
                                            <div class="col-3 row">
                                                <label class="col-form-label   text-lg-right text-left">Dia</label>
                                                <div class="col-9">
                                                    <select class="form-control form-control-lg form-control-solid" name="day" required>
                                                        <option value="">Seleccionar</option>
                                                        <option value="LUNES">Lunes</option>
                                                        <option value="MARTES">Martes</option>
                                                        <option value="MIERCOLES">Miercoles</option>
                                                        <option value="JUEVES">Jueves</option>
                                                        <option value="VIERNES">Viernes</option>
                                                        <option value="SABADO">Sabado</option>
                                                        <option value="DOMINGO">Domingo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-3 row">
                                                <label class="col-form-label   text-lg-right text-left">Hora</label>
                                                <div class="col-9">
													<div class="input-group date">
														<input type="text" class="form-control" placeholder="Select time" id="kt_datetimepicker_new" name="hour" required>
														<div class="input-group-append">
															<span class="input-group-text">
																<i class="la la-calendar glyphicon-th"></i>
															</span>
														</div>
													</div>
													<!--<span class="form-text text-muted">Only time selection</span>-->
												</div> 
                                            </div>
                                            <div class="col-3 row">
                                                <label class="col-form-label  text-lg-right text-left">Type</label>
                                                <div class="col-9">
                                                    <div class="input-group">
                                                        
                                                    <select class="form-control form-control-lg form-control-solid" name="service_type_id" id="service_type_id" required>
                                                        <option value="">Seleccionar</option>
                                                        @foreach($service_types as $service)
                                                        <option value="{{$service->id}}"> {{$service->name}}</option>
                                                        @endforeach 
                                                    </select>
                                                    <div class="input-group-append pointer" style="cursor: pointer;">
                                                        <span class="input-group-text"   ng-click="addServiceType()">
                                                          + 
                                                        </span>
                                                    </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                     
                                        <div class="d-flex justify-content-between border-top pt-10">
                                            <div class="mr-2"></div>
                                            <div>
                                                <button type="submit"  class="btn btn-success mr-2">Guardar</button>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Tab-->
                           
                        </div>
                    </form>
                    
                </div>
            </div>

        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->

<!-- Modal -->
<div class="modal fade" id="modaladdservicetype" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Service Type</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" ng-controller="ServiceTimesController">
            <form class="form" id="kt_form"  >
                @include('partials.errors')
                @csrf 
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Nombre</label>
                      <input type="text"  class="form-control form-control-lg form-control-solid"  id="type_name" name="name" required>
                    </div>     
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Descripción</label>
                        <input type="text"  class="form-control form-control-lg form-control-solid"  id="type_description"  name="description" required>
                      </div>    
                      <div class="d-flex justify-content-between border-top pt-10">
                        <div class="mr-2"></div>
                        <div>
                            <button type="button" ng-click="saveServiceTypes()" class="btn btn-success mr-2">Guardar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
                        </div>
                    </div>
            </form>
        </div> 
      </div>
    </div>
  </div>
@endsection

@section('js')

@endsection