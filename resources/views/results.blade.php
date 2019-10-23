@extends('layout')

@section('content')

<h1 class="site-title">Amazing App Store</h1>

<div class="search">
    <div class="app-listing__image"></div>
    <div>
        <div>
            <h4 class="app-title">{{{$app->title}}}</h4>
            <p>Rating: {{{$app->rating}}}</p>
            <p>Installs: {{{$app->installs}}}</p>
            <p>Genre: {{{$app->genre}}}</p>
            <p>Version: {{{$app->current_version}}}</p>
        </div>
        <span class="update-button"><a href="./form?id={{$app->id}}">Edit</a></span>
    </div>
</div>


@endsection
