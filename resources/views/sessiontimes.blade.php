@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Session Times</div>

				<div class="panel-body">
				
				@foreach ($pages as $page)
				<div class="panel-body">
					<h4>{{ $page->cinema_id }}</h4>
					<div class="content">
						<p>
							{{ $page->movie_id }}
						</p>
						<p>
							{{ $page->session_dt }}
						</p>						
					</div>	
				</div>		
				@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
