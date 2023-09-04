@extends('layout')
@section('content')
<h1>{{ $heading }}</h1>
@if (count($listings) == 0)
     <h1>Empty listings</h1>
@endif

@foreach ($listings as $listing)
    <a href="/listings/{{ $listing['id'] }}"><h2>{{ $listing['title'] }}</h2></a>
    <p>{{ $listing['description'] }}</p>
@endforeach
@endsection
