@extends('layouts.application')

@section('content')

<!-- Maint Content -->
<div id="page-content">

  <div class="row">
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

  <div class="row">
    <div class="col-lg-12">
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Estadisticas de Preguntas</h3>
        </div>
        <div class="panel-body">
          <table class="table table-bordered table-hover mar-no">
            <thead>
              <tr>
                <th>Pregunta</th>
                <th>Respuesta Correcta</th>
                <th>Número de veces contestado correctamente</th>
              </tr>
            </thead>

            <tbody>
              @foreach($test->questions as $question)
              <tr>
                <td>{{$question->text}}</td>
                <td>{{$question->getCorrectOption()->text}}</td>
                <td>
                  {{$question->countCorrectTimesAnswered()}}
                  /
                  {{$question->countTimesAnswered()}}
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>


@stop