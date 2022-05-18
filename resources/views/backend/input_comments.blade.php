@extends('backend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Input Comments</div>
                
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action='{{ (Route::currentRouteName() == "index") ? "/input_comment" : "/input_comment/$comments->id" }}' enctype="multipart/form-data">
                        {{ csrf_field() }}
                        
                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-2 control-label">Nama</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ (Route::currentRouteName() == 'index') ? '' : $comments->nama }}"required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('id_barang') ? ' has-error' : '' }}">
                            <label for="id_barang" class="col-md-2 control-label">ID Barang</label>

                            <div class="col-md-6">
                                <input id="id_barang" type="text" class="form-control" name="id_barang" value="{{ (Route::currentRouteName() == 'index') ? '' : $comments->id_barang }}"required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                            <label for="comment" class="col-md-2 control-label">Comment</label>

                            <div class="col-md-6">
                                <input id="comment" type="text" class="form-control" name="comment" value="{{ (Route::currentRouteName() == 'index') ? '' : $comments->comment }}"required autofocus>
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
