@extends('tweet::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('tweet.name') !!}</p>
@endsection
