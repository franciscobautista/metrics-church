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
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5"><a href="/settings/services" style="color: #000">Servicios </a> </h5>
                <!--end::Title-->
                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <!--end::Separator-->
                <!--begin::Search Form-->
                <div class="d-flex align-items-center" id="kt_subheader_search">
                    <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">Editar</span>
                </div>
                <!--end::Search Form-->
            </div>
           
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container" >

            <div class="card card-custom gutter-b">
                <div class="card-body">  
                    <form class="form" id="kt_form" method="POST" action="/servicetypes/update/{{$service->id}}" enctype="multipart/form-data">
                        <div class="tab-content">
                            <!--begin::Tab-->
                            <div class="tab-pane show active px-7" id="kt_user_edit_tab_1" role="tabpanel">
                                @include('partials.errors')
                                @csrf
                                @method('PATCH')
                                <!--begin::Row-->
                                <div class="row"> 
                                    <div class="col-xl-12 my-2">
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <div class="col-4 row">
                                                <label class="col-form-label  text-lg-right text-left">Nombre</label>
                                                <div class="col-9">
                                                    <input class="form-control form-control-lg form-control-solid" name="name" type="text" value="{{ $service->name}}" autofocus required/>
                                                </div>
                                            </div>   
                                            <div class="col-8 row">
                                                <label class="col-form-label  text-lg-right text-left">Descripción</label>
                                                <div class="col-9">
                                                    <input class="form-control form-control-lg form-control-solid" name="description" type="text" value="{{ $service->description}}" autofocus required/>
                                                </div>
                                            </div> 
                                            
                                        </div>
                                     
                                        <div class="d-flex justify-content-between border-top pt-10">
                                            <div class="mr-2"></div>
                                            <div>
                                                <button type="submit" class="btn btn-success mr-2">Guardar</button>
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

@endsection

@section('js')

@endsection