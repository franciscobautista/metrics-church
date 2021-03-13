<!--begin::Header-->
<div id="kt_header" class="header flex-column header-fixed">
	<!--begin::Top-->
	<div class="header-top">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Left-->
			<div class="d-none d-lg-flex align-items-center mr-3">
				<!--begin::Logo-->
				<a href="index.html" class="mr-20">
					<img alt="Logo" src="/app/assets/media/logos/logo-letter-9.png" class="max-h-35px" />
				</a>
				<!--end::Logo-->
				<!--begin::Tab Navs(for desktop mode)-->
				<ul class="header-tabs nav align-self-end font-size-lg" role="tablist">
					<!--begin::Item-->
					<li class="nav-item">
						<a href="/home" class="nav-link py-4 px-6 active" role="tab">Dashboard</a>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="nav-item mr-3">
						<a href="/grafics" class="nav-link py-4 px-6"  role="tab">Gráficas</a>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="nav-item mr-3">
						<a href="/reports" class="nav-link py-4 px-6" role="tab">Reportes</a>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="nav-item mr-3">
						<a href="/inputs" class="nav-link py-4 px-6"  role="tab">Registros</a>
					</li>
					<!--end::Item-->
				</ul>
				<!--begin::Tab Navs-->
			</div>
			<!--end::Left-->
			<!--begin::Topbar-->
			<div class="topbar bg-primary">
				<!--begin::User-->
				<div class="topbar-item">
					<div class="btn btn-icon btn-hover-transparent-white w-auto d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
						<div class="d-flex flex-column text-right pr-3">
							<span class="text-white opacity-50 font-weight-bold font-size-sm d-none d-md-inline">{{ Auth::user()->person->first_name}}</span>
							<span class="text-white font-weight-bolder font-size-sm d-none d-md-inline">{{$organization->name}}</span>
						</div>
						<span class="symbol symbol-35">
							<span class="symbol-label font-size-h5 font-weight-bold text-white bg-white-o-30">{{ Auth::user()->person->lettersName}}</span>
						</span>
					</div>
				</div>
				<!--end::User-->
			</div>
			<!--end::Topbar-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Top-->
	<!--begin::Bottom-->
	<div class="header-bottom" >
		<!--begin::Container-->
		<div class="container">
			<!--begin::Header Menu Wrapper-->
			<div class="header-navs header-navs-left" id="kt_header_navs">
				<!--begin::Tab Navs(for tablet and mobile modes)-->

				
				<ul class="header-tabs p-5 p-lg-0 d-flex d-lg-none nav nav-bold nav-tabs" role="tablist">
					<!--begin::Item-->
					<li class="nav-item mr-2">
						<a href="/dashboard" class="nav-link btn btn-clean active" role="tab">Inicio</a>
					</li>
					<!--end::Item-->
				</ul>
				<!--begin::Tab Navs-->
				<!--begin::Tab Content-->
				<div class="tab-content">
					<!--begin::Tab Pane-->
					<div class="tab-pane py-5 p-lg-0 show active" id="kt_header_tab_1">
						<!--begin::Menu-->
						<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
							<!--begin::Nav-->
							<ul class="menu-nav">
								<li class="menu-item menu-item-active" aria-haspopup="true">
									<a href="/dashboard" class="menu-link">
										<span class="menu-text">Dashboard</span>
									</a>
								</li>
								<li class="menu-item " aria-haspopup="true">
									<a href="/grafics" class="menu-link">
										<span class="menu-text">Gráficas</span>
									</a>
								</li>
								<li class="menu-item " aria-haspopup="true">
									<a href="/reports" class="menu-link">
										<span class="menu-text">Reportes</span>
									</a>
								</li>
								<li class="menu-item " aria-haspopup="true">
									<a href="/inputs" class="menu-link">
										<span class="menu-text">Registros</span>
									</a>
								</li>
							</ul>
							<!--end::Nav-->
						</div>
						<!--end::Menu-->
					</div>
					<!--begin::Tab Pane-->
					
				</div>
				<!--end::Tab Content-->
			</div>
			<!--end::Header Menu Wrapper-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Bottom-->
</div>
<!--end::Header-->