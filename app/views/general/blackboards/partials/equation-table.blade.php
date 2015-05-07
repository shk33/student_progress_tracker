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
        </a>
        <!-- Edit Link -->
        <a class="btn btn-xs btn-default add-tooltip" data-toggle="tooltip" href='#'data-original-title="Comprobar" data-container="body">
          <i class="fa fa-question fa-2x"></i>
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>