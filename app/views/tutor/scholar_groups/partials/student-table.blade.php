<table class="table table-bordered table-hover mar-no">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Email</th>
      <th>Username</th>
      <th>Remover del Grupo</th>
    </tr>
  </thead>

  <tbody>
    @foreach($students as $user)
    <tr>
      <td>{{{"$user->first_name $user->last_name"}}}</td>
      <td>{{{$user->email}}}</td>
      <td>{{{$user->username}}}</td>
      <td>
        <!-- Delete Link -->
        {{ Form::open(array("route" => array("tutor.scholar-groups.remove-student",$scholarGroup->id, $user->id), 'method' => 'DELETE')) }}
          <button type="submit" class="btn btn-xs btn-danger add-tooltip" data-toggle="tooltip" data-original-title="Remover del Grupo" data-container="body">
            <i class="fa fa-times fa-2x"></i>
          </button>
        {{ Form::close() }}
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>