@extends('layouts.login-layout')

@section('content')
<div class="cls-content">
  <div class="cls-content-sm panel">
    <div class="panel-body">
      <p class="pad-btm">Ingresa con tu cuenta</p>

      @include('Sentinel::layouts/notifications')
      
      {{ Form::open(array('action' => 'Sentinel\SessionController@store')) }}
        <div class="form-group">
          <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
            <div class="input-group-addon"><i class="fa fa-user"></i></div>
            {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email o Username', 'autofocus')) }}
            {{ ($errors->has('email') ? $errors->first('email') : '') }}
            {{-- <input type="text" class="form-control" placeholder="Username"> --}}
          </div>
        </div>
        <div class="form-group">
          <div class="form-group {{ ($errors->has('password')) ? 'has-error' : '' }}">
            <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
            {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Contraseña'))}}
            {{ ($errors->has('password') ?  $errors->first('password') : '') }}
            {{-- <input type="password" class="form-control" placeholder="Password"> --}}
          </div>
        </div>
        <div class="row">
          <div class="col-xs-8 text-left checkbox">
            <label class="form-checkbox form-icon">
              {{ Form::checkbox('rememberMe', 'rememberMe') }}
              No cerrar sesión.
              {{-- <input type="checkbox"> No cerrar sesión --}}
            </label>
          </div>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">
          <i class="fa fa-unlock fa-fw"></i> Ingresar al sistema
        </button>
      {{ Form::close() }}

    </div>
  </div>
</div>

@stop