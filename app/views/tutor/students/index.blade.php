@extends('layouts.application')

@section('content')

  <!-- Maint Content -->
  <div id="page-content">
    
    <div class="row">
      <div class="col-md-12 col-lg-12">
        <div class="panel">

          <div class="panel-heading">
            <h3 class="panel-title">
              Estudiantes
              <a href="{{ URL::route('tutor.students.create') }}">
                <button class="btn btn-success mar-lft">
                  Crear Nuevo Estudiante
                </button>
              </a>
              <a href="{{ URL::route('tutor.students.ordered') }}">
                <button class="btn btn-success mar-lft">
                  Ordenar Alfabéticamente
                </button>
              </a>
            </h3>

          </div>
          
          <div class="panel-body no-top-bot-pad">
              @include('users.partials.pagination')
          </div>
          
          <div class="panel-body">
              @include('tutor.students.partials.table')
          </div>
    
          <div class="panel-body no-top-pad">
              @include('users.partials.pagination')
          </div>

        </div>
      </div>
    </div>

  </div>


@stop