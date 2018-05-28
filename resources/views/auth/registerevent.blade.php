@extends('layouts.app')

@section('content')
<!-- MultiStep Form -->
<div class="row">
    <div class="col-sm-6 col-md-offset-6 mx-auto" style="z-index: 1;">
        <form id="msform" method="POST" action="{{route('regis_store_event')}}" enctype="multipart/form-data" style="margin-bottom: 40px; z-index: -1;">
            {{ csrf_field() }}
            <ul id="progressbar">
                <li class="active">Make Account</li>
                <li>Detail Information</li>
                <li>Contact Person</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Make an Account</h2>
                <h3 class="fs-subtitle">Lets make your Account!</h3>
                <input id="name" type="text" class="form-control" name="l_name" value="{{ old('l_name') }}" required placeholder="Username">
                    @if ($errors->has('name'))
                        <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                <input id="password" type="password" class="form-control" name="l_password" required placeholder="password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Event Information</h2>
                <h3 class="fs-subtitle">Enter the detail information about your event !</h3>
                <input type="text" name="e_name" placeholder="Event Name"/>
                <input type="date" name="e_date1" placeholder="Event Date"/>
                <input type="text" name="e_loc" placeholder="Event Location"/>
                <input type="text" name="e_city" placeholder="Event City"/>
                <input type="text" name="e_desc" placeholder="Event Description"/>
                <label>Event Poster</label>
                <input type="file" name="e_poster"style="border: none;>
                <span class="help-block text-danger">{{ $errors->first('file') }}</span>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Contact Person</h2>
                <h3 class="fs-subtitle">Who can be contacted when tenant is booking</h3> 
                <input type="text" name="e_telp" placeholder="Call Number"/>
                <input type="email" name="e_email" placeholder="Email"/>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="submit" class="submit action-button" value="Submit"/>
            </fieldset>
        </form>
    </div>
</div>

@endsection
