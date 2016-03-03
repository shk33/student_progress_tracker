<html lang="en" class=" overthrow-enabled"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Progreso Estudiantil</title>
    @include('commons.meta')
    
    <!-- Bootstrap Core -->
    {{ HTML::style('css/bootstrap.min.css') }}

    <!-- Font Awesome -->
    {{ HTML::style('/fonts/font-awesome/css/font-awesome.min.css') }}

    <!-- Admin Core -->
    {{ HTML::style('css/nifty.min.css') }}

    <!-- Roboto Font -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300,500" rel="stylesheet" type="text/css">
    
    <!-- Link to theme -->
    {{ HTML::style('css/themes/themes-navbar/theme-ocean.min.css') }}

    <!-- Application css -->
    {{ HTML::style('/css/app.css') }}
    
    <!--Page load progress bar -->
    {{ HTML::script('js/pace.min.js') }}

    <style type="text/css">
        .jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background-color: #212633;border-radius: 2px;color: white;text-align: right;white-space: nowrap;padding: 7px 14px;z-index: 10000;}.jqsfield { color: white;font-size: 14;text-align: right;}
    </style>

<body class=" nifty-ready pace-done">
    <!-- Page Loader -->
    @include('layouts.loader')    
    <div id="container" class="effect mainnav-lg navbar-fixed">
        <!-- Navbar -->
        @include('layouts.navbar')
        <!-- CONTENT -->
        <!--===================================================-->
        <div class="boxed">
            <!-- CONTENT CONTAINER -->
            <!--===================================================-->
            <div id="content-container">
                <!-- Alerts -->
                @include('layouts.alert')
                <!-- Main Content -->
                @yield('content');
                
            </div>
            <!--===================================================-->
            <!-- END OF CONTENT CONTAINER -->

            <!--SIDEBAR-->
            @if (Auth::user()->isTeacher())
                @include('layouts.sidebar')
            @else
                @include('layouts.student_sidebar')
            @endif
            <!--===================================================-->

        </div>
        <!--===================================================-->
        <!--END OF CONTENT -->

        @include('layouts.footer')
    
    </div>
<!--===================================================-->
<!-- END OF CONTAINER -->

<!-- jQuery Version 2.1.1 -->
{{ HTML::script('js/jquery.min.js') }}

<!-- Bootstrap Core JavaScript -->
{{ HTML::script('js/bootstrap.min.js') }}

<!-- Admin Core -->
{{ HTML::script('js/nifty.min.js') }}

</body></html>