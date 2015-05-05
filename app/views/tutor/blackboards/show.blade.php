@extends('layouts.application')

@section('content')

  <!-- Maint Content -->
  <div id="page-content">
    
    <div class="row">
      <div class="col-md-12 col-lg-12">
        <div class="panel">

          <div class="panel-heading">
            <h3 class="panel-title">
              Pizarra Virtual
              <a href="{{ URL::route('tutor.blackboards.equations.create', $blackboard->id) }}">
                <button class="btn btn-success mar-lft">
                  Crear Ecuación
                </button>
              </a>
            </h3>
          </div>
          
          <div class="panel-body">
            @include('tutor.blackboards.partials.equation-table')
          </div>

        </div>
      </div>
    </div>

  </div>

@stop