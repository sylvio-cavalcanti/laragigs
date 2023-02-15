@extends('layout')
@section('content')
@include('partials._search')
{{-- must match the name set in @yield --}}
<h1>Listing: </h1>
<h2>{{ $listing['title'] }}</h2>
<p>{{ $listing['description'] }}</p>
@endsection
