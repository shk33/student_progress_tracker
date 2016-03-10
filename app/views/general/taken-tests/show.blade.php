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
                <p class="text-lg text-semibold mar-no">
                  Pregunta #{{$questionIndex}}
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

              <!--Horizontal Form-->
              <!--===================================================-->
              <form class="form-horizontal" method="POST" action={{route('general.taken-tests.questions.answer',[$takenTest->id,$questionIndex])}}>
                <div class="panel-body">
                  <div class="form-group pad-ver">
                    <div class="col-md-offset-1 col-md-11">
                      <div class="col-md-6 pad-no">

                        @foreach ($question->options as $option)
                        <div class="radio">
                          <label class="form-radio form-icon active form-text">
                            <input type="radio" checked="checked" name="question_{{$question->id}}" value={{$option->id}}> 
                            {{$option->text}}
                          </label>
                        </div>
                        @endforeach

                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel-footer text-center">
                  <button style="width:100%;font-size:20px;" class="btn btn-info btn-lg" type="submit">Enviar Respuesta</button>
                </div>
              </form>
              <!--===================================================-->
              <!--End Horizontal Form-->

            </div>
          </div>
        </div>

        

      </div>
    </div>

  </div>


@stop