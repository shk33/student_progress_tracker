
@if ($edit) <!-- For edit a user -->
{{ Form::model($user,array('route' => array($update_route, $user->id), 'method' => 'PUT' )) }}
@else <!-- For create a new user -->

{{ Form::open(array('action' => array($store_route), 'method' => 'POST' )) }}

@endif

<div class="panel-body">

    <!-- First Name -->
    <div class="form-group ">
      {{Form::label('first_name', 'Nombres', array('class' => "control-label"))}}
      {{Form::text('first_name',null, array('class' => 'form-control', 'placeholder' => 'Nombres') )}}
      {{$errors->first('first_name')}}
    </div>

    <!-- Last Name -->
    <div class="form-group">
      {{Form::label('last_name', 'Apellidos', array('class' => "control-label"))}}
      {{Form::text('last_name',null, array('class' => 'form-control', 'placeholder' => 'Apellidos') )}}
      {{$errors->first('last_name')}}
    </div>

    <!-- Username -->
    <div class="form-group">
      {{Form::label('username', 'Username (Usado para ingresar al sistema)', array('class' => "control-label"))}}
      {{Form::text('username',null, array('class' => 'form-control', 'placeholder' => 'Username') )}}
      {{$errors->first('username')}}
    </div>

    <!-- Email -->
    <div class="form-group">
      {{Form::label('email', 'Email', array('class' => "control-label"))}}
      {{Form::email('email',null, array('class' => 'form-control', 'placeholder' => 'Email') )}}
      {{$errors->first('email')}}
    </div>

    <!-- Password -->
    <div class="form-group">
      {{Form::label('password', 'Contraseña',array('class' => "control-label"))}}
      {{Form::password('password', array('class' => 'form-control', 'placeholder' => 'Contraseña') )}}
      {{$errors->first('password')}}
    </div>

    <!-- Password Confirmation-->
    <div class="form-group">
      {{Form::label('password_confirmation', 'Confirmar Contraseña',array('class' => "control-label"))}}
      {{Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirmar Contraseña') )}}
      {{$errors->first('password_confirmation')}}
    </div>
</div>
    

<div class="panel-footer">
  <div class="row">
    <div class="col-sm-3 col-sm-offset-9">
    {{Form::button('Guardar',array('class' => 'btn btn-lg btn-info btn-labeled fa fa-save fa-lg', 'type' => 'submit'))}}
    {{Form::button('Limpiar',array('class' => 'btn btn-lg btn-warning btn-labeled fa fa-repeat fa-lg', 'type' => 'reset'))}}
    </div>
  </div>
</div>
    
{{ Form::close() }}