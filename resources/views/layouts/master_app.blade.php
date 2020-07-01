<!-- Connekty v0.0.1 -->
<!DOCTYPE html>
<html lang="en" ng-app="app">

	<!-- begin::Head -->
	<head>
		<base href="">
		<meta charset="utf-8" />
		<title>@yield('title') | {{ env('APP_NAME')}}</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">

		<!--end::Fonts -->

		<!--begin::Page Vendors Styles(used by this page) -->
        @yield('css')
		<!--end::Page Vendors Styles -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="/app/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/app/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->

		<!--end::Layout Skins -->
		<link rel="icon" type="image/png" href="/images/favicon.png" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <!--ANGULAR-->
        <script src="/app/assets/js/angular/angular.min.js"></script>
        <script src="/app/assets/js/angular/app.js"></script>
        <script src="/app/assets/js/angular/controllers.js?v={{strtotime(\Carbon\Carbon::now())}}"></script>
        <script src="/app/assets/js/angular/services.js?v={{strtotime(\Carbon\Carbon::now())}}"></script>
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-page--loading-enabled kt-page--loading kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-subheader--enabled kt-subheader--transparent kt-page--loading">

		<!-- begin::Page loader -->

		<!-- end::Page Loader -->

		<!-- begin:: Page -->

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__brand">
				<a class="kt-header-mobile__logo" href="?page=index">
					<img alt="Logo" src="/images/connekty.png" style="height: 30px" />
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
				<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more-1"></i></button>
			</div>
		</div>

		<!-- end:: Header Mobile -->
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper " id="kt_wrapper">
                    
                    @include('layouts.top_navbar')
					<!-- end:: Header -->


					@yield('content')

					<!-- begin:: Footer -->
					<div class="kt-footer  kt-footer--extended  kt-grid__item" id="kt_footer">
						
						<div class="kt-footer__bottom">
							<div class="kt-container ">
								<div class="kt-footer__wrapper">
									<div class="kt-footer__copyright">
										&copy; {{ date('Y') }} <a href="/" target="_blank">Connekty</a>
									</div>
									<div class="kt-footer__menu">
										<a href="/privacy" target="_blank">Privacidad</a>
										<a href="/contact" target="_blank">Contacto</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- end:: Footer -->
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		
		<!-- begin::Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>

		<!-- end::Scrolltop -->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#3d94fb",
						"light": "#ffffff",
						"dark": "#282a3c",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#3d94fb",
						"warning": "#ffb822",
						"danger": "#e97322"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="/app/assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
		<script src="/app/assets/js/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors(used by this page) -->
		<script src="/app/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
		<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
		<script src="/app/assets/plugins/custom/gmaps/gmaps.js" type="text/javascript"></script> 

		<!--end::Page Vendors -->

		<!--begin::Page Scripts(used by this page) -->
		@yield('js')
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>