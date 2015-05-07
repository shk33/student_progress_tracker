<table class="table table-bordered table-hover mar-no">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Contenido</th>
      <th>Acciones</th>
    </tr>
  </thead>

  <tbody>
    @foreach($equations as $equation)
    <tr>
      <td>{{{ $equation->name }}}</td>
      <td>{{{ $equation->content }}}</td>
      <td>
        <!-- Edit Link -->
        <a class="btn btn-xs btn-default add-tooltip" data-toggle="tooltip" href='{{ URL::route("tutor.blackboards.equations.edit", [$blackboard->id, $equation->id]) }}'data-original-title="Editar" data-container="body">
          <i class="fa fa-pencil fa-2x"></i>
        </a>
        <!-- Delete Link -->
        {{ Form::open(array("route" => array("tutor.blackboards.equations.destroy", $blackboard->id, $equation->id), 'method' => 'DELETE','class' => 'inline')) }}
          <button type="submit" class="btn btn-xs btn-danger add-tooltip" data-toggle="tooltip" data-original-title="Eliminar" data-container="body">
            <i class="fa fa-times fa-2x"></i>
          </button>
        {{ Form::close() }}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>