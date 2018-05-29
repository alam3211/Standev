@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-6 col-md-offset-2 mx-auto" style="margin-top: 3%;">
        <form id="msform" method="POST" action="{{route('reset')}}" style="margin-bottom: 40px;">
            {{ csrf_field() }}
            <!-- error handling -->
            @if(count($errors)>0)
                <ul>
                    @foreach($errors->all() as $error)
                    <li class="alert alert-danger">{{$error}}</li>
                    @endforeach
                </ul>
            @endif            
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Reset Password</h2>
                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required placeholder="Email">
                    @if ($errors->has('username'))
                        <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                <input id="username" type="password" class="form-control" name="newpassword" value="{{ old('password') }}" required placeholder="New Password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                <input id="password" type="password" class="form-control" name="password" required placeholder="Retype password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                <input type="submit" class="submit action-button" value="Reset"/>
            </fieldset>            
        </form>
    </div>
</div>
@endsection
