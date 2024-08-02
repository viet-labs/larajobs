@extends('layouts.blank')

@section('title', 'Show Tags')

@section('content')
    <div class="max-w-[95%] mx-auto mt-6">
        <h2 class="font-bold text-5xl my-4">Show Tags</h2>
        @include('admin.tochuc.form',[
            'submitUrl' => route('to-chuc.show', $toChuc->id),
        ])
    </div>
@endsection
