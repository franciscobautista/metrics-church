@extends('layouts.master_app')
@section('title') Editar categoría @endsection

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
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5"><a href="/categories_" style="color: #000"> Categorías </a> </h5>
                <!--end::Title-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <!--end::Separator-->
                <!--begin::Search Form-->
                <div class="d-flex align-items-center" id="kt_subheader_search">
                    <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">{{$subcategory->name}}</span>
                </div>

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
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <!--begin::Card body-->
                <div class="card-body px-0">
                    <form class="form" id="kt_form" method="POST" action="/subcategories/{{$subcategory->id}}" enctype="multipart/form-data">
                        @csrf
						@method('PATCH')
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
                                                <input class="form-control form-control-lg form-control-solid" name="name" type="text" value="{{ $subcategory->name }}"/>
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                        
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Seleccionar una categoría padre (opcional)</label>
                                            <div class="col-9">
                                                <select class="form-control form-control-lg form-control-solid" name="category_id" />
                                                    <option value="">Seleccionar</option>
                                                    @foreach($categories as $category)
                                                    <option value="{{$category->id}}" @if($subcategory->category_id != null && $subcategory->category_id == $category->id) selected @endif> {{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!--end::Group-->

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