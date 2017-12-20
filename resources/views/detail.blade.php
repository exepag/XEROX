@extends('layouts/app')
@section('content')
<div class="container">
	<div class="well">
		<a class="btn btn-success" href="/agenda/edit/{{$task->id}}">EDIT</a>

		<form method="POST" action="/agenda/delete" style="display:inline">
			<input type="hidden" name="task_id" value="{{$task->id}}" />
			<button type="submit" class="btn btn-danger">DELETE</button>
			{{csrf_field()}}
		</form>

		<a class="btn btn-default" href="/">Back to Task</a>
	</div>

	<table>
	  <tr>
	    <td width="100px">	Task		</td>
	    <td>	:{{$task->task}}	</td>
	  </tr>
	  <tr>
	    <td>	Associates		</td>
	    <td>	:{{$task->associate}}</td>
	  </tr>
	  <tr>
	    <td>	Urgency			</td>
	    <td>	:{{$task->urgency}}	</td>
	  </tr>
	</table>
</div>
@endsection
