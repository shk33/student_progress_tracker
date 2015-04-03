<?php 
  $type = '';
  $message = '';
  if (Session::get('success')) {
    $message = Session::get('success');
    $type = 'success';
  }
  if (Session::get('error')){
    $message = Session::get('error');
    $type = 'error';
  }
?>

@if ($type)
  <div id="page-alert">
    <div class="alert-wrap in">
      <div class="alert alert-{{{ApplicationHelper\getAlertCSSClass($type)}}}" role="alert">
        <button class="close" type="button">
          <i class="fa fa-times-circle">
          </i>
        </button>
        <div class="media">
          <div class="media-left">
            <span class="icon-wrap icon-wrap-xs icon-circle alert-icon">
              <i class="fa fa-lg {{{ApplicationHelper\getAlertIcon($type)}}}">
              </i>
            </span>
          </div>
          <div class="media-body">
            <h4 class="alert-title">
              {{{ApplicationHelper\getAlertTitle($type)}}}
            </h4>
            <p class="alert-message">
              {{{ $message }}}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endif