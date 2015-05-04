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
            </h3>

          </div>
          
          <div class="panel-body">
            <h3 class="panel-title">
              Pizarra Virtual
            </h3>
            @include('admin.blackboards.partials.equation-table')
          </div>

        </div>
      </div>
    </div>

  </div>

@stop