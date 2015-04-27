@extends('layouts.application')

@section('content')

  <!-- Main Content -->
  <div id="page-content">
    
    <div class="row">
      <div class="col-md-12 col-lg-12">
        
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Crear Grupo</h3>
          </div>
          
          {{ Form::open(array('action' => array('tutor.scholar-groups.store'), 'method' => 'POST' )) }}
            @include('tutor/scholar_groups.partials.form')
          {{ Form::close() }}

        </div>

      </div>
    </div>

  </div>

@stop