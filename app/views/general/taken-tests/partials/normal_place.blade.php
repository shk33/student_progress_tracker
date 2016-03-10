<div class="timeline-entry">
  <div class="timeline-stat">
    <div class="timeline-icon"></div>
  </div>
  <div class="timeline-label">
    <p> {{$group[0]->score}} respuesta correctas de {{$maxScore}}</p>
    @foreach ($group as $takenTest)
      <h4 class="mar-no pad-btm">
        <a href="#" class="text-danger">
          * {{$takenTest->user->full_name}}
        </a>
      </h4>
    @endforeach
  </div>
</div>