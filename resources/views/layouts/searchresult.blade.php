@extends('layouts.app')

@section('content')
<div class="row text-center">
    <div class="col-md-10 col-md-offset-1">
        @foreach ($places as $place)
        <div class="col-6 col-md-4"> 
            <a href="/content/{{ $place->kategori }}/{{ $place->id }}"><img class="d-block w-100" src="{{ asset($place->file_path) }}" style="padding-left: 10px; padding-right: 10px;"></a>
            <h3>{{ $place->nama }}</h3>
        </div>
        @endforeach
    </div>
</div>
@endsection