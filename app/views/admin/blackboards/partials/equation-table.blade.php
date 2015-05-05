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
        <!-- View Link -->
        <a class="btn btn-xs btn-mint add-tooltip" data-toggle="tooltip" href='{{ URL::route("admin.blackboards.equations.show", [$blackboard->id, $equation->id]) }}' data-original-title="Ver" data-container="body">
          <i class="fa fa-eye fa-2x"></i>
        </a>
        <!-- Edit Link -->
        <a class="btn btn-xs btn-default add-tooltip" data-toggle="tooltip" href='{{ URL::route("admin.blackboards.equations.edit", [$blackboard->id, $equation->id]) }}'data-original-title="Editar" data-container="body">
          <i class="fa fa-pencil fa-2x"></i>
        </a>
        <!-- Delete Link -->
        {{ Form::open(array("route" => array("admin.blackboards.equations.destroy", $blackboard->id, $equation->id), 'method' => 'DELETE')) }}
          <button type="submit" class="btn btn-xs btn-danger add-tooltip" data-toggle="tooltip" data-original-title="Eliminar" data-container="body">
            <i class="fa fa-times fa-2x"></i>
          </button>
        {{ Form::close() }}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>