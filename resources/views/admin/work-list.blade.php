@extends('layouts.blank')

@section('title', 'Admin')

@section('content')
    <div class="max-w-[95%] mx-auto mt-6">
        <h1 class="font-bold text-5xl my-4">Work List</h1>

        <div class="flex justify-end">
            <a href="{{ url('add-work') }}"
                class="my-2 py-2 px-4 font-bold text-white bg-blue-600 border-2 border-blue-500 rounded hover:bg-white hover:text-blue-600">ADD
                Work</a>
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
                        <th class="py-3 border-2 border-slate-900">Title</th>
                        <th class="py-3 border-2 border-slate-900">Form Of Work</th>
                        <th class="py-3 border-2 border-slate-900">Type Of Work</th>
                        <th class="py-3 border-2 border-slate-900">Work Address</th>
                        <th class="py-3 border-2 border-slate-900">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($workList as $work)
                        <tr>
                            <td class="py-3 px-6 border-2 border-slate-900">{{ $work->id }}</td>
                            <td class="py-3 px-6 border-2 border-slate-900">{{ $work->tieu_de }}</td>
                            <td class="py-3 px-6 border-2 border-slate-900">{{ $work->hinh_thuc_lam_viec }}</td>
                            <td class="py-3 px-6 border-2 border-slate-900">{{ $work->loai_cong_viec }}</td>
                            <td class="py-3 px-6 border-2 border-slate-900">{{ $work->dia_chi_lam_viec }}</td>
                            <td class="py-3 px-6 border-2 border-slate-900">
                                <a href="{{ url('edit-work/' . $work->id) }}"
                                    class="p-2 font-bold text-white bg-blue-600 border-2 border-blue-600 rounded hover:text-blue-600 hover:bg-white">Edit</a>
                                <a href="{{ url('delete-work/' . $work->id) }}"
                                    class="p-2 font-bold text-white bg-blue-600 border-2 border-blue-600 rounded hover:text-blue-600 hover:bg-white">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
