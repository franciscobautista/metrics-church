@extends('layouts.master_app')
@section('title') Configuración @endsection

@section('css')
@endsection

@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Subheader-->
	<div class="subheader py-2 py-lg-4 subheader-transparent" id="kt_subheader">
		<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Info-->
			<div class="d-flex align-items-center flex-wrap mr-1">
				<!--begin::Mobile Toggle-->
				<button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none" id="kt_subheader_mobile_toggle">
					<span></span>
				</button>
				<!--end::Mobile Toggle-->
				<!--begin::Page Heading-->
				<div class="d-flex align-items-baseline flex-wrap mr-5">
					<!--begin::Page Title-->
					<h5 class="text-dark font-weight-bold my-1 mr-5">Configuraciones</h5>
					<!--end::Page Title-->
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
			<!--begin::Profile Personal Information-->
			<div class="d-flex flex-row">
				<!--begin::Aside-->
				<div class="flex-row-auto offcanvas-mobile w-200px w-xxl-275px" id="kt_inbox_aside">
					<!--begin::Profile Card-->
					<div class="card card-custom card-stretch">
						<!--begin::Body-->
						<div class="card-body pt-4">
							
							<!--begin::Nav-->
							<div class="navi navi-bold navi-hover navi-active navi-link-rounded" style="margin-top: 20px">
							
								<div class="navi-item mb-2">
									<a href="/settings/categories" class="navi-link py-4 @if($section == 'categories') active @endif">
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
										<span class="navi-text font-size-lg">Categorías</span>
									</a>
								</div>
							
								<div class="navi-item mb-2">
									<a href="/settings/service_times" class="navi-link py-4  @if($section == 'service_times') active @endif ">
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
										<span class="navi-text font-size-lg">Tiempos de servicios</span>
									</a>
								</div>

								<div class="navi-item mb-2">
									<a href="/settings/users" class="navi-link py-4  @if($section == 'users') active @endif ">
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
										<span class="navi-text font-size-lg">Usuarios</span>
									</a>
								</div>
								<div class="navi-item mb-2">
									<a href="/settings/roles" class="navi-link py-4  @if($section == 'roles') active @endif ">
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
										<span class="navi-text font-size-lg">Roles</span>
									</a>
								</div>

								<div class="navi-item mb-2">
									<a href="/settings/campuses" class="navi-link py-4  @if($section =='campuses') active @endif ">
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
										<span class="navi-text font-size-lg">Campus</span>
									</a>
								</div>

								<div class="navi-item mb-2">
									<a href="/settings/organization" class="navi-link py-4  @if($section =='organization') active @endif ">
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
										<span class="navi-text font-size-lg">Organización</span>
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
				@if($section =='categories')
				<!--begin::Content-->
				<div class="flex-row-fluid ml-lg-8 d-block" id="kt_inbox_list">
					<!--begin::Card-->
					<div class="card card-custom card-stretch">
						<!--begin::Header-->
						<div class="card-header py-3">
							<div class="card-title align-items-start flex-column">
								<h3 class="card-label font-weight-bolder text-dark">Categorías</h3>
								<span class="text-muted font-weight-bold font-size-sm mt-1">Actualiza tu información personal</span>
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Form-->
						<form class="form" method="POST" action="/users/update/{{Auth::id()}}" enctype="multipart/form-data">
							<!--begin::Body-->
							<div class="card-body">
								@include('partials.errors')
								@include('partials.success')
								@csrf
								@method('PATCH')
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
									<label class="col-xl-3 col-lg-3 col-form-label text-right">Email</label>
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
				@endif

				@if($section == 'organization')
				<!--begin::Content-->
				<div class="flex-row-fluid ml-lg-8">
					<!--begin::Card-->
					<div class="card card-custom">
						<!--begin::Header-->
						<div class="card-header py-3">
							<div class="card-title align-items-start flex-column">
								<h3 class="card-label font-weight-bolder text-dark">Organización</h3>
								<span class="text-muted font-weight-bold font-size-sm mt-1">Cambiar la contraseña de tu cuenta</span>
							</div>
						</div>
						<!--end::Header-->

						

						<!--begin::Form-->
						<form class="form" method="POST" action='/users/password'>
							
							<div class="card-body">
								@include('partials.errors')
								@include('partials.error')
								@include('partials.success')
								@csrf
								<div class="form-group row">
									<label class="col-xl-3 col-lg-3 col-form-label text-alert">Contraseña actual</label>
									<div class="col-lg-9 col-xl-6">
										<input type="password" class="form-control form-control-lg form-control-solid mb-2" name="current_password" placeholder="Introduce tu contraseña actual" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-xl-3 col-lg-3 col-form-label text-alert">Nueva contraseña</label>
									<div class="col-lg-9 col-xl-6">
										<input type="password" class="form-control form-control-lg form-control-solid" name="password" placeholder="Nueva contraseña" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-xl-3 col-lg-3 col-form-label text-alert">Confirma tu contraseña</label>
									<div class="col-lg-9 col-xl-6">
										<input type="password" class="form-control form-control-lg form-control-solid" name="password_confirmation" placeholder="Introduce tu nueva contraseña" />
									</div>
								</div>
							</div>

							<div class="card-footer">
								<button type="submit" class="btn btn-success mr-2">Actualizar contraseña</button>
							</div>
						</form>
						<!--end::Form-->
					</div>
				</div>
				<!--end::Content-->
				@endif
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