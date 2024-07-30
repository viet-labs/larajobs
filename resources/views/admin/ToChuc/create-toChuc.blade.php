@extends('layouts.blank')

@section('title', 'Create To Chuc')

@section('content')
    <div class="max-w-[95%] mx-auto mt-6">
        <h2 class="font-bold text-5xl my-4">Add To Chuc</h2>
        @if (Session::has('success'))
            <div class="py-3 px-4 font-bold border-2 rounded bg-green-300 text-green-600">
                {{ Session::get('success') }}
            </div>
        @endif
        <form method="POST" action="{{ url('savetochuc') }}">
            @csrf

            <div class="my-2">
                <label for="ten_cong_ty" class="block text-sm font-medium leading-6 text-gray-900">Name Company</label>
                <div class="mt-2">
                    <input id="ten_cong_ty" name="ten_cong_ty" type="text" required
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-4">
                </div>
            </div>

            <div class="my-2">
                <label for="dia_chi_lien_he" class="block text-sm font-medium leading-6 text-gray-900">Address</label>
                <div class="mt-2">
                    <input id="dia_chi_lien_he" name="dia_chi_lien_he" type="text" required
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-4">
                </div>
            </div>

            <div class="my-2">
                <label for="website_url" class="block text-sm font-medium leading-6 text-gray-900">Website</label>
                <div class="mt-2">
                    <input id="website_url" name="website_url" type="text" required
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-4">
                </div>
            </div>

            <div class="my-2">
                <label for="user_id" class="block text-sm font-medium leading-6 text-gray-900">User ID</label>
                <div class="mt-2">
                    <input id="user_id" name="user_id" type="text" required
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-4">
                </div>
            </div>

            <div class="my-4 flex justify-center items-center">
                <button type="submit"
                    class="py-2 px-4 font-bold border-2 border-blue-600 rounded bg-blue-600 text-white hover:bg-white hover:text-blue-600">Save</button>
                <a href="{{ url('tochuclist') }}"
                    class="ml-4 py-2 px-4 font-bold border-2 border-red-600 rounded bg-red-600 text-white hover:bg-white hover:text-red-600">Back</a>
            </div>

        </form>
    </div>
@endsection
