<table class="table table-bordered table-hover mar-no">
  <thead>
    <tr>
      <th>Archivo</th>
      <th>Acciones</th>
    </tr>
  </thead>

  <tbody>
    @foreach($myFiles as $file)
    <tr>
      <td>{{{ "Hardcoded" }}}</td>
      <td>
        <!-- View Link -->
        <a class="btn btn-xs btn-mint add-tooltip" data-toggle="tooltip" href='{{ URL::route("tutor.blackboards.my-files.show", [$blackboard->id, $file->id]) }}' data-original-title="Ver" data-container="body">
          <i class="fa fa-eye fa-2x"></i>
        </a>
        <!-- Edit Link -->
        <a class="btn btn-xs btn-default add-tooltip" data-toggle="tooltip" href='{{ URL::route("tutor.blackboards.my-files.edit", [$blackboard->id, $file->id]) }}'data-original-title="Editar" data-container="body">
          <i class="fa fa-pencil fa-2x"></i>
        </a>
        <!-- Delete Link -->
        {{ Form::open(array("route" => array("tutor.blackboards.my-files.destroy", $blackboard->id, $file->id), 'method' => 'DELETE','class' => 'inline')) }}
          <button type="submit" class="btn btn-xs btn-danger add-tooltip" data-toggle="tooltip" data-original-title="Eliminar" data-container="body">
            <i class="fa fa-times fa-2x"></i>
          </button>
        {{ Form::close() }}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>