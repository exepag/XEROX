@extends('layout')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">

	<div class="well">
		<a href="/agenda/add" class="btn btn-small btn-success">TO DO</a>
	</div>

	<table class="table table-bordered">
		<thead>
		  <tr>
		    <th>	ID		</th>
		    <th>	Job		</th>
		    <th>	Associates	</th>
		    <th>	Urgency		</th>
		    <th>	Timeframe	</th>
		  </tr>
		</thead>

		@foreach ($agendas as $task)
		  <tr>
		    <td>	{{$task->id}}	</td>
		    <td>	{{$task->task}}	</td>
		    <td>	{{$task->associate }}</td>
		    <td>	{{$task->urgency}}	</td>
		    <td>	<a href="/agenda/detail/{{$task->id}}" class="btn btn-default btn-xs">Check</a>	</td>
		  </tr>
		@endforeach
	</table>

    </div>
  </div>
</div>
@endsection
