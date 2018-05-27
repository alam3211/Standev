@extends('layouts.app')

@section('content')
	<div class="container rounded" style="background-color: white; padding: 10px;margin-top: 10%;">
	<div class="container rounded" style="background-color: #2c3e50;padding: 8px; color: white;">
		<div class="row">
			@foreach($standposts as $post)
				<div class="row" style="margin: 5px;">
				<div class="col-md-3">
					<img class="img-thumbnail float-left" src="images/thm.jpg"> </div>
				<div class="col-md-5">
					<h3>{{ $post->e_name }}</h3>
					<p>{{ $post->e_description }}</p> 
					<form action="book.php" method="post">
					<button name="pesan" value="{{ $post->id }}" type="submit" class="btn btn-danger" style="padding:0px 10 0px 10px;">PESAN</button>
					</form>
				</div>

				<div class="col-md-2 panel panel-default">
					<table class="table" style="border-radius: 6px;">
						<thead class="thead-light" style="text-align: center;">
							<tr><th>Jadwal</th></tr>
						</thead>
						<tbody class="bg-warning" style="color: black; font-weight: 600;">
							<tr><td>{{ $post->e_startdate }}</td></tr>
						</tbody>
					</table></div>
				<div class="col-md-2">
					<table class="table">
						<thead class="thead-light" style="text-align: center;">
							<tr><th>Harga</th></tr>
						</thead>
						<tbody class="bg-warning" style="color: black; font-weight: 600;">
							<tr rows="3"><td>{{ $post->s_price }}</td></tr>
						</tbody>
					</table>
				</div>
				</div>
			@endforeach
		</div>
	</div>
	</div>
@endsection