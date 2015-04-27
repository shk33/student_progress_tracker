<div class="panel-body">

    @include('layouts/form-errors')

    <!-- Name -->
    @if ($errors->has('name')) 
      <div class="form-group has-error">
    @else
      <div class="form-group">
    @endif
      {{Form::label('name', 'Nombre del Grupo', array('class' => "control-label"))}}
      {{Form::text('name',null, array('class' => 'form-control', 'placeholder' => 'Nombre del Grupo') )}}
      @if ($errors->has('name')) 
        <small class="help-block">
          {{ $errors->first('name') }}
        </small>
      @endif
    </div>

    <!-- Description -->
    @if ($errors->has('description')) 
      <div class="form-group has-error">
    @else
      <div class="form-group">
    @endif
      {{Form::label('description', 'Descripción', array('class' => "control-label"))}}
      {{Form::textarea('description',null, array('class' => 'form-control', 'placeholder' => 'Descripción') )}}
      {{$errors->first('description')}}
      @if ($errors->has('description')) 
        <small class="help-block">
          {{ $errors->first('description') }}
        </small>
      @endif
    </div>

    <!-- Tutor Id -->
    @if ($errors->has('user_id')) 
      <div class="form-group has-error">
    @else
      <div class="form-group">
    @endif
      {{Form::label('user_id', 'Tutor Encargado', array('class' => "control-label"))}}
      {{Form::select('user_id', $tutors, null ,array('class' => "form-control"));}}
      @if ($errors->has('user_id')) 
        <small class="help-block">
          {{ $errors->first('user_id') }}
        </small>
      @endif
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