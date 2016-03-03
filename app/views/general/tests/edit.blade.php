@extends('layouts.application')

@section('content')

  <!-- Main Content -->
  <div id="page-content">
    
    <div class="row">
      <div class="col-md-12 col-lg-12">
        
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">
              Cambiar Nombre de la Prueba: {{ $test->name }}
            </h3>
          </div>
          
          {{ Form::open(array('action' => array('tutor.tests.update',$test->id), 'method' => 'PUT' )) }}
            @include('tutor.tests.partials.edit_form')
          {{ Form::close() }}

        </div>

      </div>
    </div>

  </div>


@stop