@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">My session times</div>

				<div class="panel-body">
					You have {{ $searchcnt }} available sessions
				</div>
				<div class="panel-body">
					{{ $searchResult['title'] }}<br />
					{{ $searchResult['id'] }}
				</div>
				<!-- @foreach ($searchResult as $page)
					{{ $page }}<br />
				@endforeach -->
			</div>
		</div>
	</div>
</div>
@endsection
