@extends('layouts.app')

@section('content')
<!-- MultiStep Form -->
<div class="row">
    <div class="col-sm-6 col-md-offset-6 mx-auto" style="z-index: 1;">
        <form id="msform" method="POST" action="{{route('regis_store_event')}}" enctype="multipart/form-data" style="margin-bottom: 40px; z-index: -1;">
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
                <h2 class="fs-title">Informasi Event</h2>
                <h3 class="fs-subtitle">Masukkan detail informasi tentang eventmu !</h3>
                <input type="text" name="e_name" placeholder="Nama Event"/>
                <input type="text" name="e_loc" placeholder="Lokasi Event"/>
                <input type="text" name="e_city" placeholder="Kota Event"/>
                <input type="text" name="e_desc" placeholder="Deskripsi Event"/>
                <input type="date" name="e_date1" placeholder="Jadwal Event"/>
                <label>Foto Stand</label>
                <input type="file" name="e_poster"style="border: none;>
                <span class="help-block text-danger">{{ $errors->first('file') }}</span>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Narahubung</h2>
                <h3 class="fs-subtitle">Orang yang dapat dihubungi saat pemesanan</h3> 
                <input type="text" name="e_telp" placeholder="Kontak Narahubung"/>
                <input type="email" name="e_email" placeholder="Email Narahubung"/>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="submit" class="submit action-button" value="Submit"/>
            </fieldset>
        </form>
    </div>
</div>

@endsection
