@extends('layouts.app')

@section('content')

<div class="container pt-5">
    <div class="row">
        @foreach ($films as $film)
            <div class="col-3">
                <h2 class="mb-3">{{ $film->title }}</h2>
                <p>
                    {{$film->original_title}}
                </p>
            </div>
        @endforeach
    </div>
</div>

@endsection
