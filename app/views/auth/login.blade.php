@extends('layouts.login-layout')

@section('content')
<div class="cls-content">
  <div class="cls-content-sm panel">
    <div class="panel-body">
      <p class="pad-btm">Ingresa con tu cuenta</p>

      @include('commons.messages')

      {{ Form::open(array('route' => 'auth')) }}
        <div class="form-group">
          <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
            <div class="input-group-addon"><i class="fa fa-user"></i></div>
            {{ Form::text('username', null, array('class' => 'form-control', 'placeholder' => 'Usuario', 'autofocus')) }}
          </div>
        </div>
        <div class="form-group">
          <div class="form-group {{ ($errors->has('password')) ? 'has-error' : '' }}">
            <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
            {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Contraseña'))}}
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