<html lang="en" class=" overthrow-enabled"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Progreso Estudiantil</title>

    <!-- Bootstrap Core -->
    {{ HTML::style('css/bootstrap.min.css') }}

    <!-- Font Awesome -->
    {{ HTML::style('/fonts/font-awesome/css/font-awesome.min.css') }}

    <!-- Admin Core -->
    {{ HTML::style('css/nifty.min.css') }}

    <!-- Roboto Font -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300,500" rel="stylesheet" type="text/css">

<body>

  <div id="container" class="cls-container">

    <!-- BACKGROUND IMAGE -->
    <!--===================================================-->
    <div id="bg-overlay" class="bg-img" style="background-image: url(images/bg-img/bg-img-7.jpg);"></div>
    <!-- HEADER -->
    <!--===================================================-->
    <div class="cls-header cls-header-lg">
      <div class="cls-brand">
        <a class="box-inline" href="index.html">
          <span class="brand-title">Sistema de <span class="text-thin">Progreso Estudiantil</span></span>
        </a>
      </div>
    </div>
    <!--===================================================-->
    @yield('content');
    <!--===================================================-->

  </div>
  <!--===================================================-->
  <!-- END OF CONTAINER -->

<!-- jQuery Version 2.1.1 -->
{{ HTML::script('js/jquery.min.js') }}

<!-- Bootstrap Core JavaScript -->
{{ HTML::script('js/bootstrap.min.js') }}

<!-- Admin Core -->
{{ HTML::script('js/nifty.min.js') }}

</body>
</html>

