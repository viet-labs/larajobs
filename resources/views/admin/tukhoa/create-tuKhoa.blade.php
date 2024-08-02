@extends('layouts.blank')

@section('title', 'Create Tags')

@section('content')
    <div class="max-w-[95%] mx-auto mt-6">
        <h2 class="font-bold text-5xl my-4">Add Tags</h2>
        @include('admin.tukhoa.form',[
            'submitUrl' => route('tu-khoa.store'),
        ])
    </div>
@endsection
