@extends('layouts.master_app')
@section('title') Agregar usuario @endsection

@section('css')

@endsection

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h2 class="subheader-title text-dark font-weight-bold my-1 mr-3"></h2>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold my-2 p-0">
                        <li class="breadcrumb-item">
                            <a href="/users" class="text-muted">Usuarios</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="" class="text-muted">Agregar nuevo usuario</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
           
        </div>
    </div>
    <!--end::Subheader-->

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
               
                <!--begin::Card body-->
                <div class="card-body px-0">
         
                    
                    <form class="form" id="kt_form" method="POST" action="/users">
                        
                        <div class="tab-content">
                            
                            <!--begin::Tab-->
                            <div class="tab-pane show active px-7" id="kt_user_edit_tab_1" role="tabpanel">
                                @include('partials.errors')
                                @csrf
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-7 my-2">
                                      
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Nombre</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid" name="first_name" type="text" value="{{ old('first_name') }}" autofocus required/>
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Apellido Paterno</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid" type="text" name="last_name" value="{{ old('last_name') }}"/>
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Apellido Materno</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid" type="text" name="mothers_last_name" value="{{ old('mothers_last_name') }}" />
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Rol </label>
                                            <div class="col-9">
                                                 <select class="form-control form-control-lg form-control-solid" name="role_id" required>
                                                    @foreach($roles as $role)
                                                    <option value="{{$role->id}}" {{ old('role_id') == $role->id ? "selected" : '' }}>{{$role->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                       
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Email </label>
                                            <div class="col-9">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="la la-at"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control form-control-lg form-control-solid" name="email" placeholder="Email" value="{{ old('email') }}" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Group-->

                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Contraseña</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid" type="password" name="password" value="" required />
                                            </div>
                                        </div>
                                        <!--end::Group-->

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-success mr-2">Agregar</button>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Tab-->
                           
                        </div>
                    </form>
                </div>
                <!--begin::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container"></div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->

@endsection

@section('js')

@endsection