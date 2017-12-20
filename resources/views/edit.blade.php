@extends('layouts/app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6">

	<h1>Edit Product</h1>

	@if($success)
		<div class="alert alert-success" role="alert">
			Task successfully updated!
		</div>
	@endif

	<form class="form" method="POST">
		<div class="form-group">
			<label for="task">Task</label>
			<input type="text" class="form-control" id="task" name="task" value="{{$agenda->task}}" 
			placeholder="Task at hand" />
		</div>

		<div class="form-group">
			<label for="associate">Associate</label>
			<input type="text" class="form-control" id="associate" name="associate" value="{{$agenda->associate}}" 
			placeholder="Associate/Associates involved" />
		</div>

		<div class="form-group">
			<label for="urgency"></label>
			<input type="text" class="form-control" id="urgency" name="urgency" value="{{$agenda->urgency}}" 
			placeholder="urgency" />
		</div>

		<div class="form-group">
			<button class="btn btn-success btn-small" type="submit">Change</button>
			<a class="btn btn-default" href="/">Back to Task</a>
		</div>

		{{csrf_field()}}
	</form>

    </div>
  </div>
</div>
@endsection
