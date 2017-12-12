@extends('layout')
@section('content')
<div class="container">
	<div class="well">
		<a class="btn btn-success" href="/tasks/edit/{{$product->id}}">EDIT</a>

		<form method="POST" action="/tasks/delete" style="display:inline">
			<input type="hidden" name="task_id" value="{{$product->id}}" />
			<button type="submit" class="btn btn-danger">DELETE</button>
		</form>

		<a class="btn btn-default" href="/tasks">Back to Task</a>
	</div>

	<table>
	  <tr>
	    <td width="100px">	Task		</td>
	    <td>	:{{$agenda->task}}	</td>
	  </tr>
	  <tr>
	    <td>	Associates		</td>
	    <td>	:{{$agenda->associate}}</td>
	  </tr>
	  <tr>
	    <td>	Urgency			</td>
	    <td>	:{{$agenda->urgency}}	</td>
	  </tr>
	</table>
</div>
@endsection
