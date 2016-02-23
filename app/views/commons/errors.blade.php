@if(!$errors->isEmpty())
<div id="page-alert">
    <div class="alert-wrap in">
      <div class="alert alert-danger" role="alert">
        <button class="close" type="button">
          <i class="fa fa-times-circle">
          </i>
        </button>
        <div class="media">
          <div class="media-left">
            <span class="icon-wrap icon-wrap-xs icon-circle alert-icon">
              <i class="fa fa-lg fa-times">
              </i>
            </span>
          </div>
          <div class="media-body">
            <h4 class="alert-title">
              Error
            </h4>
            <p class="alert-message">
              <ul>
              @foreach($errors->all() as $error)
                <li>{{$error}}</li>
              @endforeach
              </ul>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endif