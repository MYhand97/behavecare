@extends('backend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Input Places</div>
                
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action='{{ (Route::currentRouteName() == "index") ? "/input_places" : "/input_places/$places->id" }}' enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('kategori') ? ' has-error' : '' }}">
                            <label for="kategori" class="col-md-2 control-label">Kategori</label>

                            <div class="col-md-6">
                                <input id="kategori" type="text" class="form-control" name="kategori" value="{{ (Route::currentRouteName() == 'index') ? '' : $places->kategori }}"required autofocus>
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-2 control-label">Nama</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ (Route::currentRouteName() == 'index') ? '' : $places->nama }}"required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('harga') ? ' has-error' : '' }}">
                            <label for="harga" class="col-md-2 control-label">Harga</label>

                            <div class="col-md-6">
                                <input id="harga" type="text" class="form-control" name="harga" value="{{ (Route::currentRouteName() == 'index') ? '' : $places->harga }}"required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('harga_paket') ? ' has-error' : '' }}">
                            <label for="harga_paket" class="col-md-2 control-label">Harga Paket</label>

                            <div class="col-md-6">
                                <input id="harga_paket" type="text" class="form-control" name="harga_paket" value="{{ (Route::currentRouteName() == 'index') ? '' : $places->harga_paket }}"required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('full_ket') ? ' has-error' : '' }}">
                            <label for="full_ket" class="col-md-2 control-label">Full Keterangan</label>

                            <div class="col-md-6">
                                <input id="full_ket" type="text" class="form-control" name="full_ket" value="{{ (Route::currentRouteName() == 'index') ? '' : $places->full_ket }}"required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('short_ket') ? ' has-error' : '' }}">
                            <label for="short_ket" class="col-md-2 control-label">Short Keterangan</label>

                            <div class="col-md-6">
                                <input id="short_ket" type="text" class="form-control" name="short_ket" value="{{ (Route::currentRouteName() == 'index') ? '' : $places->short_ket }}"required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-md-2 control-label">Alamat</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ (Route::currentRouteName() == 'index') ? '' : $places->alamat }}"required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gmaps') ? ' has-error' : '' }}">
                            <label for="gmaps" class="col-md-2 control-label">Google Maps</label>

                            <div class="col-md-6">
                                <input id="gmaps" type="file" class="form-control" name="gmaps" autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                            <label for="file" class="col-md-2 control-label">Foto</label>

                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control" name="file" autofocus>
                            </div>
                        </div>

                        @include('partials.formerrors')
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
