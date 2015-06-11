@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Now Showing</div>

				<div class="panel-body">
				
				@foreach ($pages as $page)
				<div class="panel-body">
					<h4>{{ $page->title }}</h4>
					<div class="content">
						<p>
							{{ $page->id }}
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
