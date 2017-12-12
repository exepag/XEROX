@extends('layout')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">

	<div class="well">
		<a href="/tasks/add" class="btn btn-small btn-success">TO DO</a>
	</div>

	<table class="table table-bordered">
		<thead>
		  <tr>
		    <th>	ID		</th>
		    <th>	Job		</th>
		    <th>	Associates	</th>
		    <th>	Timeframe	</th>
		    <th>	Urgency		</th>
		  </tr>
		</thead>

		@foreach ($tasks as $task)
		  <tr>
		    <td>	{{$product->id}}	</td>
		    <td>	{{$product->task}}	</td>
		    <td>	{{$product-> }}		</td>
		    <td>	{{$product-> }}		</td>
		    <td>	<a href="/task/detail/{{$product->id}}" class="btn btn-default btn-xs">Check</a>	</td>
		  </tr>
		@endforeach
	</table>

    </div>
  </div>
</div>
@endsection
