@extends('layouts.application')

@section('content')

  <!-- Main Content -->
  <div id="page-content">
    
    <div class="row">
      <div class="col-md-12 col-lg-12">
        
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">
              Editar Estudiante: {{{ "$user->first_name $user->last_name" }}}
            </h3>
          </div>
          
          {{ Form::open(array('action' => array('tutor.students.update',$user->id), 'method' => 'PUT' )) }}
            @include('users.partials.edit_form')
          {{ Form::close() }}

        </div>

      </div>
    </div>

  </div>


@stop