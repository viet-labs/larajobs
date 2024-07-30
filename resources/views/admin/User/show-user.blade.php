@extends('layouts.blank')

@section('title', 'Show User')

@section('content')
    <div class="max-w-[95%] mx-auto mt-6">
        <h2 class="font-bold text-5xl my-4">Show User</h2>
        @if (Session::has('success'))
            <div class="py-3 px-4 border-2 rounded bg-green-300 text-green-600">
                {{ Session::get('success') }}
            </div>
        @endif
        <form method="GET" action="{{ url("showuser/$user->id") }}">
            @csrf

            <input type="hidden" name="id" value="{{$user->id}}">

            <div class="my-2">
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                <div class="mt-2">
                    <input id="name" name="name" type="text" required value="{{$user->name}}"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-4">
                </div>
            </div>

            <div class="my-2">
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                <div class="mt-2">
                    <input id="email" name="email" type="email" required value="{{$user->email}}"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-4">
                </div>
            </div>

            <div class="my-2">
                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                <div class="mt-2">
                    <input id="password" name="password" type="password" required value="{{$user->password}}"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-4">
                </div>
            </div>

            <div class="my-4 flex justify-center items-center">
                <a href="{{ url('userlist') }}"
                    class="ml-4 py-2 px-4 font-bold border-2 border-red-600 rounded bg-red-600 text-white hover:bg-white hover:text-red-600">Back</a>
            </div>
        </form>
    </div>
@endsection
