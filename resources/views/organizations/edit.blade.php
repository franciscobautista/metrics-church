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
				<div class="flex-row-fluid ml-lg-8 d-block" id="kt_inbox_list" ng-controller="categoriasController">
					<!--begin::Card-->
					<div class="card card-custom card-stretch">
						<!--begin::Header-->
						<div class="card-header py-3">
							<div class="card-title align-items-start flex-column">
								<h3 class="card-label font-weight-bolder text-dark">Categorías</h3>
								<span class="text-muted font-weight-bold font-size-sm mt-1"></span>
							</div>
						</div>
						<!--end::Header-->
						<div class="card-body">
							@include('partials.success')
							<a href="/categories/create" class="btn btn-outline-primary mr-3"> <i class="flaticon-file"></i>Nueva categoría</a>

		                    <!--begin::Table-->
		                    <div class="table-responsive">
		                        <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_2">
		                            <thead>
		                                <tr class="text-uppercase">
		                                    <th style="min-width: 120px">#</th>
		                                    <th style="min-width: 120px">Nombre</th>
		                                    <th class="pr-0 text-right" style="min-width: 160px">Acciones</th>
		                                </tr>
		                            </thead>
		                            <tbody>
		                                @foreach($categories as $category)
		                                <tr>
		                                    <td>
		                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$loop->index+1}}</span>
		                                    </td>
		                                    <td>
		                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$category->name}}</span>
		                                    </td>
		                                    <td class="pr-0 text-right">
		                                        <a href="/categories/edit/{{$category->id}}" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
		                                            <span class="svg-icon svg-icon-md svg-icon-primary">
		                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
		                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
		                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		                                                        <rect x="0" y="0" width="24" height="24" />
		                                                        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
		                                                        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
		                                                    </g>
		                                                </svg>
		                                                <!--end::Svg Icon-->
		                                            </span>
		                                        </a>
		                                        <a href="#" ng-click="eliminarCategoria({{$category->id}})" class="btn btn-icon btn-light btn-hover-primary btn-sm">
		                                            <span class="svg-icon svg-icon-md svg-icon-primary">
		                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
		                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
		                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		                                                        <rect x="0" y="0" width="24" height="24" />
		                                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
		                                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
		                                                    </g>
		                                                </svg>
		                                                <!--end::Svg Icon-->
		                                            </span>
		                                        </a>
		                                        
		                                    </td>
		                                </tr>
		                                @endforeach
		                            </tbody>
		                        </table>
		                    </div>
		                    <!--end::Table-->
		                </div>
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