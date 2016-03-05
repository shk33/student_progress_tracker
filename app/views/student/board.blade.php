@extends('layouts.application')

@section('content')

	<!-- Maint Content -->
	<div id="page-content">
		
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div class="panel">

					<div class="panel-heading">
						<h3 class="panel-title">
							Panel de estudiante  
						</h3>
					</div>

					<div class="panel-body">
						@include('student.partials.index_games')
					</div>
				</div>
			</div>
		</div>

	</div>


@stop