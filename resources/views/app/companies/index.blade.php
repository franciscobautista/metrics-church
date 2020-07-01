@extends('layouts.master_app')
@section('title') Solicitudes @endsection
@if($type=="provider")
    @section('menu_providers') kt-menu__item--here @endsection
@else
    @section('menu_buyers') kt-menu__item--here @endsection
@endif
@section('css')
<link href="/app/assets/css/pages/todo/todo.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
	<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

		<!-- begin:: Content Head -->
		<div class="kt-subheader   kt-grid__item" id="kt_subheader">
			<div class="kt-container ">
				<div class="kt-subheader__main">
					<h3 class="kt-subheader__title">
						@if($type=="provider")
                            Proveedores
                        @else
                            Compradores
                        @endif
					</h3>
					<span class="kt-subheader__separator kt-subheader__separator--v"></span>
					<div class="kt-subheader__group" id="kt_subheader_search">
						<span class="kt-subheader__desc" id="kt_subheader_total"> {{ count($companies)}} Total </span>
					</div>
                    
				</div>
                <div>
                    <button type="button" class="btn btn-brand" data-toggle="modal" data-target="#add_company">Agregar empresa</button>
                </div>
			</div>
		</div>

		<!-- end:: Content Head -->

		<!-- begin:: Content -->
		<div class="kt-container  kt-grid__item kt-grid__item--fluid">

        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__body kt-portlet__body--fit">
                 
                <!--begin: Datatable -->
                <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" id="kt_apps_user_list_datatable" style="">
                    @if ($errors->any())
                        <div class="alert alert-warning">
                            Corrige los siguientes errores: <br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <table class="kt-datatable__table" style="display: block;" border=0>
                        <thead class="kt-datatable__head">
                            <tr class="kt-datatable__row" style="left: 0px;">
                                <th data-field="RecordID" class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check"><span style="width: 20px;">
                                </th>
                                <th data-field="AgentName" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 200px;">Contacto </span></th>
                                <th data-field="ShipName" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 252px;">Empresa</span></th>
                                <th data-field="Country" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 155px;">Ciudad</span></th>
                                <th data-field="Status" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 100px;">Teléfono</span></th>
                                <th data-field="Status" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 200px;">Email</span></th>
                                <th data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 60px;">Acciones</span></th>
                            </tr>
                        </thead>
                        <tbody class="kt-datatable__body" style="">
                        @foreach($companies as $company)
                        <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                            <td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID">
                                {{$loop->index+1}}
                            </td>
                            <td data-field="AgentName" class="kt-datatable__cell">
                                <span style="width: 200px;">
                                    <div class="kt-user-card-v2">
                                        @if(isset($company->employees[0]))
                                        <div class="kt-user-card-v2__pic">
                                            @if($company->employees[0]->person->photo!=null)
                                            <span class="kt-media kt-margin-r-5 kt-margin-t-5">
                                                <img src="/app/photos/{{$company->employees[0]->person->photo}}" alt="image">
                                            </span>
                                            @endif
                                            @if($company->employees[0]->person->photo==null)			
                                            <div class="kt-badge kt-badge--xl kt-badge--brand">{{$company->employees[0]->person->lettersName}}</div>
                                            @endif 						
                                        </div>								
                                        <div class="kt-user-card-v2__details">
                                            <a href="#" class="kt-user-card-v2__name"> {{$company->employees[0]->person->fullname}}</a>
                                            @if(isset($company->employees[0]->job_position_employee[0]))
                                            <span class="kt-user-card-v2__desc">{{$company->employees[0]->job_position_employee[0]->job_position->name}}</span>
                                            @endif
                                            @if(isset($company->employees[0]->person->phones[0]))
                                            <span class="kt-user-card-v2__desc"><a href="https://api.whatsapp.com/send?phone={{$company->employees[0]->person->phones[0]->phone }}&text=Hola" target="_blank"> {{$company->employees[0]->person->phones[0]->phone}}</span>
                                            @endif
                                            @if(isset($company->employees[0]->person->emails[0]))
                                            <span class="kt-user-card-v2__desc">{{$company->employees[0]->person->emails[0]->email}}</span>
                                            @endif
                                        </div>
                                        @endif
                                    </div>
                                </span>
                            </td>
                            <td data-field="ShipName" data-autohide-disabled="false" class="kt-datatable__cell">
                                <span style="width: 252px;">
                                    <div class="kt-user-card-v2">
                                        <div class="kt-user-card-v2__pic">  
                                            @if($company->logo!=null)
                                            <span class="kt-media kt-margin-r-5 kt-margin-t-5">
                                                <img src="/app/companies/{{$company->logo}}" alt="image">
                                            </span>
                                            @endif
                                            @if($company->logo==null)
                                                <div class="kt-badge kt-badge--xl kt-badge--brand">{{$company->lettersName}}</div>
                                            @endif
                                        </div> 
                                        <div class="kt-user-card-v2__details"> 
                                            <a href="#" class="kt-user-card-v2__name">{{$company->name}}</a> 
                                            @if(isset($company->company_subcategories[0]))
                                            <span class="kt-user-card-v2__email">{{$company->company_subcategories[0]->subcategory->name}} ({{$company->company_subcategories[0]->subcategory->category->name}})</span>
                                            @endif
                                        </div>
                                    </div>
                                </span>
                            </td>
                            <td data-field="Country" class="kt-datatable__cell">                                
                                <span style="width: 155px;">
                                    @if(isset($company->company_addresses[0]))
                                    {{$company->company_addresses[0]->address->city}},
                                    {{$company->company_addresses[0]->address->state}}
                                    @endif
                                </span>
                            </td>
                            
                            <!--<td data-field="Status" class="kt-datatable__cell">
                                <span style="width: 100px;"><span class="btn btn-bold btn-sm btn-font-sm  btn-label-success">Success</span></span>
                            </td> -->
                            <td data-field="Status" class="kt-datatable__cell">
                                @if(isset($company->phones[0]))
                                <span style="width: 100px;"><span class="kt-font-bold kt-font-primary">{{$company->phones[0]->phone}}</span></span>
                                @endif
                            </td>
                            <td data-field="Status" class="kt-datatable__cell">
                                <span style="width: 200px;">{{$company->email}}</span>
                            </td>
                            <td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
                                <span style="overflow: visible; position: relative; width: 60px;">
                                    <div class="dropdown">	
                                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">
                                            <i class="flaticon-more-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <ul class="kt-nav">	
                                                <!--<li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-expand"></i>
                                                        <span class="kt-nav__link-text">Ver</span> </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon flaticon2-contract"></i> <span class="kt-nav__link-text">Editar</span> </a>
                                                </li>-->
                                                <li class="kt-nav__item">
                                                    <a href="/companies/delete/{{$company->id}}" class="kt-nav__link"> <i class="kt-nav__link-icon flaticon2-trash"></i> <span class="kt-nav__link-text">Eliminar</span> </a>
                                                </li>
                                                <!--
                                                @if($company->type=="Buyer")
                                                <li class="kt-nav__item">
                                                    <a href="/companies/requests/{{$company->id}}" class="kt-nav__link"> <i class="kt-nav__link-icon flaticon2-mail-1"></i> <span class="kt-nav__link-text">Ver solicitudes</span> </a>
                                                </li>
                                                @endif
                                                -->
                                            </ul>
                                        </div>
                                    </div>
                                </span>
                            </td>
                        </tr>
                        @endforeach
                
                        </tbody>
                    </table>
                    <!--<div class="kt-datatable__pager kt-datatable--paging-loaded">
                        <ul class="kt-datatable__pager-nav">
                            <li><a title="First" class="kt-datatable__pager-link kt-datatable__pager-link--first kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li>
                            <li><a title="Previous" class="kt-datatable__pager-link kt-datatable__pager-link--prev kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li>
                            <li style=""></li>
                            <li style="display: none;">
                                <input type="text" class="kt-pager-input form-control" title="Page number">
                            </li>
                            <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active" data-page="1" title="1">1</a></li>
                            <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="2" title="2">2</a></li>
                            <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="3" title="3">3</a></li>
                            <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="4" title="4">4</a></li>
                            <li style=""></li>
                            <li><a title="Next" class="kt-datatable__pager-link kt-datatable__pager-link--next" data-page="2"><i class="flaticon2-next"></i></a></li>
                            <li><a title="Last" class="kt-datatable__pager-link kt-datatable__pager-link--last" data-page="4"><i class="flaticon2-fast-next"></i></a></li>
                        </ul>
                     
                    </div> -->
                </div>

                <!--end: Datatable -->
            </div>
        </div>
		
			
			
		</div>

		<!-- end:: Content -->
	</div>
</div>

<!--begin::Modal-->
<div class="modal fade" id="add_company" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar empresa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form method="POST" action="/companies"  enctype="multipart/form-data">
                <div class="modal-body">

                    @csrf
                    <input type="hidden" class="form-control" name="type" value="{{ucwords($type)}}">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="recipient-name" class="form-control-label">Empresa:</label>
                        </div>
						<div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Nombre de la empresa" required >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email" >
                            </div>
                        </div>
						<div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" placeholder="Teléfono" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="recipient-name" class="form-control-label">Contacto:</label>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="first_name" placeholder="Nombre de la persona" required >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email_person" placeholder="Email" required>
                            </div>
                        </div>
						<div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone_person" placeholder="Teléfono" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="recipient-name" class="form-control-label">Localización de la empresa:</label>
                        </div>
						<div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="Ciudad" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="state" placeholder="Estado" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Categoría:</label>
                        <select class="form-control" name="subcategory_id" required>
                            @foreach($subcategories as $item)
                            <option value="{{$item->id}}">{{$item->name}} ({{ $item->category->name}})</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Logotipo:</label>
                        <input type="file" name="file" >
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end::Modal-->

@endsection

@section('js')
<script src="/app/assets/js/pages/custom/todo/todo.js" type="text/javascript"></script>
@endsection