@extends('layout')

@section('content')

<h1 class="site-title">Amazing App Store</h1>

@if ($apps)
@foreach ($apps as $app)
<div class="app-listing">
    <div class="app-listing__image"></div>
    <div>
        <h4 class="app-title">{{{$app->title}}}</h4>
        <p>Rating: {{{$app->rating}}}</p>
        <p>Installs: {{{$app->installs}}}</p>
        <p>Genre: {{{$app->genre}}}</p>
        <p>Version: {{{$app->current_version}}}</p>
    </div>
</div>
@endforeach
@endif

@endsection
