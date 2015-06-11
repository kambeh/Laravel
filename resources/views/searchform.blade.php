@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">My session times</div>

				<div class="panel-body">
					Search for session time
				</div>
				<div class="panel-body">
					<form action="{{ URL('cinemas/searchresult/') }}" method="GET">
						<!-- input type="hidden" name="_method" value="PUT" -->
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="text" name="id" class="form-control" value="">
						<button class="btn btn-lg btn-info">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
