@extends('layouts/app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">

	<div class="well">
		<a class="btn btn-warning btn-small" href="/media/upload">
			Upload New
		</a>
	</div>

	<table class="table table-bordered">
		<tr>
		    <th>Filename</th>
		    <th>Type</th>
		    <th>Download</th>
		</tr>

		@foreach($contents as $file)
			<tr>
			    <th>  {{ $file['basename'] }}  </th>
			    <th>  {{ $file['type'] }}	</th>
			    <th>  <a href="/storage/{{$file['basename']}}" >{{$file['basename']}}</a>	</th>
			</tr>
		@endforeach()

	</table>

    </div>
  </div>
</div>

@endsection()
