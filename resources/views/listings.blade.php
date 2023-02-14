@extends('layout')
@section('content') {{-- must match the name set in @yield --}}
    <h1>{{ $heading }} </h1>

    @unless(count($listings) == 0)
        @foreach ($listings as $listing)
            <h2>
                <a href="/listings/{{ $listing['id'] }}">{{ $listing['title'] }}</a>
            </h2>
            <p>{{ $listing['description'] }}</p>
        @endforeach
    @else
        <p>No listing found</p>
    @endunless
@endsection
