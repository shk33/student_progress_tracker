@extends('layouts.application')

@section('content')


<!-- Maint Content -->
<div id="page-content">
  
  <div class="row">

    <div class="col-md-12 col-lg-12">

      <div class="panel text-center">

        <div class="panel-body bg-primary">
          {{ HTML::image("images/av1.png", "Avatar",  $attributes = array('class' => 'img-lg img-circle img-border')) }}

          <h4 class="text-thin">{{{"$user->first_name $user->last_name"}}}</h4>
          <p class="text-bold">
          </p>
        </div>

        <div class="pad-all">
          
          <ul class="list-unstyled row text-center">
            <li class="col-xs-4">
              <span id="demo-gauge-text" class="text-2x">
                {{{$user->email}}}
              </span>
              <p class="text-uppercase">
                <small>
                <i class="fa fa-envelop"></i>
                  Email
                </small>
              </p>
            </li>

            <li class="col-xs-4">
              <span class="text-2x">
                {{{$user->username}}}
              </span>
              <p class="text-uppercase">
                <small>Username</small>
              </p>
            </li>

            <li class="col-xs-4">
              <span class="text-2x">
                {{{$user->created_at}}}
              </span>
              <p class="text-uppercase">
                <small>Fecha de registro</small>
              </p>
            </li>

          </ul>

          <div class="pad-ver">
            <button class="btn btn-primary">
              Lorem
            </button>
          </div>

        </div>

      </div>

    </div>

  </div>

</div>


@stop