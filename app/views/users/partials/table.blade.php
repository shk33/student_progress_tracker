<table class="table table-bordered table-hover mar-no">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Email</th>
      <th>Username</th>
      <th>Acciones</th>
    </tr>
  </thead>

  <tbody>
    @foreach($users as $user)
    <tr>
      <td>{{{"$user->first_name $user->last_name"}}}</td>
      <td>{{{$user->email}}}</td>
      <td>{{{$user->username}}}</td>
      <td>
        <!-- View Link -->
        <a class="btn btn-xs btn-mint add-tooltip" data-toggle="tooltip" href='{{ URL::route("$userType.show", $user->id) }}' data-original-title="Ver" data-container="body">
          <i class="fa fa-eye fa-2x"></i>
        </a>
        <!-- Edit Link -->
        <a class="btn btn-xs btn-default add-tooltip" data-toggle="tooltip" href='{{ URL::route("$userType.edit", $user->id) }}'data-original-title="Editar" data-container="body">
          <i class="fa fa-pencil fa-2x"></i>
        </a>
        <!-- Delete Link -->
        {{ Form::open(array("route" => array("$userType.destroy",$user->id), 'method' => 'DELETE')) }}
          <button type="submit" class="btn btn-xs btn-danger add-tooltip" data-toggle="tooltip" data-original-title="Eliminar" data-container="body">
            <i class="fa fa-times fa-2x"></i>
          </button>
        {{ Form::close() }}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>