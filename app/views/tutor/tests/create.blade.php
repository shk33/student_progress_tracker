@extends('layouts.application')

@section('content')

  <!-- Main Content -->
  <div id="page-content">
    
    <div class="row">
      <div class="col-md-12 col-lg-12">
        
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Crear Examen</h3>
          </div>
          
          {{ Form::open(array('action' => array('tutor.tests.store'), 'method' => 'POST' , 'enctype' => 'multipart/form-data' )) }}
            @include('tutor.tests.partials.form')
          {{ Form::close() }}

        </div>

      </div>
    </div>

  </div>

@stop