@extends('layouts.app')

@section('content')

  <section>
    <div class="container">
      <h1>Our Films</h1>
    </div>
    <div class="container">
      <div class="row">
        @forelse ($films as $film)
          <div class="col-3">
            <h2>{{ $film->title }}</h2>
            <p>{{ $film->original_title }}</p>
          </div>
        @empty
            0 Film to display
        @endforelse
      </div>
    </div>
  </section>

@endsection
