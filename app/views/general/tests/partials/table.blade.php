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
        </a>
        <!-- Start Test -->
        {{ Form::open(array("route" => array("general.tests.taken-tests.store",$test->id), 'method' => 'POST','class' => 'inline')) }}
            <button type="submit" class="btn btn-primary">Comenzar Prueba</button>
        {{ Form::close() }}
    </tr>
    @endforeach
  </tbody>
</table>