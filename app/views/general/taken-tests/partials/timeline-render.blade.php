<?php $i = 0; ?>

@foreach ($takenTests as $group)
  @if ($i == 0)
    @include('general.taken-tests.partials.first_place',  array('group' => $group))
  @elseif($i == 1)
    @include('general.taken-tests.partials.second_place', array('group' => $group))
  @elseif($i == 2)
    @include('general.taken-tests.partials.third_place',  array('group' => $group))
  @else
    @include('general.taken-tests.partials.normal_place',  array('group' => $group))
  @endif
  <?php $i++; ?>
@endforeach