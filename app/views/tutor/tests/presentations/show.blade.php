@extends('layouts.application')

@section('content')

  <!-- Maint Content -->
  <div id="page-content">

    <div class="row">
    <!-- Presentation -->
      <div class="col-md-12 col-lg-12">
        <div class="panel">
          <div class="pad-all">
            <div class="media mar-btm">
              <div class="media-body">
                <p class="text-lg text-semibold mar-no">
                  <h1> Diapostiva #{{$questionIndex}} </h1>
                </p>
              </div>
            </div>
            @if ($question->slide_image)
              <div class="img-holder img-responsive">
                <img alt="Image" src="/{{$question->slide_image}}">
              </div>
            @endif
            <br>
            <blockquote class="">
              {{$question->slide_text}}
            </blockquote>
          </div>
          <div class="panel-footer text-center">
            @if ($questionIndex != 1 )
              <a href='{{ URL::route("tutor.tests.presentations.show", [$test->id,$questionIndex -1 ]) }}' style="width:30%;font-size:20px;display:inline-block;" class="btn btn-info btn-lg">Anterior Diapostiva</a>
            @endif
            <a href='{{ URL::route("tutor.tests.presentations.show", [$test->id,$questionIndex + 1 ]) }}' style="width:30%;font-size:20px;display:inline-block;" class="btn btn-info btn-lg">Siguiente Diapostiva</a>
          </div>
        </div>
      </div>

      @if ($question->text)
        <!-- Question -->
        <div class="col-md-12 col-lg-12">
          <div class="panel">
            <div class="pad-all">
              <div class="media mar-btm">
                <div class="media-body">
                  <p class="text-lg text-semibold mar-no">
                    Pregunta 
                  </p>
                </div>
              </div>
              @if ($question->image)
                <div class="img-holder">
                  <img alt="Image" src="/{{$question->image}}">
                </div>
              @endif
              <br>
              <blockquote class="">
                {{$question->text}}
              </blockquote>
            </div>

            <div class="bord-top">
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    Opciones
                  </h3>
                </div>
                <div class="panel-body">
                  <div class="form-group pad-ver">
                    <div class="col-md-offset-1 col-md-11">
                      <div class="col-md-6 pad-no">

                        @foreach ($question->options as $option)
                        <div class="radio">
                          <label class="form-radio form-icon active form-text">
                            <input type="radio" name="question_{{$questionIndex}}" value={{$option->id}}> 
                            {{$option->text}}
                          </label>
                        </div>
                        @endforeach

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endif
    </div>
  </div>


@stop