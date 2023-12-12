@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @foreach ($films as $film)
            <div class="col-3">
                <h2 class="mb-3">{{ $film->title }}</h2>
                <p>
                    <img width="150" src="{{$film->original_title}}" alt="film-poster">
                </p>
            </div>
        @endforeach
    </div>
</div>

@endsection
