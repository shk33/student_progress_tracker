@if(!$errors->isEmpty())
  <div class="form-group bg-danger">
    <ul>
    @foreach($errors->all() as $error)
    <li class="text-danger">{{$error}}</li>
    @endforeach
    </ul>
  </div>
@endif