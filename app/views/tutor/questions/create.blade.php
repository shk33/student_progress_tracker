@extends('layouts.application')

@section('content')

  <!-- Main Content -->
  <div id="page-content">
    
    <div class="row">
      <div class="col-md-12 col-lg-12">
        
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Crear Pregunta del Examen {{$test->name}}</h3>
          </div>
          
          {{ Form::open(array('action' => array('tutor.tests.questions.store',$test->id), 'method' => 'POST', 'enctype' => 'multipart/form-data' )) }}
            @include('tutor.questions.partials.form')
          {{ Form::close() }}

        </div>

      </div>
    </div>

  </div>

@stop