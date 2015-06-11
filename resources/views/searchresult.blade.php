@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">My Cinema</div>

				<div class="panel-body">
					Found {{ $searchcnt }} record(s)
				</div>
				<div class="panel-body">
					{{ $searchResult['name'] }}<br />
					{{ $searchResult['address'] }}
				</div>
				<!-- @foreach ($searchResult as $page)
					{{ $page }}<br />
				@endforeach -->
			</div>
		</div>
	</div>
</div>
@endsection
