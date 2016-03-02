<table class="table table-bordered table-hover mar-no">
  <thead>
    <tr>
      <th>Pregunta</th>
      <th>Opciones</th>
      <th>Acciones</th>
    </tr>
  </thead>

  <tbody>
    @foreach($questions as $question)
    <tr>
      <td>{{{$question->text}}}</td>
      <td>
        @foreach ($question->options as $option)
          @if ($option->is_correct)
            <b>{{$option->name}}) {{$option->text}} 
            (Respuesta Correcta)</b>
            <br> 
          @else
            {{$option->name}}) {{$option->text}} 
            <br>
          @endif  
        @endforeach
      </td>
      <td>
        <!-- Edit Link -->
        <a class="btn btn-xs btn-default add-tooltip" data-toggle="tooltip" href='{{ URL::route("tutor.tests.questions.edit", $question->id) }}'data-original-title="Editar Pregunta" data-container="body">
          <i class="fa fa-pencil fa-2x"></i>
        </a>
        <!-- Delete Link -->
        {{ Form::open(array("route" => array("tutor.tests.questions.destroy",$question->id), 'method' => 'DELETE','class' => 'inline')) }}
          <button type="submit" class="btn btn-xs btn-danger add-tooltip" data-toggle="tooltip" data-original-title="Eliminar" data-container="body">
            <i class="fa fa-times fa-2x"></i>
          </button>
        {{ Form::close() }}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>