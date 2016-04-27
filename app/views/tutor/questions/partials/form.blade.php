<div class="panel-body">
    <!-- StudenTest Id -->
    {{Form::hidden('student_test_id',$test->id)}}
    <h3>Diapositiva (Obligatorio)</h3>
    <div class="form-group ">
      {{Form::label('slide_text', 'Texto de la Diapositiva', array('class' => "control-label"))}}
      {{Form::textarea('slide_text',null, array('class' => 'form-control', 'placeholder' => 'Texto de la Diapositiva') )}}
    </div>
    <div class="form-group">
      {{Form::label('slide_image', 'Subir imagen de diapositiva', array('class' => "control-label"))}}
      <input type="file" name="slide_image" id="slide_image" class="form-control underline">
    </div>

    <h3>Pregunta (Opcional)</h3>
    <!-- Question Test -->
    <div class="form-group ">
      {{Form::label('text', 'Enunciado de la Pregunta *', array('class' => "control-label"))}}
      {{Form::textarea('text',null, array('class' => 'form-control', 'placeholder' => 'Enunciado de la Pregunta') )}}
      <span class="text-danger">{{$errors->first('text')}}</span>
    </div>

    <!-- Option A -->
    <div class="form-group ">
      {{Form::label('optionA', 'Opción A', array('class' => "control-label"))}}
      {{Form::text('optionA',null, array('class' => 'form-control', 'placeholder' => 'Opción A') )}}
      <span class="text-danger">{{$errors->first('optionA')}}</span>
    </div>

    <!-- Option B -->
    <div class="form-group ">
      {{Form::label('optionB', 'Opción B', array('class' => "control-label"))}}
      {{Form::text('optionB',null, array('class' => 'form-control', 'placeholder' => 'Opción B') )}}
      <span class="text-danger">{{$errors->first('optionB')}}</span>
    </div>

    <!-- Option C -->
    <div class="form-group ">
      {{Form::label('optionC', 'Opción C', array('class' => "control-label"))}}
      {{Form::text('optionC',null, array('class' => 'form-control', 'placeholder' => 'Opción C') )}}
      <span class="text-danger">{{$errors->first('optionC')}}</span>
    </div>

    {{Form::label('option_correct', 'Selecciona cuál opción es la correcta', array('class' => "control-label"))}}
    <div class="form-group">
      {{Form::label('option_correct', 'Opción A', array('class' => "control-label"))}}
      {{Form::radio('option_correct', 'A') }}
    </div>

    <div class="form-group">
      {{Form::label('option_correct', 'Opción B', array('class' => "control-label"))}}
      {{Form::radio('option_correct', 'B') }}
    </div>

    <div class="form-group">
      {{Form::label('option_correct', 'Opción C', array('class' => "control-label"))}}
      {{Form::radio('option_correct', 'C') }}
    </div>

    <div class="form-group">
      {{Form::label('image', 'Subir imagen de ayuda para la pregunta', array('class' => "control-label"))}}
      <input type="file" name="image" id="image" class="form-control underline">
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