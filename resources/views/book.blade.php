@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 5%;">
	<div class="row" id="book-form">
		<div class="col-md-4">
			
		</div>
		<div class="col-md-4">
			<form action="" method="POST">
				<label for="name">Name</label>
				<input id="name" type="text" class="form-control" name="name">
				<label for="name">Event</label>
				<input id="ev" type="text" class="form-control" name="name">
				<label for="name">Size</label>
				<input id="sz" type="text" class="form-control" name="name">
				<label for="name">Type Stand</label>
				<input id="typest" type="text" class="form-control" name="name">
			</form>
		</div>
		<div class="col-md-4">
			
		</div>
	</div>
</div>
@endsection