@extends('layouts.application')

@section('content')

  <!-- Maint Content -->
  <div id="page-content">
    
    <div class="row">
      <div class="col-md-12 col-lg-12">
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">
              Archivos
              <a href="{{ URL::route('tutor.blackboards.my-files.create',$blackboard->id) }}">
                <button class="btn btn-success mar-lft"> Subir nuevo archivo
                </button>
              </a>
            </h3>

          </div>
          
          <div class="panel-body no-top-bot-pad">
          </div>
          
          <div class="panel-body">
           @include('tutor.my_files.partials.table')
          </div>
    
          <div class="panel-body no-top-pad">
          </div>

        </div>
      </div>
    </div>

  </div>


@stop