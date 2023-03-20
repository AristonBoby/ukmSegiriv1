<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="{{ asset('adminlte/dist/css/adminLTE.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('adminlte/dist/css/skins/_all-skins.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('adminlte/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('adminlte/bower_components/Ionicons/css/ionicons.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />



        <!-- Scripts -->
        <script src="{{ asset('adminlte/bower_components/PACE/pace.min.js')}}" /></script>
        <script src="{{ asset('adminlte/bower_components/jquery/dist/jquery.min.js')}}" /></script>
        <script src="{{ asset('adminlte/bower_components/fastclick/lib/fastclick.js')}}" /></script>
        <script src="{{ asset('adminlte/dist/js/adminlte.min.js')}}" /></script>
        <script src="{{ asset('adminlte/dist/js/demo.js')}}" /></script>
        <script src="{{ asset('adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}" /></script>
        <!-- Styles -->
        @livewireStyles
    </head>

    <body class="skin-blue sidebar-mini  pace-done" style="height: auto; min-height: 100%;"><div class="pace  pace-inactive"><div class="pace-progress" style="transform: translate3d(100%, 0px, 0px);" data-progress-text="100%" data-progress="99">

    </body>
</html>
