<!-- NAVBAR -->
<!--===================================================-->
<header id="navbar">
  <div id="navbar-container" class="boxed">


    <!-- BRAND LOGO & TEXT -->
    <!--===================================================-->
    <div class="navbar-header">
      <a href="index.html" class="navbar-brand">
        {{ HTML::image("images/logo.png", "Nifty Admin",  $attributes = array('class' => 'brand-icon')) }}
        <span class="brand-title">
          <span class="brand-text">Sistema</span>
        </span>
      </a>
    </div>
    <!--===================================================-->
    <!-- END OF BRAND LOGO & TEXT -->


    <!-- NAVBAR DROPDOWN -->
    <!--===================================================-->
    <div class="navbar-content clearfix">
      <ul class="nav navbar-top-links pull-left">
      </ul>


      <ul class="nav navbar-top-links pull-right">


        <!-- USER DROPDOWN -->
        <!--===================================================-->
        <li id="dropdown-user" class="dropdown">



          <!-- Dropdown button -->
          <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
          <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
            <span class="pull-right">
            {{ HTML::image("images/av1.png", "Profile Picture",  $attributes = array('class' => 'img-circle img-user media-object')) }}
            </span>
          <div class="username hidden-xs">{{ Auth::user()->first_name}}</div>
          </a>
          <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->


          <!-- Dropdown menu -->
          <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
          <div class="dropdown-menu dropdown-menu-md dropdown-menu-right with-arrow panel-default">

            <ul class="head-list">

              <!-- Dropdown list -->
              <li>
                <a href="{{ URL::route('logout') }}">
                  <i class="fa fa-sign-out fa-fw fa-lg"></i>
                  <span>Salir</span>
                </a>
              </li>
            </ul>

          <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        </li>
        <!-- END OF USER DROPDOWN -->
        <!--===================================================-->

      </ul>
    </div>
    <!--===================================================-->
    <!-- END OF NAVBAR DROPDOWN -->

  </div>
</header>
<!--===================================================-->
<!-- END OF NAVBAR -->