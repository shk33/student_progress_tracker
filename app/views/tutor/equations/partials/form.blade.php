<div class="panel-body">

    @include('layouts/form-errors')

    <!-- Name -->
    @if ($errors->has('name')) 
      <div class="form-group has-error">
    @else
      <div class="form-group">
    @endif
      {{Form::label('name', 'Nombre de la ecuacion', array('class' => "control-label"))}}
      {{Form::text('name',null, array('class' => 'form-control', 'placeholder' => 'Nombre de la ecuación') )}}
      @if ($errors->has('name')) 
        <small class="help-block">
          {{ $errors->first('name') }}
        </small>
      @endif
    </div>

    <!-- content -->
    @if ($errors->has('content')) 
      <div class="form-group has-error">
    @else
      <div class="form-group">
    @endif
      {{Form::label('content', 'Contenido', array('class' => "control-label"))}}
      {{Form::text('content',null, array('class' => 'form-control', 'placeholder' => 'Contenido de la ecuación') )}}
      @if ($errors->has('content')) 
        <small class="help-block">
          {{ $errors->first('content') }}
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