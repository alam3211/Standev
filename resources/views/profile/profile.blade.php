@extends('layouts.app')

@section('content')
	<div class="container" style="margin-top: 8%;">
		<div class="row">
			<div class="col-md-3">
				<div class="container">
					<div class="row">
						<div class="card card-profile text-center">
					  		<img class="card-img-top" src="https://unsplash.it/340/160?image=354">
					  		<div class="card-block">
					    		<img class="card-img-profile" src="{{ Storage::url($imgprofile) }}" style="margin-top: -95px; border-radius: 50%; border: 5px solid white;">
					   			<h5 class="card-title">{{ Auth::User()->username }}</h5>
					    		<div class="card-links">
					      			<a class="fa fa-facebook-square" href="#"></a>
					     		</div>
					     	</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-9">
			<div class="container rounded" style="background-color: white; padding: 10px;">
				<div class="container rounded" style="background-color: grey;padding: 8px;"">
					<h2>History Post</h2>
					@foreach($profiles as $profile)
					<div class="row">
						<div class="col-md-2">
							<img class="img-thumbnail float-left" src="images/thm.jpg">
						</div>
						<div class="col-md-5">
							<h3>{{ $profile->e_name }}</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
						<div class="col-md-5">
							<table>
								<thead>
									<tr>
										<th>Jadwal</th>
										<th>Harga</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Sabtu, 5 Maret 2019 11.00 PM - 12.00 PM Gedung Aiola, Surabaya</td>
										<td>150K - 300K</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					@endforeach
					<div class="row pull-right">
						<button class="btn btn-primary btn-lg align-right pull-right" style="margin: 5px;">Post Event</button>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
@endsection