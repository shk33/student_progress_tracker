@extends('layouts.application')

@section('content')

  <!-- Maint Content -->
  <div id="page-content">
    
    <div class="row">
      <div class="col-md-12 col-lg-12">
        <div class="panel">

          <div class="panel-heading">
            <h3 class="panel-title">
              Agregar alumnos al grupo: {{ $scholarGroup->name }}
              <a href="{{ URL::route('tutor.scholar-groups.show', $scholarGroup->id) }}">
                <button class="btn btn-success mar-lft">
                  Ver Detalles del Grupo
                </button>
              </a>
            </h3>

          </div>
          
          <div class="panel-body no-top-bot-pad">
          </div>
          
          <div class="panel-body">
           @include('tutor.scholar_groups.partials.available-student-table')
          </div>
    
          <div class="panel-body no-top-pad">
          </div>

        </div>
      </div>
    </div>

  </div>

@stop