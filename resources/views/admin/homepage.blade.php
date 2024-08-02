@extends('layouts.blank')

@section('title', 'Admin')

@section('content')
    <main>
        <div class="w-[20%] fixed bg-blue-300 h-full">
            <div class="mt-4">
                <div class="text-center ">
                    <strong class="font-bold text-2xl ">Dashboard</strong>
                </div>

                <div class="px-6 pt-4">
                    <ul>
                        <li class="my-6">
                            <a href="{{ route('cong-viec.index') }}"
                                class="px-4 py-2 rounded-lg font-bold text-base hover:bg-blue-400 hover:text-white">Quan Ly Cong Viec</a>
                        </li>
                        <li class="my-6">
                            <a href="{{ route('to-chuc.index') }}"
                                class="px-4 py-2 rounded-lg font-bold text-base hover:bg-blue-400 hover:text-white">Quan Ly To Chuc</a>
                        </li>
                        <li class="my-6">
                            <a href="{{ route('tu-khoa.index') }}"
                                class="px-4 py-2 rounded-lg font-bold text-base hover:bg-blue-400 hover:text-white">Quan Ly Tu Khoa</a>
                        </li>
                        <li class="my-6">
                            <a href="{{ route('user.index') }}"
                                class="px-4 py-2 rounded-lg font-bold text-base hover:bg-blue-400 hover:text-white">Quan Ly User</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
@endsection
