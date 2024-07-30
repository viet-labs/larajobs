@extends('layouts.blank')

@section('title', 'Tags')

@section('content')
    <div class="max-w-[95%] mx-auto mt-6">
        <h1 class="font-bold text-5xl my-4">Tags List</h1>

        <div class="flex justify-end">
            <a href="{{ url('addtukhoa') }}"
                class="my-2 py-2 px-4 font-bold text-white bg-blue-600 border-2 border-blue-500 rounded hover:bg-white hover:text-blue-600">ADD
                Tags</a>
        </div>

        @if (Session::has('success'))
            <div class="py-3 px-4 font-bold border-2 border-green-300 bg-green-200 text-green-600">
                {{ Session::get('success') }}
            </div>
        @endif


        <div class="flex justify-center items-center">
            <table class="my-2 w-full">
                <thead>
                    <tr>
                        <th class="py-3 border-2 border-slate-900">ID</th>
                        <th class="py-3 border-2 border-slate-900">Name</th>
                        <th class="py-3 border-2 border-slate-900">Slug</th>
                        <th class="py-3 border-2 border-slate-900">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($tuKhoa as $tk)
                        <tr>
                            <td class="py-3 px-6 border-2 border-slate-900">{{ $tk->id }}</td>
                            <td class="py-3 px-6 border-2 border-slate-900">{{ $tk->ten_hien_thi }}</td>
                            <td class="py-3 px-6 border-2 border-slate-900">{{ $tk->slug }}</td>
                            <td class="py-3 px-6 border-2 border-slate-900">
                                <a href="{{ url('edittukhoa/' . $tk->id) }}"
                                    class="p-2 font-bold text-white bg-blue-600 border-2 border-blue-600 rounded hover:text-blue-600 hover:bg-white">Edit</a>
                                <a href="{{ url('deletetukhoa/' . $tk->id) }}"
                                    class="p-2 font-bold text-white bg-blue-600 border-2 border-blue-600 rounded hover:text-blue-600 hover:bg-white">Delete</a>
                                <a href="{{ url('showtukhoa/' . $tk->id) }}"
                                    class="p-2 font-bold text-white bg-blue-600 border-2 border-blue-600 rounded hover:text-blue-600 hover:bg-white">Show</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
