<table class="table table-bordered table-hover mar-no">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Descripción</th>
      <th>Tutor</th>
    </tr>
  </thead>

  <tbody>
    @foreach($scholarGroup as $group)
    <tr>
      <td>{{{ $group->name }}}</td>
      <td>{{{ $group->description }}}</td>
      <td>{{{$group->tutor}}}</td>
      <td>
        <!-- View Link -->
        <a class="btn btn-xs btn-mint add-tooltip" data-toggle="tooltip" href='{{ URL::route("$groupType.show", $group->id) }}' data-original-title="Ver" data-container="body">
          <i class="fa fa-eye fa-2x"></i>
        </a>
        <!-- Edit Link -->
        <a class="btn btn-xs btn-default add-tooltip" data-toggle="tooltip" href='{{ URL::route("$groupType.edit", $group->id) }}'data-original-title="Editar" data-container="body">
          <i class="fa fa-pencil fa-2x"></i>
        </a>
        <!-- Delete Link -->
        {{ Form::open(array("route" => array("$groupType.destroy",$group->id), 'method' => 'DELETE')) }}
          <button type="submit" class="btn btn-xs btn-danger add-tooltip" data-toggle="tooltip" data-original-title="Eliminar" data-container="body">
            <i class="fa fa-times fa-2x"></i>
          </button>
        {{ Form::close() }}
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>