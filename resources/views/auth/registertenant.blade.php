@extends('layouts.app')

@section('content')
<!-- MultiStep Form -->
<div class="row">
    <div class="col-sm-6 col-md-offset-6 mx-auto" style="z-index: 1;">
        <form id="msform" method="POST" action="{{ route('regis_store_tenant') }}" enctype="multipart/form-data" style="margin-bottom: 40px;">
            {{ csrf_field() }}
        <!-- error handling -->
        @if(count($errors)>0)
            <ul>
                @foreach($errors->all() as $error)
                <li class="alert alert-danger">{{$error}}</li>
                @endforeach
            </ul>
        @endif
            <ul id="progressbar">
                <li class="active">Make Account</li>
                <li>Detail Information</li>
                <li>More About Product</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Make an Account</h2>
                <h3 class="fs-subtitle">Lets make your Account!</h3>
                <input id="name" type="text" class="form-control" name="l_name" value="{{ old('l_name') }}" required placeholder="Username">
                <input id="password" type="password" class="form-control" name="l_password" required placeholder="password">
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Product Information</h2>
                <h3 class="fs-subtitle">Enter the detail information about the product of your tenant !</h3>
                <input type="text" name="t_name" placeholder="Product Name"/>
                <input type="text" name="t_city" placeholder="Location of Production"/>
                <input type="text" name="t_telp" placeholder="Contact Person"/>
                <input type="email" name="t_email" placeholder="Email"/>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Product Zone</h2>
                <h3 class="fs-subtitle">More about your product !</h3>
                <div class="form-group">
                    <label for="t_type">Type of Product</label>
                    <select class="form-control" name="t_type" id="t_type">
                      <option value="Food & Drink" >Food & Drink</option>
                      <option value="Fashion">Fashion</option>
                      <option value="Merchandise">Merchandise</option>
                      <option value="Services">Services</option>
                      <option value="Marketing & Property">Marketing & Property</option>
                    </select>
                </div>
                <input type="text" name="t_desc" placeholder="Description about your product"/>
                <label>Product Photo</label>
                    <input type="file" name="t_product" style="border: none;">
                    <span class="help-block text-danger">{{ $errors->first('file') }}</span>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="submit" class="submit action-button" value="Submit"/>
            </fieldset>
        </form>
    </div>
</div>

@endsection
