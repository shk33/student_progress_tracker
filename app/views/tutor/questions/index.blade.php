@extends('layouts.application')

@section('content')

  <!-- Maint Content -->
  <div id="page-content">
    
    <div class="row">
      <div class="col-md-12 col-lg-12">
        <div class="panel">

          <div class="panel-heading">
            <h3 class="panel-title">
              Preguntas del Examen {{$test->name}}
              <a href="{{ URL::route('tutor.tests.questions.create',$test->id) }}">
                <button class="btn btn-success mar-lft">
                  Nueva Pregunta
                </button>
              </a>
            </h3>

          </div>
          
          <div class="panel-body no-top-bot-pad">
              @include('tutor.questions.partials.pagination')
          </div>
          
          <div class="panel-body">
              @include('tutor.questions.partials.table')
          </div>
    
          <div class="panel-body no-top-pad">
              @include('tutor.questions.partials.pagination')
          </div>

        </div>
      </div>
    </div>

  </div>


@stop