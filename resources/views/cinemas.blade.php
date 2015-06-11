@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Cinemas</div>

				<div class="panel-body">
				
				@foreach ($pages as $page)
				<div class="panel-body">
					<h4>{{ $page->name }}</h4>
					<div class="content">
						<p>
							{{ $page->address }}
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
