@extends('layouts.blank')

@section('title', 'Update Work')

@section('content')
    <div class="max-w-[95%] mx-auto mt-6">
        <h2 class="font-bold text-5xl my-4">Edit Work</h2>
        @include('admin.work.form',[
            'submitUrl' => route('cong-viec.update', $congViec->id),
        ])
    </div>
@endsection
