@extends('layouts.app')

@section('content')
	<div class="container" style="margin-top: 8%;">
		<div class="row">
		<div class="card col-md-3">
  			<img src="images/thm.jpg" alt="theproduct" style="width: 250px; height: 250px;">
			  <h1>{{ Auth::User()->username }}</h1>
			  <p class="title">Member of Stand Event</p>
			  <div style="margin: 24px 0;">
			    <a href="#"><i class="fa fa-dribbble"></i></a> 
			    <a href="#"><i class="fa fa-twitter"></i></a>  
			    <a href="#"><i class="fa fa-linkedin"></i></a>  
			    <a href="#"><i class="fa fa-facebook"></i></a> 
			 </div>
			 <p><button>Contact</button></p>
		</div>
			<!-- <div class="col-md-3">
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
			</div> -->
			<div class="col-md-9">
			<div class="container rounded" style="background-color: white; padding: 10px;">
				<div class="container rounded" style="background-color: grey;padding: 8px;"">
				@if(Auth::User()->role === 1)
					<h2>History Post</h2>
					@foreach($profiles as $profile)
					<div class="row">
						<div class="col-md-2">
							<img class="img-thumbnail float-left" src="images/thm.jpg">
						</div>
						<div class="col-md-5">
							<h3>{{ $profile->e_name }}</h3>
							<p>{{ $profile->e_description }}</p>
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
										<td>{{ $profile->e_startdate }}</td>
										<td>{{ $profile->s_price }}</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					@endforeach
				@else
					<h2>Book History</h2>
					@foreach($profiles as $profile)
					<div class="row">
						<div class="col-md-2">
							<img class="img-thumbnail float-left" src="images/thm.jpg">
						</div>
						<div class="col-md-5">
							<h3>{{ $profile->t_name }}</h3>
							<p>{{ $profile->t_description }}</p>
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
										<td>{{ $profile->t_name }}</td>
										<td>{{ $profile->t_name }}</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					@endforeach
				@endif
					<div class="row pull-right">
						<button class="btn btn-primary btn-lg align-right pull-right" style="margin: 5px;">Post Event</button>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
@endsection