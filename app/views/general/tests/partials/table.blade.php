<table class="table table-bordered table-hover mar-no">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Acciones</th>
    </tr>
  </thead>

  <tbody>
    @foreach($tests as $test)
    <tr>
      <td>{{{$test->name}}}</td>
      <td>
        @if ($test->presentation)
          <a class="btn btn-success" href="/{{$test->presentation}}" target="_blank">
            Ver Presentación
          </a>
        @endif
        <!-- Start Test -->
        {{ Form::open(array("route" => array("general.tests.taken-tests.store",$test->id), 'method' => 'POST','class' => 'inline')) }}
            <button type="submit" class="btn btn-primary">Comenzar Prueba</button>
        {{ Form::close() }}
      </td>  
    </tr>
    @endforeach
  </tbody>
</table>