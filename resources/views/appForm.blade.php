@extends('layout')

@section('content')

<div>
    {!! Form::open(['class' => 'appForm','method'=>'PUT','route' => ['form.update', $app->id]]) !!}
    @csrf
    @method('PUT')
    <h1>{{{$app->title}}}</h1>
    <h3>Title:</h3>
    {!! Form::text('title', $app->title); !!}

    <h3>Category:</h3>
    {!! Form::text('category', $app->category_id); !!}

    <h3>Type:</h3>
    {!! Form::text('type', $app->type); !!}

    <h3>Content Rating:</h3>
    {!! Form::text('content_rating', $app->content_rating); !!}

    <h3>Price:</h3>
    {!! Form::text('price', $app->price); !!}

    {{ Form::hidden('id', $app->id) }}

    {!! Form::submit('submit me'); !!}
    {!! Form::close(); !!}
</div>

@endsection
