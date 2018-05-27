@extends('layouts.app')

@section('content')
<!-- MultiStep Form -->
<div class="row">
    <div class="col-sm-6 col-md-offset-6 mx-auto">
        <form id="msform" method="POST" action="{{ route('regis_store_tenant') }}" enctype="multipart/form-data" style="margin-bottom: 40px;">
            {{ csrf_field() }}
            <ul id="progressbar">
                <li class="active">Pembuatan Akun</li>
                <li>Informasi Detail</li>
                <li>Narahubung</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Buat Akun</h2>
                <h3 class="fs-subtitle">Yuk buat akunmu!</h3>
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
                <h2 class="fs-title">Informasi Diri</h2>
                <h3 class="fs-subtitle">Masukkan detail informasi tentang kamu !</h3>
                <input type="text" name="t_name" placeholder="Nama Lengkap"/>
                <input type="text" name="t_city" placeholder="Lokasi Tinggal"/>
                <input type="text" name="t_telp" placeholder="Nomor Telefon"/>
                <input type="email" name="t_email" placeholder="Email Narahubung"/>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Product Zone</h2>
                <h3 class="fs-subtitle">Yuk ceritain apa yang kamu jual!</h3>
                <div class="form-group">
                    <label>Berkas</label>
                      <input type="file" name="t_product">
                      <span class="help-block text-danger">{{ $errors->first('file') }}</span>
                    <label for="t_type">Tipe Stand</label>
                    <select class="form-control" name="t_type" id="t_type">
                      <option value="Makanan & Minuman" >Makanan & Minuman</option>
                      <option value="Fashion">Fashion</option>
                      <option value="Merchandise">Merchandise</option>
                      <option value="Jasa">Jasa</option>
                      <option value="Marketing & Property">Marketing & Property</option>
                    </select>
                </div>
                <input type="text" name="t_desc" placeholder="Deskripsi Produk kamu"/>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="submit" class="submit action-button" value="Submit"/>
            </fieldset>
        </form>
    </div>
</div>

@endsection
