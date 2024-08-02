@extends('layouts.blank')

@section('title', 'Update Tags')

@section('content')
    <div class="max-w-[95%] mx-auto mt-6">
        <h2 class="font-bold text-5xl my-4">Edit Tags</h2>
        @include('admin.tukhoa.form',[
            'submitUrl' => route('tu-khoa.update', $tuKhoa->id),
        ])
    </div>
@endsection
