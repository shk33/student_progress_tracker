<div class="panel-body">

    <!-- First Name -->
    <div class="form-group ">
      {{Form::label('first_name', 'Nombres *', array('class' => "control-label"))}}
      {{Form::text('first_name',null, array('class' => 'form-control', 'placeholder' => 'Nombres') )}}
      <span class="text-danger">{{$errors->first('first_name')}}</span>
    </div>

    <!-- Last Name -->
    <div class="form-group">
      {{Form::label('last_name', 'Apellidos *', array('class' => "control-label"))}}
      {{Form::text('last_name',null, array('class' => 'form-control', 'placeholder' => 'Apellidos') )}}
      <span class="text-danger">{{$errors->first('last_name')}} </span>
    </div>

    <!-- Username -->
    <div class="form-group">
      {{Form::label('username', 'Username *(Usado para ingresar al sistema)', array('class' => "control-label"))}}
      {{Form::text('username',null, array('class' => 'form-control', 'placeholder' => 'Username') )}}
      <span class="text-danger">{{$errors->first('username')}} </span>
    </div>

    <!-- Email -->
    <div class="form-group">
      {{Form::label('email', 'Email', array('class' => "control-label"))}}
      {{Form::email('email',null, array('class' => 'form-control', 'placeholder' => 'Email') )}}
      <span class="text-danger">{{$errors->first('email')}} </span>
    </div>

    <!-- Enrollment Number-->
    <div class="form-group">
      {{Form::label('enrollment_number', 'Matrícula',array('class' => "control-label"))}}
      {{Form::text('enrollment_number', null,array('class' => 'form-control', 'placeholder' => 'Matrícula') )}}
      <span class="text-danger">{{$errors->first('Matrícula')}} </span>
    </div>

    <!-- Password -->
    <div class="form-group">
      {{Form::label('password', 'Contraseña *',array('class' => "control-label"))}}
      {{Form::password('password', array('class' => 'form-control', 'placeholder' => 'Contraseña') )}}
      <span class="text-danger">{{$errors->first('password')}} </span>
    </div>

    <!-- Password Confirmation-->
    <div class="form-group">
      {{Form::label('password', 'Confirmar Contraseña *',array('class' => "control-label"))}}
      {{Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Contraseña') )}}
      <span class="text-danger">{{$errors->first('password_confirmation')}} </span>
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