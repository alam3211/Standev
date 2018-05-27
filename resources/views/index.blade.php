@extends('layouts.app')

@section('styling')
background-image : none;
@endsection    

@section('content')
<div class="cd-background-wrapper">
		<div class="parallax"></div>
        <figure class="cd-floating-background">
            <img src="images/cd-img-1.png" alt="image-2">
            <img src="images/cd-img-3.png" alt="image-3">
        </figure>
</div>
<div style="background:white;height: 450px;overflow: hidden;">
    <div class="container" style="margin: 3%">
    	<div class="row">
    		<div class="col-sm-6 text-justify">
    			<h2>solusi yang mudah</h2>
    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    			<a href="{{ route('register_tenant') }}"><button class="action-button" >Daftar Sekarang</button></a>
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
