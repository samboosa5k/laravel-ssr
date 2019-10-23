@extends('layout')

@section('content')

<h1 class="site-title">Amazing App Store</h1>

<div class="search">
    {!! Form::open(['method'=>'get', 'action'=>['AppFormController@show', 1]]); !!}
    @method('GET')
    @csrf


    <h3>Search term:</h3>
    {!! Form::text('search_term'); !!}



    {!! Form::submit('submit me'); !!}
    {!! Form::close(); !!}
</div>


@endsection
