<div class="panel-body">
    <!-- StudenTest Id -->
    {{Form::hidden('student_test_id',$test->id)}}
    <!-- Question Test -->
    <div class="form-group ">
      {{Form::label('text', 'Enunciado de la Pregunta *', array('class' => "control-label"))}}
      {{Form::textarea('text',$question->text, array('class' => 'form-control', 'placeholder' => 'Enunciado de la Pregunta') )}}
      <span class="text-danger">{{$errors->first('text')}}</span>
    </div>

    <!-- Option A -->
    <div class="form-group ">
      {{Form::label('optionA', 'Opción A', array('class' => "control-label"))}}
      {{Form::text('optionA',$question->getOptionByName('A')->text, array('class' => 'form-control', 'placeholder' => 'Opción A') )}}
      <span class="text-danger">{{$errors->first('optionA')}}</span>
    </div>

    <!-- Option B -->
    <div class="form-group ">
      {{Form::label('optionB', 'Opción B', array('class' => "control-label"))}}
      {{Form::text('optionB',$question->getOptionByName('B')->text, array('class' => 'form-control', 'placeholder' => 'Opción B') )}}
      <span class="text-danger">{{$errors->first('optionB')}}</span>
    </div>

    <!-- Option C -->
    <div class="form-group ">
      {{Form::label('optionC', 'Opción C', array('class' => "control-label"))}}
      {{Form::text('optionC',$question->getOptionByName('C')->text, array('class' => 'form-control', 'placeholder' => 'Opción C') )}}
      <span class="text-danger">{{$errors->first('optionC')}}</span>
    </div>

    <h4>Selecciona cuál opción es la correcta</h4>
    <div class="form-group">
      {{Form::label('option_correct', 'Opción A', array('class' => "control-label"))}}
      {{Form::radio('option_correct', 'A',$question->getOptionByName('A')->is_correct) }}
    </div>

    <div class="form-group">
      {{Form::label('option_correct', 'Opción B', array('class' => "control-label"))}}
      {{Form::radio('option_correct', 'B',$question->getOptionByName('B')->is_correct) }}
    </div>

    <div class="form-group">
      {{Form::label('option_correct', 'Opción C', array('class' => "control-label"))}}
      {{Form::radio('option_correct', 'C',$question->getOptionByName('C')->is_correct) }}
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