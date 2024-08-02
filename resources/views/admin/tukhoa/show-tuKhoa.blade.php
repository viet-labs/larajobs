@extends('layouts.blank')

@section('title', 'Show Work')

@section('content')
    <div class="max-w-[95%] mx-auto mt-6">
        <h2 class="font-bold text-5xl my-4">Show Work</h2>
        @include('admin.tukhoa.form',[
            'submitUrl' => route('tu-khoa.show', $tuKhoa->id),
        ])
    </div>
@endsection
