@extends('layouts.application')

@section('content')

  <!-- Main Content -->
  <div id="page-content">
    
    <div class="row">
      <div class="col-md-12 col-lg-12">
        
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">
              Modificar Diapositiva:
            </h3>
          </div>
          
          {{ Form::open(array('action' => array('tutor.tests.questions.update',$test->id, $question->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data' )) }}
            @include('tutor.questions.partials.edit_form')
          {{ Form::close() }}

        </div>

      </div>
    </div>

  </div>


@stop