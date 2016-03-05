<hr>
{{ Form::open(array
            (
              'action'=>'tutor.students.index',
              'method'=>'GET',
              'role'=>'form',
              'class'=>'inline',
            ))        
}}

{{ Form::input('text','search',Input::get('search'), array('class'=> 'form-control') )}}
{{ Form::input('submit',null,'Buscar',array('class'=>'btn btn-xs btn-danger add-tooltip'))}}
{{ Form::close()}}
<hr>

