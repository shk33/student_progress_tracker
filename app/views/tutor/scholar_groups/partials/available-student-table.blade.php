<table class="table table-bordered table-hover mar-no">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Email</th>
      <th>Username</th>
      <th>Agregar al grupo</th>
    </tr>
  </thead>

  <tbody>
    @foreach($students as $user)
    <tr>
      <td>{{{"$user->first_name $user->last_name"}}}</td>
      <td>{{{$user->email}}}</td>
      <td>{{{$user->username}}}</td>
      <td>
        <!-- Add Link -->
        {{ Form::open(array("route" => array("tutor.scholar-groups.store-student",$scholarGroup->id, $user->id), 'method' => 'POST')) }}
          <button type="submit" class="btn btn-xs btn-success add-tooltip" data-toggle="tooltip" data-original-title="Agregar Alumno" data-container="body">
            <i class="fa fa-plus fa-2x"></i>
          </button>
        {{ Form::close() }}
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>