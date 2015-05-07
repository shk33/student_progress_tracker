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
      <td>{{{ $file->attachment_file_name }}}</td>
      <td>
        <!-- Download Link -->
        <a class="btn btn-xs btn-mint add-tooltip" data-toggle="tooltip" href='{{ $file->attachment->url()  }}' data-original-title="Descargar" data-container="body" target="_blank">
          <i class="fa fa-download fa-2x"></i>
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