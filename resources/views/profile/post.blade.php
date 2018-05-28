@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-6 col-md-offset-6 mx-auto">
        <form id="msform" method="POST" action="{{route('post_store')}}" style="margin-bottom: 40px;" enctype="multipart/form-data">
            {{ csrf_field() }}
            <ul id="progressbar">
                <li class="active">Fasilitas</li>
                <li>Detail Stand</li>
                <li>Foto Stand</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Ada apa aja nih di stand mu?</h2>
                <h3 class="fs-subtitle">Checklist yang ada ya !</h3>
                <div class="form-check" id="Fasilitas">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="row">
                                <input class="form-check-input" type="checkbox" name="kursi" value="1" id="kursi">
                                <label class="form-check-label" for="kursi">Kursi</label>
                            </div>
                            <div class="row">
                                <input class="form-check-input" type="checkbox" name="meja" value="1" id="meja">
                                <label class="form-check-label" for="meja">Meja</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <input class="form-check-input" type="checkbox" name="lampu" value="1" id="lampu">
                                <label class="form-check-label" for="lampu">Lampu</label>
                            </div>
                            <div class="row">
                                <input class="form-check-input" type="checkbox" name="kabel" value="1" id="kabel">
                                <label class="form-check-label" for="kabel">Kabel Roll</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <input class="form-check-input" type="checkbox" name="tenda" value="1" id="tenda">
                                <label class="form-check-label" for="tenda">Tenda</label>
                            </div>
                            <div class="row">
                                <input class="form-check-input" type="checkbox" name="tv" value="1" id="tv">
                                <label class="form-check-label" for="tv">Tv</label>
                            </div>
                        </div>
                    </div>
                </div>
                <input id="fasilitas" type="text" class="form-control" name="s_desc" value="{{ old('email') }}" required placeholder="Deskripsi tambahan pada fasilitas">
                    @if ($errors->has('s_desc'))
                        <span class="help-block">
                        <strong>{{ $errors->first('s_desc') }}</strong>
                        </span>
                    @endif
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Ukuran & Harga</h2>
                <h3 class="fs-subtitle">Pastikan ukuran dan harga benar ya!</h3>
                <input type="text" name="s_width" placeholder="Lebar Stand"/>
                <input type="text" name="s_length" placeholder="Panjang Stand"/>
                <input type="text" name="s_price" placeholder="Harga per Stand"/>
                <input type="text" name="s_kuota" placeholder="Kuota Stand"/>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Upload Stand</h2>
                <h3 class="fs-subtitle">Upload foto standmu dan selesai!</h3> 
                <div class="form-group {{ !$errors->has('file') ?: 'has-error' }}">
                    <label>Foto Booth</label>
                    <input type="file" name="s_photo" style="border:none;">
                    <span class="help-block text-danger">{{ $errors->first('file') }}</span>
                </div>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="submit" class="submit action-button" value="Submit"/>
            </fieldset>
        </form>
    </div>
</div>
@endsection