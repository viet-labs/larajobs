@extends('layouts.blank')

@section('title', 'Create To Chuc')

@section('content')
    <div class="max-w-[95%] mx-auto mt-6">
        <h2 class="font-bold text-5xl my-4">Add To Chuc</h2>
        @include('admin.tochuc.form',[
            'submitUrl' => route('to-chuc.store'),
        ])
    </div>
@endsection
