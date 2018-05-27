@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-6 col-md-offset-2 mx-auto" style="margin-top: 3%;">
        <form id="msform" method="POST" action="{{route('login')}}" style="margin-bottom: 40px;">
            {{ csrf_field() }}
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Login</h2>
                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required placeholder="Username">
                    @if ($errors->has('name'))
                        <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                <input id="password" type="password" class="form-control" name="password" required placeholder="password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                 <div class="d-flex justify-content-start">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me 
                        </label>

                    </div>
                </div>  
                           
                <input type="submit" class="submit action-button" value="Submit"/>
                <a class="btn btn-link" id="hover" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>         
            </fieldset>            
        </form>
    </div>
</div>
@endsection
