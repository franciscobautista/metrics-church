@extends('layouts.master_app')
@section('title') Editar usuario @endsection

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
                    <a href="/users" class="text-muted"> <h5 class="subheader-title text-dark font-weight-bold my-1 mr-3"> Usuarios</h5> </a>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold my-2 p-0">
                        <li class="breadcrumb-item">
                            <a href="" class="text-muted">{{$user->person->first_name}} {{$user->person->last_name}}</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="" class="text-muted">Actualizar permisos</a>
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
         
                    
                    <form class="form" id="kt_form" method="POST" action="/users/permissions/{{ $user->id}}">
                        
                        <div class="tab-content">
                            
                            <!--begin::Tab-->
                            <div class="tab-pane show active px-7" id="kt_user_edit_tab_1" role="tabpanel">
                                @include('partials.errors')
                                @include('partials.success')
								@csrf
								@method('PATCH')
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-7 my-2">
                                        <input type="hidden" name="user_id" value="{{$user->id}}">
                                        @foreach($permissions as $item)
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-4 text-lg-right text-left">{{$item->name}}</label>
                                            <div class="col-3">
                                                <span class="switch switch-sm">
                                                    <label>
                                                        <input type="checkbox" @if($user->permission()->contains($item->slug))  checked="checked"  @endif name="permissions[{{$item->slug}}]"/>
                                                        <span></span>
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                        @endforeach
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-success mr-2">Actualizar permisos</button>
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