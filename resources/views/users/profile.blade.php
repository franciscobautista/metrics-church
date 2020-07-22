ç@extends('layouts.master_app')
@section('title') Mi Perfil @endsection

@section('css')
@endsection

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Profile Personal Information-->
			<div class="d-flex flex-row">
				<!--begin::Aside-->
				<div class="flex-row-auto offcanvas-mobile w-250px w-xxl-350px" id="kt_profile_aside">
					<!--begin::Profile Card-->
					<div class="card card-custom card-stretch">
						<!--begin::Body-->
						<div class="card-body pt-4">
							<!--begin::User-->
							<div class="d-flex align-items-center">
								<div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
									<div class="symbol-label" style="background-image:url('/public/app/photos/{{Auth::user()->person->photo}}')"></div>
									<i class="symbol-badge bg-success"></i>
								</div>
								<div>
									<a href="#" class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">{{Auth::user()->person->first_name}} {{Auth::user()->person->last_name}}</a>
									<div class="text-muted">{{Auth::user()->person->job_position->name}}</div>
									
								</div>
							</div>
							<!--end::User-->
							<!--begin::Contact-->
							<div class="py-9">
								<div class="d-flex align-items-center justify-content-between mb-2">
									<span class="font-weight-bold mr-2">Email:</span>
									<a href="#" class="text-muted text-hover-primary">{{\Auth::user()->email}}</a>
								</div>
								
							</div>
							<!--end::Contact-->
							<!--begin::Nav-->
							<div class="navi navi-bold navi-hover navi-active navi-link-rounded">
							
								<div class="navi-item mb-2">
									<a href="custom/apps/profile/profile-1/personal-information.html" class="navi-link py-4 active">
										<span class="navi-icon mr-2">
											<span class="svg-icon">
												<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24" />
														<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</span>
										<span class="navi-text font-size-lg">Información personal</span>
									</a>
								</div>
							
								<div class="navi-item mb-2">
									<a href="custom/apps/profile/profile-1/change-password.html" class="navi-link py-4">
										<span class="navi-icon mr-2">
											<span class="svg-icon">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Shield-user.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
														<path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3" />
														<path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</span>
										<span class="navi-text font-size-lg">Cambiar contraseña</span>
										<span class="navi-label">
											<span class="label label-light-danger label-rounded font-weight-bold">5</span>
										</span>
									</a>
								</div>
								
							</div>
							<!--end::Nav-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Profile Card-->
				</div>
				<!--end::Aside-->
				<!--begin::Content-->
				<div class="flex-row-fluid ml-lg-8">
					<!--begin::Card-->
					<div class="card card-custom card-stretch">
						<!--begin::Header-->
						<div class="card-header py-3">
							<div class="card-title align-items-start flex-column">
								<h3 class="card-label font-weight-bolder text-dark">Información personal</h3>
								<span class="text-muted font-weight-bold font-size-sm mt-1">Actualiza tu información personal</span>
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Form-->
						<form class="form" method="POST" action="/profile/{{Auth::id()}}" enctype="multipart/form-data">
							<!--begin::Body-->
							<div class="card-body">
								@if ($errors->any())
								<div class="alert alert-custom alert-notice alert-light-primary fade show mb-5" role="alert">
									<div class="alert-icon">
										<i class="flaticon-warning"></i>
									</div>
									<div class="alert-text">
										<ul>
										@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
										@endforeach
										</ul>
									</div>
									<div class="alert-close">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">
												<i class="ki ki-close"></i>
											</span>
										</button>
									</div>
								</div>
								@endif
								@if(session('message'))
								<div class="alert alert-custom alert-notice alert-light-success fade show" role="alert">
									<div class="alert-icon"><i class="flaticon2-protected"></i></div>
									<div class="alert-text"> {{session('message')}}</div>
									<div class="alert-close">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true"><i class="ki ki-close"></i></span>
										</button>
									</div>
								</div>
								@endif

								@csrf
								@method('PATCH')
								<div class="form-group row">
									<label class="col-xl-3 col-lg-3 col-form-label text-right">Foto</label>
									<div class="col-lg-9 col-xl-6">
										<div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(/public/app/photos/{{Auth::user()->person->photo}})">
											<div class="image-input-wrapper" style="background-image: url(/public/app/photos/{{Auth::user()->person->photo}})"></div>
											<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Cambiar foto">
												<i class="fa fa-pen icon-sm text-muted"></i>
												<input type="file" name="photo" accept=".png, .jpg, .jpeg" />
												<input type="hidden" name="profile_avatar_remove" />
											</label>
											<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancelar subida de foto">
												<i class="ki ki-bold-close icon-xs text-muted"></i>
											</span>
											<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Eliminar foto">
												<i class="ki ki-bold-close icon-xs text-muted"></i>
											</span>
										</div>
										<span class="form-text text-muted">Archivos permitidos: png, jpg, jpeg</span>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-xl-3 col-lg-3 col-form-label text-right">Nombre</label>
									<div class="col-lg-9 col-xl-6">
										<input class="form-control form-control-lg form-control-solid" type="text" name="first_name" value="{{Auth::user()->person->first_name}}" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-xl-3 col-lg-3 col-form-label text-right">Apellido Paterno</label>
									<div class="col-lg-9 col-xl-6">
										<input class="form-control form-control-lg form-control-solid" type="text" name="last_name" value="{{Auth::user()->person->last_name}}" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-xl-3 col-lg-3 col-form-label text-right">Apellido Materno</label>
									<div class="col-lg-9 col-xl-6">
										<input class="form-control form-control-lg form-control-solid" type="text" name="mothers_last_name" value="{{Auth::user()->person->mothers_last_name}}" />
									</div>
								</div>
								<div class="row">
									<label class="col-xl-3"></label>
									<div class="col-lg-9 col-xl-6">
										<h5 class="font-weight-bold mt-10 mb-6">Información de contacto</h5>
									</div>
								</div>
								<!--<div class="form-group row">
									<label class="col-xl-3 col-lg-3 col-form-label text-right">Contact Phone</label>
									<div class="col-lg-9 col-xl-6">
										<div class="input-group input-group-lg input-group-solid">
											<div class="input-group-prepend">
												<span class="input-group-text">
													<i class="la la-phone"></i>
												</span>
											</div>
											<input type="text" class="form-control form-control-lg form-control-solid" value="+35278953712" placeholder="Phone" />
										</div>
										
									</div>
								</div> -->
								<div class="form-group row">
									<label class="col-xl-3 col-lg-3 col-form-label text-right">Email Address</label>
									<div class="col-lg-9 col-xl-6">
										<div class="input-group input-group-lg input-group-solid">
											<div class="input-group-prepend">
												<span class="input-group-text">
													<i class="la la-at"></i>
												</span>
											</div>
											<input type="text" class="form-control form-control-lg form-control-solid" name="email" value="{{Auth::user()->email}}" placeholder="Email" />
										</div>
										<span class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</span>
									</div>
								</div>
								<!--<div class="form-group row">
									<label class="col-xl-3 col-lg-3 col-form-label text-right">Company Site</label>
									<div class="col-lg-9 col-xl-6">
										<div class="input-group input-group-lg input-group-solid">
											<input type="text" class="form-control form-control-lg form-control-solid" placeholder="Username" value="loop" />
											<div class="input-group-append">
												<span class="input-group-text">.com</span>
											</div>
										</div>
									</div>
								</div> -->
							</div>
							<div class="card-footer">
								<button type="submit" class="btn btn-success mr-2">Guardar cambios</button>
							</div>
							<!--end::Body-->
						</form>
						<!--end::Form-->
					</div>
				</div>
				<!--end::Content-->
			</div>
			<!--end::Profile Personal Information-->
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
<script src="/app/assets/js/pages/widgets.js?v=7.0.5"></script>
<script src="/app/assets/js/pages/custom/profile/profile.js?v=7.0.5"></script>
@endsection