@extends('layouts.app')

@section('content')
	<div class="container" style="margin-top: 8%;text-align: center;">
		<div class="row">
		<div class="col-md-3 card" style="display: table; background-color: white; color: black;">
			@if(Auth::User()->role === 1)
  			<img src="{{ Storage::url($profiles->first()->e_poster) }}" alt="thevent" style="width: 250px; height: 250px;">
  			<div>
			  <h1>{{ $profiles->first()->e_name }}</h1>
			  <p>Admin @ {{ Auth::User()->username }}</p>
			  <p class="title">Member of Stand Event</p>
			  <p><b>Description</b></p>
			  <p>{{ $profiles->first()->e_date }}</p>
			  <p>@ {{ $profiles->first()->e_location }}, {{ $profiles->first()->e_city }}</p>
			  <p>{{ $profiles->first()->e_email }}</p>
			@else
			<img src="{{ Storage::url($profiles->first()->t_product) }}" alt="theproduct" style="width: 250px; height: 250px;">
  			<div>
			  <h1>{{ $profiles->first()->t_name }}</h1>
			  <p>Admin @ {{ Auth::User()->username }}</p>
			  <p class="title">Member of Stand Event</p>
			  <p><b>Description</b></p>
			  <p>@ {{ $profiles->first()->t_city }}</p>
			  <p>{{ $profiles->first()->t_type }}</p>
			  <p>{{ $profiles->first()->t_email }}</p>
			@endif
			 <div style="margin: 24px 0;">
			    <a href="#"><i class="fa fa-dribbble"></i></a> 
			    <a href="#"><i class="fa fa-twitter"></i></a>  
			    <a href="#"><i class="fa fa-linkedin"></i></a>  
			    <a href="#"><i class="fa fa-facebook"></i></a> 
			 </div>
			</div>
		</div>
			<div class="col-md-9">
			<div class="container rounded" style="background-color: white; padding: 10px;">
				<div class="container rounded" style="background-color: white; color: black; padding: 8px;"">
				
				@if(Auth::User()->role === 1)
					<div class="row pull-right">
						<a class="btn btn-primary btn-lg pull-right" href="{{ route('post') }}" style="margin-left: -70px; padding: 7px 15px;">+</a>
					</div>
					<h2>History Post</h2><hr>
					@foreach($profiles as $profile)
					<div class="row">
						<div class="col-md-2">
							<img class="img-thumbnail float-left" src="{{ Storage::url($profile->s_photo) }}">
						</div>
						<div class="col-md-3">
							<h3>Facility</h3>
							<p>{{ $profile->s_fac_desc }}</p>
						</div>
						<div class="col-md-7" id="prof-tbl">
							<table class="table">
								<thead>
									<tr>
										<th>Stand ID</th>
										<th>Stand Size</th>
										<th>Price</th>
										<th>Available</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>{{ $profile->s_id }}</td>
										<td>{{ $profile->s_length }} x {{ $profile->s_width }} m<sup>2</sup></td>
										<td>{{ $profile->s_price }}</td>
										<td>{{ $profile->s_available }}</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div><hr>
					@endforeach
				@else
					<div class="row pull-right">
						<a class="btn btn-primary btn-lg pull-right" href="{{ route('elist') }}" style="margin-left: -70px; padding: 7px 15px;">+</a>
					</div>
					<h2>Book History</h2><hr>
					@foreach($profiles as $profile)
					<div class="row">
						<div class="col-md-2">
							<img class="img-thumbnail float-left" src="{{ Storage::url($profile->s_photo) }}">
						</div>
						<div class="col-md-2">
							<h3>{{ $profile->e_name }}</h3>
						</div>
						<div class="col-md-8" id="prof-tbl">
							<table class="table">
								<thead>
									<tr>
										<th>Date</th>
										<th>Size</th>
										<th>Price</th>
										<th>Book Time</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>{{ $profile->e_date }}</td>
										<td>{{ $profile->s_length }} x {{ $profile->s_width }} m<sup>2</sup></td>
										<td>{{ $profile->s_price }}</td>
										<td>{{ $profile->book_time }}</td>
										<td>{{ $profile->book_status }}</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div><hr>
					@endforeach
				@endif
					
				</div>
			</div>
			</div>
		</div>
	</div>
	<style type="text/css">
		#prof-tbl .table th, .table td{
  			padding: 0.4rem;
		}
	</style>
@endsection