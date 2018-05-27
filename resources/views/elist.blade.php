@extends('layouts.app')

@section('content')
	<div class="container rounded" style="background-color: white; padding: 10px;margin-top: 10%;">
	<div class="container rounded" style="background-color: #2c3e50;padding: 8px; color: white;">
		<div class="row">
			@foreach($standposts as $post)
				<div class="row" style="margin: 5px;">
				<div class="col-md-3">
					<img class="img-thumbnail float-left" src="{{ Storage::url($post->e_poster) }}"> </div>
				<div class="col-md-3">
					<h3>{{ $post->e_name }}</h3>
					<p>{{ $post->e_description }}</p> 
					<form action="book.php" method="post">
					<button name="pesan" value="{{ $post->s_id }}" type="submit" class="btn btn-danger" style="padding:0px 10 0px 10px;">PESAN</button>
					</form>
				</div>

				<div class="col-md-1 panel panel-default">
					<table class="table" style="border-radius: 6px;">
						<thead class="thead-light" style="text-align: center;">
							<tr><th>Jadwal</th></tr>
						</thead>
						<tbody class="bg-warning" style="color: black; font-weight: 600;">
							<tr><td>{{ $post->e_date }}</td></tr>
						</tbody>
					</table>
				</div>
				<div class="col-md-2 panel panel-default">
					<table class="table" style="border-radius: 6px;">
						<thead class="thead-light" style="text-align: center;">
							<tr><th>Tempat</th></tr>
						</thead>
						<tbody class="bg-warning" style="color: black; font-weight: 600;">
							<tr><td>{{ $post->e_location.$post->e_city }}</td></tr>
						</tbody>
					</table>
				</div>
				<div class="col-md-1 panel panel-default">
					<table class="table" style="border-radius: 6px;">
						<thead class="thead-light" style="text-align: center;">
							<tr><th>Kuota</th></tr>
						</thead>
						<tbody class="bg-warning" style="color: black; font-weight: 600;">
							<tr><td>{{ $post->s_available }}</td></tr>
						</tbody>
					</table>
				</div>
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