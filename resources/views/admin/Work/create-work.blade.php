@extends('layouts.blank')

@section('title', 'Create Work')

@section('content')
    <div class="max-w-[95%] mx-auto mt-6">
        <h2 class="font-bold text-5xl my-4">Add Work</h2>
        @include('admin.Work.form',[
            'submitUrl' => url("savework"),
        ])
    </div>
@endsection
