<div class="panel-body">

    @include('layouts/form-errors')

    <!-- Attachment -->
    <div class="form-group">
      {{Form::label('attachment', 'Archivo', array('class' => "control-label"))}}
      <span class="btn btn-default btn-file">
        Seleccionar Archivo... {{ Form::file('attachment') }}
      </span>
    </div>

</div>
    

<div class="panel-footer">
  <div class="row">
    <div class="col-sm-3 col-sm-offset-9">
    {{Form::button('Guardar',array('class' => 'btn btn-lg btn-info btn-labeled fa fa-save fa-lg', 'type' => 'submit'))}}
    </div>
  </div>
</div>