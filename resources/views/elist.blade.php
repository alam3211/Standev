@extends('layouts.app')

@section('content')
	@isset($standposts)
	<div class="container rounded" style="padding: 10px;margin-top: 6%; background-color: #262626;">
	<div class="container rounded" style="background-color: #2c3e50;padding: 8px; color: white; background: transparent;">
		<div class="row">
			@foreach($standposts as $post)
				<div class="row" style="margin: 10px;">
				<div class="col-md-2">
					<img class="img-thumbnail float-left" src="{{ Storage::url($post->e_poster) }}"> </div>
				<div class="col-md-9" id="but">
					<h1>{{ $post->e_name }}</h1>
					<p>{{ $post->e_description }}</p>
					<span>
					<button class="btn btn-danger">Kuota<br><b>{{ $post->s_available }}</b></button>
					</span>
					<span>
					<button class="btn btn-warning">Date<br><b>{{ $post->e_date }}</b></button>
					</span>
					<span>
					<button class="btn btn-primary">Place<br><b>{{ $post->e_city }}</b></button>
					</span>
					<span>
					<button class="btn btn-success">Price<br><b>{{ $post->s_price }}</b></button>
					</span>
					<span>
					<button class="btn btn-dark"><b>Read<br>More</b></button>
					</span>
					
				</div>
				<div class="col-md-1" style="margin-top: 15%;">
					@if(Auth::Check())
						@if(Auth::User()->role !== 1)
						<form action="{{ route('booking_store') }}"" method="post">
						<button name="pesan" value="{{ $post->s_id }}" type="submit" class="btn btn-danger">BOOKING</button>
						</form>
						@endif
					@endif
				</div>
				<!-- <div class="col-md-2 panel panel-default">
					<table class="table" style="border-radius: 6px;">
						<thead class="thead-light" style="text-align: center;">
							<tr><th>Tempat</th></tr>
						</thead>
						<tbody class="bg-warning" style="color: black; font-weight: 600;">
							<tr><td>{{ $post->e_location.$post->e_city }}</td></tr>
						</tbody>
					</table>
				</div> -->
				</div>
			@endforeach
		</div>
	</div>
	</div>
	@endisset
	@empty($standposts)
	<div class="d-flex  justify-content-center" style="margin-top: 15%;">
	<h1><span class="badge badge-secondary badge-warning"><b>Tidak Ada Post</b></span></h1>
	</div>
	@endempty
@endsection