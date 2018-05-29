@extends('layouts.app')

@section('styling')
background-image : none;
@endsection    

@section('head')
    <script src="{{ URL::asset('js/please-wait.min.js') }}"></script>
    <script type="text/javascript">
        window.loading_screen = window.pleaseWait({
          logo: "images/logonya.png",
          backgroundColor: '#c0392b',
          loadingHtml: "<div class='sk-spinner sk-spinner-wave'><div class='sk-rect1'></div><div class='sk-rect2'></div><div class='sk-rect3'></div><div class='sk-rect4'></div><div class='sk-rect5'></div></div>"
        });
    </script>
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
    		<div class="col-md-6 col-sm-8 text-justify" style="padding: 1%;">
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
    <div class="parallax">
            <div class="container mx-auto" style="padding: 100px 0px;">
                <div class="main_title">
                    <h2>Why Choose StandEv ?</h2>
                </div>
                <div class="row">
                    <div class="col-md-3 mr-auto rounded cool-box" style="background-color: white;">
                        <div class="service_item">
                            <i class="fa fa-user fa-fw"></i>
                            <h3>Easy to use</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since .</p>
                        </div>
                    </div>
                    <div class="col-md-3 mr-auto rounded cool-box" style="background-color: white;">
                        <div class="service_item">
                            <i class="fa fa-user fa-fw"></i>
                            <h3>Make it Easy ! </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since .</p>
                        </div>
                    </div>
                    <div class="col-md-3" style="background-color: white;">
                        <div class="service_item rounded cool-box">
                            <i class="fa fa-user fa-fw"></i>
                            <h3>Facilitate Users</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since .</p>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</div>
<footer class="footer-social-icon text-center" id="footer" style="background-color: #993333; color: white; padding: 1% 1% 1px 1%;">
        <div class="footer-text">
            <h2>StandEv</h2>
        </div>
        <hr style="background-color: white;">
        <div class="footer-social-icon">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="active fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
        </div>
        <div class="footer-menu">
            <nav>
                <a href="#">About</a> | <a href="#">Terms &amp; Conditions</a> | <a href="#">Contact</a>
            </nav>
        </div>
        <div class="copyright-text">
            <p>Copyright ©2018 StandEv Designed by <a href="#" target="_blank">Potato Dev</a></p>
        </div>
    </footer>
    <style type="text/css">
        #footer a {
            color: white;
        }
    </style>
       <script type="text/javascript">
            window.loading_screen.finish();
        </script> 
@endsection
