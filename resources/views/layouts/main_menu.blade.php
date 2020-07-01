<div class="kt-header__bottom">
    <div class="kt-container ">

        <!-- begin: Header Menu -->
        <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
        <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
            <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
                <ul class="kt-menu__nav ">
                    <li class="kt-menu__item  kt-menu__item--open kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open @yield('menu_requests')" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Solicitudes</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                            <ul class="kt-menu__subnav">
                                <li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true"><a href="/requests/1" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Activas</span></a></li>
                                <li class="kt-menu__item " aria-haspopup="true"><a href="/requests/5" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Finalizadas</span></a></li>
                                <li class="kt-menu__item " aria-haspopup="true"><a href="/requests/7" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Rechazadas</span></a></li>
                            </ul>
                        </div>
                    </li>
                    @if(\Auth::user()->hasRole('Superadmin'))
                    <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open-dropdown @yield('menu_providers')" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                        <a href="/companies/provider" class="kt-menu__link"><span class="kt-menu__link-text">Proveedores</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    </li>
                    @endif
                    @if(\Auth::user()->hasRole('Superadmin'))
                    <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open-dropdown @yield('menu_buyers')" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                        <a href="/companies/buyer" class="kt-menu__link"><span class="kt-menu__link-text">Compradores</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    </li>
                    @endif
                </ul>
            </div>
            <div class="kt-header-toolbar">
                
            </div>
        </div>

        <!-- end: Header Menu -->
    </div>
</div>