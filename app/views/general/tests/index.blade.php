@extends('layouts.application')

@section('content')

  <!-- Maint Content -->
  <div id="page-content">
    
    <div class="row">
      <div class="col-md-12 col-lg-12">
        <div class="panel">

          <div class="panel-heading">
            <h3 class="panel-title">
              Pruebas Disponibles
            </h3>

          </div>
          
          <div class="panel-body">
              @include('general.tests.partials.table')
          </div>

        </div>
      </div>
    </div>

  </div>


@stop