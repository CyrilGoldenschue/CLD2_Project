@extends('layout')
@section('content')
    <h1>Galleries</h1>

    @foreach($galleries as $gallery)

    {{ $gallery->name }}

    @foreach($gallery->pictures as $picture)

        {{ $picture->title }}
        <img src="{{ $picture->path }}">
    @endforeach

    @endforeach



@endsection
