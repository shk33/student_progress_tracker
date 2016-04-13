<div class="panel-body">

    <!-- Test Name -->
    <div class="form-group ">
      {{Form::label('name', 'Nombre del Examen *', array('class' => "control-label"))}}
      {{Form::text('name',null, array('class' => 'form-control', 'placeholder' => 'Nombres') )}}
      <span class="text-danger">{{$errors->first('name')}}</span>
    </div>

    <!-- PDF Presentation -->
    <div class="form-group">
      {{Form::label('presentation', 'Subir presentación', array('class' => "control-label"))}}
      <input type="file" name="presentation" accept="application/pdf" id="presentation" class="form-control underline">
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