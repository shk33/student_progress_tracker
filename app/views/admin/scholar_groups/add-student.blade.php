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
            </h3>

          </div>
          
          <div class="panel-body no-top-bot-pad">
          </div>
          
          <div class="panel-body">
           @include('admin.scholar_groups.partials.available-student-table')
          </div>
    
          <div class="panel-body no-top-pad">
          </div>

        </div>
      </div>
    </div>

  </div>

@stop