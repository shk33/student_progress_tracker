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
                Presentación Completado
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-12">
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">
            Resultados
            <a href="{{ Request::url() }}">
              <button class="btn btn-success mar-lft">
                Actualizar Resultados
              </button>
            </a>
          </h3>
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

    <div class="col-lg-12">
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">
            Estadísticas
          </h3>
        </div>
        <div class="panel-body">
          @foreach ($test->getQuestions() as $question)
            <div id="question{{$question->id}}" style="height: 300px; width: 100%;"></div>

            <script type="text/javascript">

              window.addEventListener("load",function(event) {
                var chart{{$question->id}} = new CanvasJS.Chart("question{{$question->id}}",
                {
                  title:{
                    text: "{{trim(preg_replace('/\s+/', ' ', $question->text))}}"
                  },
                  legend: {
                    maxWidth: 350,
                    itemWidth: 120
                  },
                  data: [
                  {
                    type: "pie",
                    showInLegend: true,
                    legendText: "{indexLabel}",
                    dataPoints: [
                      @foreach ($question->options as $option)
                        { y:         {{$option->countTimesAnswered()}}, 
                          indexLabel: "{{trim(preg_replace('/\s+/', ' ', $option->text))}}" },
                        {{-- expr --}}
                      @endforeach
                    ]
                  }
                  ]
                });
                chart{{$question->id}}.render();
              },false);
            </script>
          @endforeach
        </div>
      </div>
    </div>

  </div>
</div>


@stop