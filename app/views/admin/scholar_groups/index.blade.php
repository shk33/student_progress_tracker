@extends('layouts.application')

@section('content')

  <!-- Maint Content -->
  <div id="page-content">
    
    <div class="row">
      <div class="col-md-12 col-lg-12">
        <div class="panel">

          <div class="panel-heading">
            <h3 class="panel-title">
              Grupos Escolares
              <a href="{{ URL::route('admin.scholar-groups.create') }}">
                <button class="btn btn-success mar-lft">
                  Nuevo
                </button>
              </a>
            </h3>

          </div>
          
          <div class="panel-body no-top-bot-pad">
              @include('admin/scholar_groups.partials.pagination')
          </div>
          
          <div class="panel-body">
              @include('admin/scholar_groups.partials.table')
          </div>
    
          <div class="panel-body no-top-pad">
              @include('admin/scholar_groups.partials.pagination')
          </div>

        </div>
      </div>
    </div>

  </div>


@stop