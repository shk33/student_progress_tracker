@foreach ($taken_tests as $test)
  <h2>{{$test->student_test->name}}</h2>
  <table class="table table-bordered table-hover mar-no">
    <thead>
      <tr>
        <th>Pregunta</th>
        <th>Respuesta Alumno</th>
        <th>Resultado</th>
      </tr>
    </thead>

    <tbody>
      @foreach($test->answers as $answer)
      <tr>
        <td>{{{$answer->question->text}}}</td>
        <td>
          {{$answer->selected_option->text}}
        </td>
        <td>
          @if ($answer->is_correct)
            Correcto
          @else
            Incorrecto
          @endif
        </td>
      </tr>
      @endforeach
      <tr>
        <td></td>
        <td></td>
        <td>Aciertos: {{$test->getScore()}}</td>
      </tr>
    </tbody>
  </table>
@endforeach