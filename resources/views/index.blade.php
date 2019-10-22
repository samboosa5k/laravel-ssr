@extends('layout')

@section('content')

<h1>Welcome to the most Amazingest App-Store!</h1>

@if ($apps)
@foreach ($apps as $app)
<div class="app-listing">
    <h4>Title: {{{$app->title}}}</h4>
    <p>Rating: {{{$app->rating}}}</p>
    <p>Version: {{{$app->current_version}}}</p>
    <p>Genre: {{{$app->category}}}</p>
</div>
@endforeach
@endif

@endsection
