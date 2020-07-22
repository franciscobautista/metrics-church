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
                    
                    <form class="form" id="kt_form" method="POST" action="/users">
                        @csrf
                        <div class="tab-content">
                            <!--begin::Tab-->
                            <div class="tab-pane show active px-7" id="kt_user_edit_tab_1" role="tabpanel">
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-7 my-2">
                                      
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Nombre</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid" name="first_name" type="text" value="{{ old('first_name') }}"/>
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
                                            <label class="col-form-label col-3 text-lg-right text-left">Posición </label>
                                            <div class="col-9">
                                                 <select class="form-control form-control-lg form-control-solid" name="job_position_id">
                                                    @foreach($job_positions as $item)
                                                    <option value="{{$item->id}}" {{ old('job_position_id') == $item->id ? "selected" : '' }}>{{$item->name}}</option>
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
                                                    <input type="text" class="form-control form-control-lg form-control-solid" name="email" placeholder="Email" value="{{ old('email') }}"/>
                                                </div>
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
                            <!--begin::Tab-->
                            <div class="tab-pane px-7" id="kt_user_edit_tab_2" role="tabpanel">
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-7">
                                        <div class="my-2">
                                            <!--begin::Row-->
                                            <div class="row">
                                                <label class="col-form-label col-3 text-lg-right text-left"></label>
                                                <div class="col-9">
                                                    <h6 class="text-dark font-weight-bold mb-10">Account:</h6>
                                                </div>
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left">Username</label>
                                                <div class="col-9">
                                                    <div class="spinner spinner-sm spinner-success spinner-right spinner-input">
                                                        <input class="form-control form-control-lg form-control-solid" type="text" value="nick84" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left">Email Address</label>
                                                <div class="col-9">
                                                    <div class="input-group input-group-lg input-group-solid">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="la la-at"></i>
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control form-control-lg form-control-solid" value="nick.watson@loop.com" placeholder="Email" />
                                                    </div>
                                                    <span class="form-text text-muted">Email will not be publicly displayed.
                                                    <a href="#">Learn more</a>.</span>
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left">Language</label>
                                                <div class="col-9">
                                                    <select class="form-control form-control-lg form-control-solid">
                                                        <option>Select Language...</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left">Time Zone</label>
                                                <div class="col-9">
                                                    <select class="form-control form-control-lg form-control-solid">
                                                        <option data-offset="-39600" value="International Date Line West">(GMT-11:00) International Date Line West</option>
                                                        <option data-offset="-39600" value="Midway Island">(GMT-11:00) Midway Island</option>
                                                        <option data-offset="-39600" value="Samoa">(GMT-11:00) Samoa</option>
                                                        <option data-offset="-36000" value="Hawaii">(GMT-10:00) Hawaii</option>
                                                        <option data-offset="-28800" value="Alaska">(GMT-08:00) Alaska</option>
                                                        <option data-offset="-25200" value="Pacific Time (US &amp; Canada)">(GMT-07:00) Pacific Time (US &amp; Canada)</option>
                                                        <option data-offset="-25200" value="Tijuana">(GMT-07:00) Tijuana</option>
                                                        <option data-offset="-25200" value="Arizona">(GMT-07:00) Arizona</option>
                                                        <option data-offset="-21600" value="Mountain Time (US &amp; Canada)">(GMT-06:00) Mountain Time (US &amp; Canada)</option>
                                                        <option data-offset="-21600" value="Chihuahua">(GMT-06:00) Chihuahua</option>
                                                        <option data-offset="-21600" value="Mazatlan">(GMT-06:00) Mazatlan</option>
                                                        <option data-offset="-21600" value="Saskatchewan">(GMT-06:00) Saskatchewan</option>
                                                        <option data-offset="-21600" value="Central America">(GMT-06:00) Central America</option>
                                                        <option data-offset="-18000" value="Central Time (US &amp; Canada)">(GMT-05:00) Central Time (US &amp; Canada)</option>
                                                        <option data-offset="-18000" value="Guadalajara">(GMT-05:00) Guadalajara</option>
                                                        <option data-offset="-18000" value="Mexico City">(GMT-05:00) Mexico City</option>
                                                        <option data-offset="-18000" value="Monterrey">(GMT-05:00) Monterrey</option>
                                                        <option data-offset="-18000" value="Bogota">(GMT-05:00) Bogota</option>
                                                        <option data-offset="-18000" value="Lima">(GMT-05:00) Lima</option>
                                                        <option data-offset="-18000" value="Quito">(GMT-05:00) Quito</option>
                                                        <option data-offset="-14400" value="Eastern Time (US &amp; Canada)">(GMT-04:00) Eastern Time (US &amp; Canada)</option>
                                                        <option data-offset="-14400" value="Indiana (East)">(GMT-04:00) Indiana (East)</option>
                                                        <option data-offset="-14400" value="Caracas">(GMT-04:00) Caracas</option>
                                                        <option data-offset="-14400" value="La Paz">(GMT-04:00) La Paz</option>
                                                        <option data-offset="-14400" value="Georgetown">(GMT-04:00) Georgetown</option>
                                                        <option data-offset="-10800" value="Atlantic Time (Canada)">(GMT-03:00) Atlantic Time (Canada)</option>
                                                        <option data-offset="-10800" value="Santiago">(GMT-03:00) Santiago</option>
                                                        <option data-offset="-10800" value="Brasilia">(GMT-03:00) Brasilia</option>
                                                        <option data-offset="-10800" value="Buenos Aires">(GMT-03:00) Buenos Aires</option>
                                                        <option data-offset="-9000" value="Newfoundland">(GMT-02:30) Newfoundland</option>
                                                        <option data-offset="-7200" value="Greenland">(GMT-02:00) Greenland</option>
                                                        <option data-offset="-7200" value="Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>
                                                        <option data-offset="-3600" value="Cape Verde Is.">(GMT-01:00) Cape Verde Is.</option>
                                                        <option data-offset="0" value="Azores">(GMT) Azores</option>
                                                        <option data-offset="0" value="Monrovia">(GMT) Monrovia</option>
                                                        <option data-offset="0" value="UTC">(GMT) UTC</option>
                                                        <option data-offset="3600" value="Dublin">(GMT+01:00) Dublin</option>
                                                        <option data-offset="3600" value="Edinburgh">(GMT+01:00) Edinburgh</option>
                                                        <option data-offset="3600" value="Lisbon">(GMT+01:00) Lisbon</option>
                                                        <option data-offset="3600" value="London">(GMT+01:00) London</option>
                                                        <option data-offset="3600" value="Casablanca">(GMT+01:00) Casablanca</option>
                                                        <option data-offset="3600" value="West Central Africa">(GMT+01:00) West Central Africa</option>
                                                        <option data-offset="7200" value="Belgrade">(GMT+02:00) Belgrade</option>
                                                        <option data-offset="7200" value="Bratislava">(GMT+02:00) Bratislava</option>
                                                        <option data-offset="7200" value="Budapest">(GMT+02:00) Budapest</option>
                                                        <option data-offset="7200" value="Ljubljana">(GMT+02:00) Ljubljana</option>
                                                        <option data-offset="7200" value="Prague">(GMT+02:00) Prague</option>
                                                        <option data-offset="7200" value="Sarajevo">(GMT+02:00) Sarajevo</option>
                                                        <option data-offset="7200" value="Skopje">(GMT+02:00) Skopje</option>
                                                        <option data-offset="7200" value="Warsaw">(GMT+02:00) Warsaw</option>
                                                        <option data-offset="7200" value="Zagreb">(GMT+02:00) Zagreb</option>
                                                        <option data-offset="7200" value="Brussels">(GMT+02:00) Brussels</option>
                                                        <option data-offset="7200" value="Copenhagen">(GMT+02:00) Copenhagen</option>
                                                        <option data-offset="7200" value="Madrid">(GMT+02:00) Madrid</option>
                                                        <option data-offset="7200" value="Paris">(GMT+02:00) Paris</option>
                                                        <option data-offset="7200" value="Amsterdam">(GMT+02:00) Amsterdam</option>
                                                        <option data-offset="7200" value="Berlin">(GMT+02:00) Berlin</option>
                                                        <option data-offset="7200" value="Bern">(GMT+02:00) Bern</option>
                                                        <option data-offset="7200" value="Rome">(GMT+02:00) Rome</option>
                                                        <option data-offset="7200" value="Stockholm">(GMT+02:00) Stockholm</option>
                                                        <option data-offset="7200" value="Vienna">(GMT+02:00) Vienna</option>
                                                        <option data-offset="7200" value="Cairo">(GMT+02:00) Cairo</option>
                                                        <option data-offset="7200" value="Harare">(GMT+02:00) Harare</option>
                                                        <option data-offset="7200" value="Pretoria">(GMT+02:00) Pretoria</option>
                                                        <option data-offset="10800" value="Bucharest">(GMT+03:00) Bucharest</option>
                                                        <option data-offset="10800" value="Helsinki">(GMT+03:00) Helsinki</option>
                                                        <option data-offset="10800" value="Kiev">(GMT+03:00) Kiev</option>
                                                        <option data-offset="10800" value="Kyiv">(GMT+03:00) Kyiv</option>
                                                        <option data-offset="10800" value="Riga">(GMT+03:00) Riga</option>
                                                        <option data-offset="10800" value="Sofia">(GMT+03:00) Sofia</option>
                                                        <option data-offset="10800" value="Tallinn">(GMT+03:00) Tallinn</option>
                                                        <option data-offset="10800" value="Vilnius">(GMT+03:00) Vilnius</option>
                                                        <option data-offset="10800" value="Athens">(GMT+03:00) Athens</option>
                                                        <option data-offset="10800" value="Istanbul">(GMT+03:00) Istanbul</option>
                                                        <option data-offset="10800" value="Minsk">(GMT+03:00) Minsk</option>
                                                        <option data-offset="10800" value="Jerusalem">(GMT+03:00) Jerusalem</option>
                                                        <option data-offset="10800" value="Moscow">(GMT+03:00) Moscow</option>
                                                        <option data-offset="10800" value="St. Petersburg">(GMT+03:00) St. Petersburg</option>
                                                        <option data-offset="10800" value="Volgograd">(GMT+03:00) Volgograd</option>
                                                        <option data-offset="10800" value="Kuwait">(GMT+03:00) Kuwait</option>
                                                        <option data-offset="10800" value="Riyadh">(GMT+03:00) Riyadh</option>
                                                        <option data-offset="10800" value="Nairobi">(GMT+03:00) Nairobi</option>
                                                        <option data-offset="10800" value="Baghdad">(GMT+03:00) Baghdad</option>
                                                        <option data-offset="14400" value="Abu Dhabi">(GMT+04:00) Abu Dhabi</option>
                                                        <option data-offset="14400" value="Muscat">(GMT+04:00) Muscat</option>
                                                        <option data-offset="14400" value="Baku">(GMT+04:00) Baku</option>
                                                        <option data-offset="14400" value="Tbilisi">(GMT+04:00) Tbilisi</option>
                                                        <option data-offset="14400" value="Yerevan">(GMT+04:00) Yerevan</option>
                                                        <option data-offset="16200" value="Tehran">(GMT+04:30) Tehran</option>
                                                        <option data-offset="16200" value="Kabul">(GMT+04:30) Kabul</option>
                                                        <option data-offset="18000" value="Ekaterinburg">(GMT+05:00) Ekaterinburg</option>
                                                        <option data-offset="18000" value="Islamabad">(GMT+05:00) Islamabad</option>
                                                        <option data-offset="18000" value="Karachi">(GMT+05:00) Karachi</option>
                                                        <option data-offset="18000" value="Tashkent">(GMT+05:00) Tashkent</option>
                                                        <option data-offset="19800" value="Chennai">(GMT+05:30) Chennai</option>
                                                        <option data-offset="19800" value="Kolkata">(GMT+05:30) Kolkata</option>
                                                        <option data-offset="19800" value="Mumbai">(GMT+05:30) Mumbai</option>
                                                        <option data-offset="19800" value="New Delhi">(GMT+05:30) New Delhi</option>
                                                        <option data-offset="19800" value="Sri Jayawardenepura">(GMT+05:30) Sri Jayawardenepura</option>
                                                        <option data-offset="20700" value="Kathmandu">(GMT+05:45) Kathmandu</option>
                                                        <option data-offset="21600" value="Astana">(GMT+06:00) Astana</option>
                                                        <option data-offset="21600" value="Dhaka">(GMT+06:00) Dhaka</option>
                                                        <option data-offset="21600" value="Almaty">(GMT+06:00) Almaty</option>
                                                        <option data-offset="21600" value="Urumqi">(GMT+06:00) Urumqi</option>
                                                        <option data-offset="23400" value="Rangoon">(GMT+06:30) Rangoon</option>
                                                        <option data-offset="25200" value="Novosibirsk">(GMT+07:00) Novosibirsk</option>
                                                        <option data-offset="25200" value="Bangkok">(GMT+07:00) Bangkok</option>
                                                        <option data-offset="25200" value="Hanoi">(GMT+07:00) Hanoi</option>
                                                        <option data-offset="25200" value="Jakarta">(GMT+07:00) Jakarta</option>
                                                        <option data-offset="25200" value="Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
                                                        <option data-offset="28800" value="Beijing">(GMT+08:00) Beijing</option>
                                                        <option data-offset="28800" value="Chongqing">(GMT+08:00) Chongqing</option>
                                                        <option data-offset="28800" value="Hong Kong">(GMT+08:00) Hong Kong</option>
                                                        <option data-offset="28800" value="Kuala Lumpur">(GMT+08:00) Kuala Lumpur</option>
                                                        <option data-offset="28800" value="Singapore">(GMT+08:00) Singapore</option>
                                                        <option data-offset="28800" value="Taipei">(GMT+08:00) Taipei</option>
                                                        <option data-offset="28800" value="Perth">(GMT+08:00) Perth</option>
                                                        <option data-offset="28800" value="Irkutsk">(GMT+08:00) Irkutsk</option>
                                                        <option data-offset="28800" value="Ulaan Bataar">(GMT+08:00) Ulaan Bataar</option>
                                                        <option data-offset="32400" value="Seoul">(GMT+09:00) Seoul</option>
                                                        <option data-offset="32400" value="Osaka">(GMT+09:00) Osaka</option>
                                                        <option data-offset="32400" value="Sapporo">(GMT+09:00) Sapporo</option>
                                                        <option data-offset="32400" value="Tokyo">(GMT+09:00) Tokyo</option>
                                                        <option data-offset="32400" value="Yakutsk">(GMT+09:00) Yakutsk</option>
                                                        <option data-offset="34200" value="Darwin">(GMT+09:30) Darwin</option>
                                                        <option data-offset="34200" value="Adelaide">(GMT+09:30) Adelaide</option>
                                                        <option data-offset="36000" value="Canberra">(GMT+10:00) Canberra</option>
                                                        <option data-offset="36000" value="Melbourne">(GMT+10:00) Melbourne</option>
                                                        <option data-offset="36000" value="Sydney">(GMT+10:00) Sydney</option>
                                                        <option data-offset="36000" value="Brisbane">(GMT+10:00) Brisbane</option>
                                                        <option data-offset="36000" value="Hobart">(GMT+10:00) Hobart</option>
                                                        <option data-offset="36000" value="Vladivostok">(GMT+10:00) Vladivostok</option>
                                                        <option data-offset="36000" value="Guam">(GMT+10:00) Guam</option>
                                                        <option data-offset="36000" value="Port Moresby">(GMT+10:00) Port Moresby</option>
                                                        <option data-offset="36000" value="Solomon Is.">(GMT+10:00) Solomon Is.</option>
                                                        <option data-offset="39600" value="Magadan">(GMT+11:00) Magadan</option>
                                                        <option data-offset="39600" value="New Caledonia">(GMT+11:00) New Caledonia</option>
                                                        <option data-offset="43200" value="Fiji">(GMT+12:00) Fiji</option>
                                                        <option data-offset="43200" value="Kamchatka">(GMT+12:00) Kamchatka</option>
                                                        <option data-offset="43200" value="Marshall Is.">(GMT+12:00) Marshall Is.</option>
                                                        <option data-offset="43200" value="Auckland">(GMT+12:00) Auckland</option>
                                                        <option data-offset="43200" value="Wellington">(GMT+12:00) Wellington</option>
                                                        <option data-offset="46800" value="Nuku'alofa">(GMT+13:00) Nuku'alofa</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row align-items-center">
                                                <label class="col-form-label col-3 text-lg-right text-left">Communication</label>
                                                <div class="col-9">
                                                    <div class="checkbox-inline">
                                                        <label class="checkbox">
                                                        <input type="checkbox" checked="checked" />
                                                        <span></span>Email</label>
                                                        <label class="checkbox">
                                                        <input type="checkbox" checked="checked" />
                                                        <span></span>SMS</label>
                                                        <label class="checkbox">
                                                        <input type="checkbox" />
                                                        <span></span>Phone</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                        </div>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <div class="separator separator-dashed my-10"></div>
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-7">
                                        <!--begin::Row-->
                                        <div class="row">
                                            <label class="col-form-label col-3 text-lg-right text-left"></label>
                                            <div class="col-9">
                                                <h6 class="text-dark font-weight-bold mb-10">Security:</h6>
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Login verification</label>
                                            <div class="col-9">
                                                <button type="button" class="btn btn-light-primary font-weight-bold btn-sm">Setup login verification</button>
                                                <div class="form-text text-muted mt-3">After you log in, you will be asked for additional information to confirm your identity and protect your account from being compromised.
                                                <a href="#">Learn more</a>.</div>
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Password reset verification</label>
                                            <div class="col-9">
                                                <div class="checkbox-inline">
                                                    <label class="checkbox mb-2">
                                                    <input type="checkbox" />
                                                    <span></span>Require personal information to reset your password.</label>
                                                </div>
                                                <div class="form-text text-muted">For extra security, this requires you to confirm your email or phone number when you reset your password.
                                                <a href="#" class="font-weight-bold">Learn more</a>.</div>
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                        <!--begin::Group-->
                                        <div class="form-group row mt-10">
                                            <label class="col-3"></label>
                                            <div class="col-9">
                                                <button type="button" class="btn btn-light-danger font-weight-bold btn-sm">Deactivate your account ?</button>
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                    </div>
                                    <div class="col-xl-2"></div>
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Tab-->
                            <!--begin::Tab-->
                            <div class="tab-pane px-7" id="kt_user_edit_tab_3" role="tabpanel">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <div class="col-xl-2"></div>
                                        <div class="col-xl-7">
                                            <!--begin::Row-->
                                            <div class="row mb-5">
                                                <label class="col-3"></label>
                                                <div class="col-9">
                                                    <div class="alert alert-custom alert-light-danger fade show py-4" role="alert">
                                                        <div class="alert-icon">
                                                            <i class="flaticon-warning"></i>
                                                        </div>
                                                        <div class="alert-text font-weight-bold">Configure user passwords to expire periodically.
                                                        <br />Users will need warning that their passwords are going to expire, or they might inadvertently get locked out of the system!</div>
                                                        <div class="alert-close">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <span aria-hidden="true">
                                                                    <i class="la la-close"></i>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Row-->
                                            <div class="row">
                                                <label class="col-3"></label>
                                                <div class="col-9">
                                                    <h6 class="text-dark font-weight-bold mb-10">Change Or Recover Your Password:</h6>
                                                </div>
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left">Current Password</label>
                                                <div class="col-9">
                                                    <input class="form-control form-control-lg form-control-solid mb-1" type="text" value="Current password" />
                                                    <a href="#" class="font-weight-bold font-size-sm">Forgot password ?</a>
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left">New Password</label>
                                                <div class="col-9">
                                                    <input class="form-control form-control-lg form-control-solid" type="text" value="New password" />
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left">Verify Password</label>
                                                <div class="col-9">
                                                    <input class="form-control form-control-lg form-control-solid" type="text" value="Verify password" />
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Body-->
                                <!--begin::Footer-->
                                <div class="card-footer pb-0">
                                    <div class="row">
                                        <div class="col-xl-2"></div>
                                        <div class="col-xl-7">
                                            <div class="row">
                                                <div class="col-3"></div>
                                                <div class="col-9">
                                                    <a href="#" class="btn btn-light-primary font-weight-bold">Save changes</a>
                                                    <a href="#" class="btn btn-clean font-weight-bold">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Footer-->
                            </div>
                            <!--end::Tab-->
                            <!--begin::Tab-->
                            <div class="tab-pane px-7" id="kt_user_edit_tab_4" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-8">
                                        <div class="my-2">
                                            <div class="row">
                                                <label class="col-form-label col-3 text-lg-right text-left"></label>
                                                <div class="col-9">
                                                    <h6 class="text-dark font-weight-bold mb-7">Setup Email Notification:</h6>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-2">
                                                <label class="col-form-label col-3 text-lg-right text-left">Email Notification</label>
                                                <div class="col-3">
                                                    <span class="switch">
                                                        <label>
                                                            <input type="checkbox" checked="checked" name="select" />
                                                            <span></span>
                                                        </label>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left">Send Copy To Personal Email</label>
                                                <div class="col-3">
                                                    <span class="switch">
                                                        <label>
                                                            <input type="checkbox" name="select" />
                                                            <span></span>
                                                        </label>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-form-label col-3 text-lg-right text-left"></label>
                                            <div class="col-9">
                                                <h6 class="text-dark font-weight-bold mb-7">Activity Related Emails:</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="separator separator-dashed mb-10"></div>
                                <div class="row">
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-8">
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">When To Email</label>
                                            <div class="col-9">
                                                <div class="checkbox-inline mb-2">
                                                    <label class="checkbox">
                                                    <input type="checkbox" />
                                                    <span></span>You have new notifications.</label>
                                                </div>
                                                <div class="checkbox-inline mb-2">
                                                    <label class="checkbox">
                                                    <input type="checkbox" />
                                                    <span></span>You're sent a direct message</label>
                                                </div>
                                                <div class="checkbox-inline mb-2">
                                                    <label class="checkbox">
                                                    <input type="checkbox" checked="checked" />
                                                    <span></span>Someone adds you as a connection</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">When To Escalate Emails</label>
                                            <div class="col-9">
                                                <div class="checkbox-inline mb-2">
                                                    <label class="checkbox checkbox-success">
                                                    <input type="checkbox" />
                                                    <span></span>Upon new order</label>
                                                </div>
                                                <div class="checkbox-inline mb-2">
                                                    <label class="checkbox checkbox-success">
                                                    <input type="checkbox" />
                                                    <span></span>New membership approval</label>
                                                </div>
                                                <div class="checkbox-inline mb-2">
                                                    <label class="checkbox checkbox-success">
                                                    <input type="checkbox" />
                                                    <span></span>Member registration</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="separator separator-dashed mb-10"></div>
                                <div class="row">
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-8">
                                        <div class="row">
                                            <label class="col-form-label col-3 text-lg-right text-left"></label>
                                            <div class="col-9">
                                                <h6 class="text-dark font-weight-bold mb-7">Updates From Keenthemes:</h6>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">Email You With</label>
                                            <div class="col-9">
                                                <div class="checkbox-inline mb-2">
                                                    <label class="checkbox checkbox-success">
                                                    <input type="checkbox" />
                                                    <span></span>News about Metronic product and feature updates</label>
                                                </div>
                                                <div class="checkbox-inline mb-2">
                                                    <label class="checkbox checkbox-success">
                                                    <input type="checkbox" />
                                                    <span></span>Tips on getting more out of Keen</label>
                                                </div>
                                                <div class="checkbox-inline mb-2">
                                                    <label class="checkbox checkbox-success">
                                                    <input type="checkbox" checked="checked" />
                                                    <span></span>Things you missed since you last logged into Keen</label>
                                                </div>
                                                <div class="checkbox-inline mb-2">
                                                    <label class="checkbox checkbox-success">
                                                    <input type="checkbox" checked="checked" />
                                                    <span></span>News about Metronic on partner products and other services</label>
                                                </div>
                                                <div class="checkbox-inline mb-2">
                                                    <label class="checkbox checkbox-success">
                                                    <input type="checkbox" checked="checked" />
                                                    <span></span>Tips on Metronic business products</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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