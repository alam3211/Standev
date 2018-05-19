@extends('layouts.app')

@section('content')
<div class="container col-md-8" style="background-color: grey; margin-top: 8%;">
    <div class="row col-md-12" style="color: white;font-weight: 600;">
          <div class="panel panel-default col-md-6">
          	<div class="panel-heading">
    			<h3 class="panel-title">Panel title</h3>
  			</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Nama Event</label>

                            <div class="col-md-9">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('email') }}" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="desc" class="col-md-4 control-label">Deskripsi Event</label>

                            <div class="col-md-9">
                                <input id="desc" type="text" class="form-control" name="desc" value="{{ old('email') }}" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="time" class="col-md-4 control-label">Waktu Event</label>

                            <div class="col-md-9">
                                <input id="time" type="date" class="form-control" name="time" required>
                            </div>
                        </div>

                        <div class="form-group">
                        	<div class="container">
                        	<div class="row">
                            	<label for="contact" class="col-md-3 control-label">Narahubung</label>
                        		<label for="price" class="col-md-3 control-label">Harga</label>
                        		<label for="kuota" class="col-md-3 control-label">Kuota</label>
                        	</div>
                        	<div class="row">
                        		<div class="col-md-3">
                                	<input id="contact" type="text" class="form-control" name="contact" required>
                            	</div>
                            	<div class="col-md-3">
                                	<input id="contact" type="text" class="form-control" name="contact" required>
                            	</div>
                            	<div class="col-md-3">
                                	<input id="contact" type="text" class="form-control" name="contact" required>
                            	</div>
                        	</div>
                        	</div>
                         

                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> 
             <div class="col-md-6">
    			<form>
					<div class="form-group">
		    			<label for="foto">Poster Event</label>
		    			<input type="file" class="form-control-file" id="foto">
					</div>
					<div class="form-group">
		    			<label for="foto2">Foto Denah</label>
		    			<input type="file" class="form-control-file" id="foto2">
					</div>
				</form>
   			 </div>  
    </div>
 
</div>
@endsection