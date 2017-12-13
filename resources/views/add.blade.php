@extends('layout')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6">

	<h1>Add Task</h1>

	@if($success)
		<div class="alert alert-success" role="alert">
			Task successfully noted.
		</div>
	@endif

	<form class="form" method="POST">
		<div class="form-group">
			<label for="task">
				Task
			</label>
			<input type="text" class="form-control" id="task" name="task" placeholder="Task at hand" />
		</div>

		<div class="form-group">
			<label for="associate">
				Associates
			</label>
			<input type="text" class="form-control" id="associate" name="associate" placeholder="Associate/Associates involved" />
		</div>

		<div class="form-group">
			<label for="urgency">
				Urgency
			</label>
			<input type="text" class="form-control" id="urgency" name="urgency" placeholder="Level of urgency" />
		</div>

		<div class="form-group">
			<button class="btn btn-success btn-small" type="submit">
				Confirm
			</button>
			<a class="btn btn-default" href="/">Back to Task</a>
		</div>
	</form>

    </div>
  </div>
</div>
@endsection
