@extends('layouts.master_site2')
@section('title') Registro @endsection

@section('content')

	<!-- begin:: Page -->
	<div class="kt-grid kt-grid--ver kt-grid--root kt-page" ng-controller="landingFormsController">
		<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v5 kt-login--signin" id="kt_login">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile" style="background-image: url(/app/assets/media/bg/bg-3.jpg);">
				<div class="kt-login__left">
					<div class="kt-login__wrapper">
						<div class="kt-login__content">
							<a class="kt-login__logo" href="/">
								<img src="images/connekty.png" style="height:60px">
							</a>
							<h3 class="kt-login__title">UNETE A NUESTRA COMUNIDAD</h3>
							<span class="kt-login__desc">
								El portal de negocios B2B mas confiable 
							</span>
							<div class="kt-login__actions">
								<a href="/login" class="btn btn-outline-brand btn-pill">Iniciar sesión</a>
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
								<h3 class="kt-login__title">Regístrate</h3>
								<div class="kt-login__desc">Introduce tus datos para crear tu cuenta:</div>
							</div>
							<div class="kt-login__form">
								<form class="kt-form" ng-submit="register()" name="registroForm" >
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Nombre" name="fullname" ng-model="formData.first_name">
									</div>
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Correo electrónico" name="email" ng-model="formData.email">
									</div>
									<div class="form-group">
										<input class="form-control" type="password" placeholder="Contraseña" name="password" ng-model="formData.password">
									</div>
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Nombre de la empresa" ng-model="formData.company">
									</div>
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Teléfono" ng-model="formData.phone">
									</div>
									<div class="form-group">
										<select class="form-control" ng-model="formData.type" ng-init="formData.type='Buyer' ">
											<option value="Buyer" ng-selected=true>Soy Comprador directo</option>
											<option value="Intermediary">Soy Intermediario</option>
										</select>
									</div>
									<div class="row kt-login__extra">
										<div class="col kt-align-left">
											<label class="kt-checkbox">
												<input type="checkbox" name="agree" required>Acepto <a href="#" class="kt-link kt-login__link kt-font-bold">los términos y condiciones</a>.
												<span></span>
											</label>
											<span class="form-text text-muted"></span>
										</div>
									</div>
									<div class="kt-login__actions">
										<button id="kt_login_signup_submit" class="btn btn-brand btn-pill btn-elevate" ng-class="{'kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light': loading}" ng-disabled="loading">Regístrarme</button>&nbsp;&nbsp;
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