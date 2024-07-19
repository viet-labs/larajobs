@extends('layouts.default')

@section('title', 'Homepage')

@section('content')
    @include("partials.register")

    @include("work.list-work")

    @include("work.list-tag")
@endsection
