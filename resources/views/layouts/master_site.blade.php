<!DOCTYPE html>
<html lang="en" ng-app="app">
    <head>
        <!-- Required Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title> @yield('title') | {{ env('APP_NAME')}}  </title>
        <link rel="icon" type="image/png" href="landing/assets/images/favicon.png" />

        <!--Core CSS -->
        <link rel="stylesheet" href="landing/assets/css/bulma.css">
        <link rel="stylesheet" href="landing/assets/css/app.css">
        <link rel="stylesheet" href="landing/assets/css/core_deep-blue.css">

        <!--ANGULAR-->
        <script src="/landing/assets/js/angular/angular.min.js"></script>
        <script src="/landing/assets/js/angular/app.js"></script>
        <script src="/landing/assets/js/angular/controllers.js?v={{strtotime(\Carbon\Carbon::now())}}"></script>
        <script src="/landing/assets/js/angular/services.js?v={{strtotime(\Carbon\Carbon::now())}}"></script>

    </head>
    <body>
        <div class="pageloader"></div>
        <div class="infraloader is-active"></div>        
        @yield('content')
        
        <script src="landing/assets/js/app.js"></script>
        
        <!-- Bulkit js -->
        <script src="landing/assets/js/landingv2.js"></script>
        <script src="landing/assets/js/auth.js"></script>
        <script src="landing/assets/js/main.js"></script>    
    </body>  
</html>
