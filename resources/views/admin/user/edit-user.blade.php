@extends('layouts.blank')

@section('title', 'Update User')

@section('content')
    <div class="max-w-[95%] mx-auto mt-6">
        <h2 class="font-bold text-5xl my-4">Edit User</h2>
        @include('admin.user.form',[
            'submitUrl' => route('user.update', $user->id),
        ])
    </div>
@endsection
