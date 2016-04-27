@extends('layouts.application')

@section('content')

  <!-- Maint Content -->
  <div id="page-content">
    
    <div class="row">
      <div class="col-md-12 col-lg-12">
        <div class="panel">

          <div class="panel-heading">
            <h3 class="panel-title">
              Presentaciones
              <a href="{{ URL::route('tutor.tests.create') }}">
                <button class="btn btn-success mar-lft">
                  Crear Nueva Presentación
                </button>
              </a>
            </h3>

          </div>
          
          <div class="panel-body no-top-bot-pad">
              @include('tutor.tests.partials.pagination')
          </div>
          
          <div class="panel-body">
              @include('tutor.tests.partials.table')
          </div>
    
          <div class="panel-body no-top-pad">
              @include('tutor.tests.partials.pagination')
          </div>

        </div>
      </div>
    </div>

  </div>


@stop