@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 10%;">
	<table class="table table-hover">
	  <thead class="bg-warning">
	  	@foreach($booklists as $book)
	  		@php $count=0 @endphp
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Tenant</th>
	      <th scope="col">Tenant Type</th>
	      <th scope="col">Tenant Product</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody class="table-light">
	    <tr>
	      <th scope="row">{{ $count+=1 }}</th>
	      <td>{{ $book->t_name }}</td>
	      <td>{{ $book->t_type }}</td>
	      <td>
	      	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#images">
                lihat
                </button>
          </td>
	      <td>
	      	<form action="{{ route('booking_validation') }}"" method="post">
				{{ csrf_field() }}
				<input type="hidden" name="bookid" value="{{ $book->b_id }}">
	      		<button type="submit" name="accept" value="1" class="btn btn-success">Accept</button>
	      		<button type="submit" name="decline" value="2" class="btn btn-danger">Decline</button>
	      	</form>
	      </td>
	    </tr>
	  </tbody>
	  <div class="modal fade" id="images" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-body">
	        <img src="{{ Storage::url($book->t_product) }}" class="img-fluid" alt="Responsive image">
	      </div>
	      </div>
	  </div>
	</div>
	  @endforeach
	</table>
</div>
@endsection