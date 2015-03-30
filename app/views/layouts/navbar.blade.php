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
          <span class="brand-text">Pizarra Virtual</span>
        </span>
      </a>
    </div>
    <!--===================================================-->
    <!-- END OF BRAND LOGO & TEXT -->


    <!-- NAVBAR DROPDOWN -->
    <!--===================================================-->
    <div class="navbar-content clearfix">
      <ul class="nav navbar-top-links pull-left">

        <!-- MEGA MENU  -->
        <!--===================================================-->
        <li class="dropdown mega-dropdown">

          <!-- Megamenu button -->
          <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-th-large fa-lg"></i>
          </a>
          <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->



          <!-- Megamenu Dropdown menu -->
          <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
          <div class="dropdown-menu mega-dropdown-menu">
            <div class="clearfix">

              <div class="col-sm-12 col-md-3">
                <div class="text-center bg-purple pad-all">
                  <h3 class="text-thin mar-no">Weekend shopping</h3>
                  <span class="pad-ver box-inline">
                    <span class="icon-wrap icon-wrap-lg icon-circle bg-trans-light">
                      <i class="fa fa-shopping-cart fa-4x"></i>
                    </span>
                  </span>

                  <p class="pad-btm">Members get <span class="text-lg text-bold">50%</span> more points. Lorem ipsum dolor sit amet!</p>

                  <a href="#" class="btn btn-purple">Learn More...</a>
                </div>
              </div>


              <div class="col-sm-4 col-md-3">
                <ul class="list-unstyled">
                  <li class="dropdown-header">Pages</li>
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Search Result</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Screen Lock</a></li>
                  <li><a href="#" class="disabled-link">Disabled</a></li>



                  <li class="divider"></li>
                  <li class="dropdown-header">Icons</li>

                  <li><a href="#"><span class="pull-right badge badge-purple">479</span> Font Awesome</a></li>
                  <li><a href="#">Skycons</a></li>
                </ul>
              </div>

              <div class="col-sm-4 col-md-3">
                <ul class="list-unstyled">
                  <li class="dropdown-header">Mailbox</li>
                  <li><a href="#"><span class="pull-right label label-danger">Hot</span>Indox</a></li>
                  <li><a href="#">Read Mail</a></li>
                  <li><a href="#">Sent Mail</a></li>



                  <li class="divider"></li>
                  <li class="dropdown-header">Feature</li>

                  <li><a href="#">Smart navigation</a></li>
                  <li><a href="#"><span class="pull-right badge badge-success">6</span>Exclusive plugins</a></li>
                  <li><a href="#">Lot of themes</a></li>
                  <li><a href="#">Transition effects</a></li>
                </ul>
              </div>

              <div class="col-sm-4 col-md-3">
                <ul class="list-unstyled">
                  <li class="dropdown-header">Components</li>
                  <li><a href="#">Table</a></li>
                  <li><a href="#">Charts</a></li>
                  <li><a href="#">Forms</a></li>



                  <li class="divider"></li>
                  <li class="dropdown-header">Newsletter</li>


                  <form role="form" class="form">
                    <div class="form-group">
                      <input type="email" placeholder="Enter email" id="email" class="form-control">
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
                  </form>
                </ul>
              </div>
            </div>
          </div>
          <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        </li>
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
          <div class="username hidden-xs">Cambiar</div>
          </a>
          <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->


          <!-- Dropdown menu -->
          <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
          <div class="dropdown-menu dropdown-menu-md dropdown-menu-right with-arrow panel-default">

            <ul class="head-list">

              <!-- Dropdown list -->
              <li>
                <a href="#">
                  <i class="fa fa-user fa-fw fa-lg"></i>
                  <span class="text-nowrap">Perfil</span>
                </a>
              </li>


              <!-- Dropdown list -->
              <li>
                <a href="#">
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