@extends('layouts.app')

@section('styling')
background-image : none;
@endsection    

@section('content')
<div class="cd-background-wrapper">
		<div class="parallax"></div>
        <figure class="cd-floating-background">
            <img src="images/cd-img-1.png" alt="image-1">
            <img src="images/cd-img-3.png" alt="image-2">
        </figure>
</div>
<div style="background:white;height: 450px;overflow: hidden;">
    <div class="container" style="margin: 3%">
    	<div class="row">
    		<div class="col-sm-6 text-justify">
    			<h2>The BEST Solution!</h2>
    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    			<button class="action-button" data-toggle="modal" data-target="#exampleModalCenter">Register Now</button>
                <!-- MODAL REGISTER -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content transparent">
                      <div class="modal-body">
                        <a href="{{ route('register_tenant') }}"><h4><button class="action-button" data-toggle="modal" data-target="#exampleModalCenter">I'm a Tenant</button></h4></a>
                      </div>
                    </div>
                     <div class="modal-content transparent" style="margin: 5%;"">
                        <a href="{{ route('register_event') }}"><h4><button class="action-button" data-toggle="modal" data-target="#exampleModalCenter">I have an Event</button></h4></a>
                    </div>
                  </div>
                </div>
    		</div>
    		<div class="col-sm-3">
    			<img src="images/m1.png">
    		</div>
    		<div class="col-sm-3">
    			<img src="images/m2.png">
    		</div>
    	</div>
    </div>
</div>
<div class="cd-background-wrapper">
	<div class="parallax"></div>
</div>
@endsection
