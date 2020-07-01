@extends('layouts.master_site2')
@section('title') Iniciar sesión @endsection

@section('content')

    <!-- begin:: Page -->
    <div class="kt-grid kt-grid--ver kt-grid--root kt-page" ng-controller="landingFormsController"> 
        <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v5 kt-login--signin" id="kt_login">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile" style="background-image: url(/app/assets/media/bg/bg-3.jpg);">
                <div class="kt-login__left">
                    <div class="kt-login__wrapper">
                        <div class="kt-login__content">
                            <a class="kt-login__logo" href="/">
                                <img src="/images/connekty.png" style="height:60px">
                            </a>
                            <h3 class="kt-login__title">UNETE A NUESTRA COMUNIDAD</h3>
                            <span class="kt-login__desc">
                                El portal de negocios B2B mas confiable 
                            </span>
                            <div class="kt-login__actions">
                                <a href="/sign_up" class="btn btn-outline-brand btn-pill">Unirte</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-login__divider">
                    <div></div>
                </div>
                <div class="kt-login__right">
                    <div class="kt-login__wrapper">
                        <div class="kt-login__signin">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title">Iniciar sesión</h3>
                            </div>
                            <div class="kt-login__form">
                                <span class="alert alert-danger alert-dismissible" ng-if="!loading && success===false"> @{{ error }} --</span>
                                <form class="kt-form" ng-submit="login()" name="formLogin">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Email" name="email" ng-model="formData.email">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control form-control-last" type="Password" placeholder="Contraseña" name="password"  ng-model="formData.password">
                                    </div>
                                    <div class="row kt-login__extra">
                                        <div class="col kt-align-left">
                                            <label class="kt-checkbox">
                                                <input type="checkbox" name="remember" ng-model="formData.remember"> Recordarme
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="col kt-align-right">
                                            <a href="/forgot_password" id="kt_login_forgot" class="kt-link">¿Olvidaste tu contraseña?</a>
                                        </div>
                                    </div>
                                    <div class="kt-login__actions">
                                        <button type="submit" id="kt_login_signin_submit"  ng-class="{'kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light': loading}" class="btn btn-brand btn-pill btn-elevate">Entrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        </div>
                        <div class="kt-login__forgot">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title">¿Olvidaste tu contraseña ?</h3>
                                <div class="kt-login__desc">Introduce tu correo electrónico para resetar tu contraseña:</div>
                            </div>
                            <div class="kt-login__form">
                                <form class="kt-form" action="">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off">
                                    </div>
                                    <div class="kt-login__actions">
                                        <button id="kt_login_forgot_submit" class="btn btn-brand btn-pill btn-elevate">Enviar</button>
                                        <button id="kt_login_forgot_cancel" class="btn btn-outline-brand btn-pill">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end:: Page -->
@endsection