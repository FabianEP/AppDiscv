<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'Laravel') }}</title>
    
        <script src="https://use.fontawesome.com/9712be8772.js"></script>
    
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    
        <!-- Styles -->
    <!--
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
        <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">

        @yield('styles')

        <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('css/template-style.css') }}" rel="stylesheet">
    </head>
    <body class="@yield('body_class')">

        @yield('maincontent')

        <!-- Mainly scripts -->
        <script src="{{ asset('js/jquery-2.1.1.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        @yield('jsscript')
    </body>
</html>