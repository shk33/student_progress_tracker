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
        <a href="#">
          <button type="submit" class="btn btn-xs btn-danger add-tooltip" data-toggle="tooltip" data-original-title="Remover del Grupo" data-container="body">
            <i class="fa fa-times fa-2x"></i>
          </button>
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>