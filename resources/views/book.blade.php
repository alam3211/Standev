@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 5%;">
	<div class="row" id="book-form">
		<div class="col-md-4">
			
		</div>
		<div class="col-md-4">
			<form action="" method="POST">
				<label for="name">Event</label>
				<input id="ev" type="text" class="form-control" name="name"><br>
				<label for="name">Type Stand</label>
				<input id="typest" type="text" class="form-control" name="name"><br>
				<input type="submit" class="btn btn-primary btn-lg" name="book" value="book">
			</form>
		</div>
		<div class="col-md-4">
			
		</div>
	</div>
</div>
@endsection