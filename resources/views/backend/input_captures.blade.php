@extends('backend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Input Captures</div>
                
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action='{{ (Route::currentRouteName() == "index") ? "/input_captures" : "/input_captures/$captures->id" }}' enctype="multipart/form-data">
                        {{ csrf_field() }}
                        
                        <div class="form-group{{ $errors->has('id_barang') ? ' has-error' : '' }}">
                            <label for="id_barang" class="col-md-2 control-label">ID Barang</label>

                            <div class="col-md-6">
                                <input id="id_barang" type="text" class="form-control" name="id_barang" value="{{ (Route::currentRouteName() == 'index') ? '' : $captures->id_barang }}"required autofocus>
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
