@extends('layouts.application')

@section('content')

  <!-- Main Content -->
  <div id="page-content">
    
    <div class="row">
      <div class="col-md-12 col-lg-12">
        
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">
              Editar Ecuación
            </h3>
          </div>
          
          {{ Form::model($equation, array('route' => array('admin.scholar-groups.update', $blackboard->id,  $equation->id), 'method' => 'PUT')) }}
            @include('admin.equations.partials.form')
          {{ Form::close() }}

        </div>

      </div>
    </div>

  </div>


@stop