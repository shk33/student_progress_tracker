@extends('layouts.application')

@section('content')

  <!-- Main Content -->
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
            @include('general.blackboards.partials.equation-table')
          </div>

        </div>
      </div>
    </div>

  <!-- Main Content -->
    <div class="row">
      <div class="col-md-12 col-lg-12">
        <div class="panel">

          <div class="panel-heading">
            <h3 class="panel-title">
              Chat
            </h3>
          </div>
          
          <div class="panel-body">
            <iframe src="https://kiwiirc.com/client/irc.kiwiirc.com/?&theme=mini#pizvir1" style="border:0; width:100%; height:450px;"></iframe>
          </div>

        </div>
      </div>
    </div>

  </div>

@stop