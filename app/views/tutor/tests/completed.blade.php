@extends('layouts.application')

@section('content')

<!-- Maint Content -->
<div id="page-content">

  <div class="row">
    <div class="col-md-12 col-lg-12">

      <div class="panel">
        <div class="pad-all">
          <div class="media mar-btm">
            <div class="media-body">
              <h3 class="panel-title">
                Examen Completado
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-12">
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Resultados</h3>
        </div>
        <div class="panel-body">
          <!-- Timeline -->
          <!--===================================================-->
          <div class="timeline">

            <!-- Timeline header -->
            <div class="timeline-header">
              <div class="timeline-header-title bg-info">Resultados</div>
            </div>

            @include('general.taken-tests.partials.timeline-render')
          </div>
          <!--===================================================-->
          <!-- End Timeline -->
        </div>
      </div>
    </div>
  </div>

</div>


@stop