@extends('layouts.application')

@section('content')

  <!-- Main Content -->
  <div id="page-content">
    
    <div class="row">
      <div class="col-md-12 col-lg-12">
        
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">
              Editar Grupo: {{{ $scholarGroup->name }}}
            </h3>
          </div>
          
          {{ Form::model($scholarGroup, array('route' => array('tutor.scholar-groups.update', $scholarGroup->id), 'method' => 'PUT')) }}
            @include('tutor/scholar_groups.partials.form')
          {{ Form::close() }}

        </div>

      </div>
    </div>

  </div>


@stop