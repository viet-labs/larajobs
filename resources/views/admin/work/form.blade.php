@php
    $isEditPage = isset($congViec);
@endphp

@if (Session::has('success'))
    <div class="py-3 px-4 border-2 rounded bg-green-300 text-green-600">
        {{ Session::get('success') }}
    </div>
@endif
<form method="POST" action="{{ $submitUrl }}">
    @csrf

    @if ($isEditPage)
        <input type="hidden" name="id" value="{{ $congViec->id }}">
    @endif

    <div class="my-2">
        <label for="tieu_de" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
        <div class="mt-2">
            <input id="tieu_de" name="tieu_de" type="text" required value="{{ $congViec->tieu_de ?? '' }}"
                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-4">
        </div>
    </div>

    <div class="my-2">
        <label for="hinh_thuc_lam_viec" class="block text-sm font-medium leading-6 text-gray-900">Form Of Work</label>
        <div class="mt-2">
            <select id="hinh_thuc_lam_viec" name="hinh_thuc_lam_viec" type="text" required
                class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-3 py-2">
                <option value="remote"
                    {{ $isEditPage && $congViec->hinh_thuc_lam_viec == 'remote' ? 'selected' : '' }}>Remote
                </option>
                <option value="offline"
                    {{ $isEditPage && $congViec->hinh_thuc_lam_viec == 'offline' ? 'selected' : '' }}>Offline
                </option>
                <option value="hybird"
                    {{ $isEditPage && $congViec->hinh_thuc_lam_viec == 'hybird' ? 'selected' : '' }}>Hybird
                </option>
            </select>
        </div>
    </div>

    <div class="my-2">
        <label for="loai_cong_viec" class="block text-sm font-medium leading-6 text-gray-900">Type Of Work</label>
        <div class="mt-2">
            <select id="loai_cong_viec" name="loai_cong_viec" type="text" required
                class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-3 py-2">
                <option value="fulltime"
                    {{ $isEditPage && $congViec->loai_cong_viec == 'fulltime' ? 'selected' : '' }}>Fulltime
                </option>
                <option value="partime"
                    {{ $isEditPage && $congViec->loai_cong_viec == 'partime' ? 'selected' : '' }}>Partime</option>
                <option value="intern"
                    {{ $isEditPage && $congViec->loai_cong_viec == 'intern' ? 'selected' : '' }}>Intern</option>
            </select>
        </div>
    </div>

    <div class="my-2">
        <label for="dia_chi_lam_viec" class="block text-sm font-medium leading-6 text-gray-900">Work Address</label>
        <div class="mt-2">
            <input id="dia_chi_lam_viec" name="dia_chi_lam_viec" type="text" required
                value="{{ $congViec->dia_chi_lam_viec ?? '' }}"
                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-4">
        </div>
    </div>

    <div class="my-2">
        <label for="noi_dung" class="block text-sm font-medium leading-6 text-gray-900">Content</label>
        <div class="mt-2">
            <input id="noi_dung" name="noi_dung" type="text" required value="{{ $congViec->noi_dung ?? '' }}"
                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-4">
        </div>
    </div>

    <div class="my-2">
        <label for="muc_luong_toi_thieu" class="block text-sm font-medium leading-6 text-gray-900">Minimum Wage</label>
        <div class="mt-2">
            <input id="muc_luong_toi_thieu" name="muc_luong_toi_thieu" type="number" required
                value="{{ $congViec->muc_luong_toi_thieu ?? '' }}"
                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-4">
        </div>
    </div>

    <div class="my-2">
        <label for="muc_luong_toi_da" class="block text-sm font-medium leading-6 text-gray-900">Maximum Salary</label>
        <div class="mt-2">
            <input id="muc_luong_toi_da" name="muc_luong_toi_da" type="number" required
                value="{{ $congViec->muc_luong_toi_da ?? '' }}"
                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-4">
        </div>
    </div>

    <div class="my-2">
        <label for="ngay_het_han" class="block text-sm font-medium leading-6 text-gray-900">Expiration
            Date</label>
        <div class="mt-2">
            <input id="ngay_het_han" name="ngay_het_han" type="date" required value="{{ $isEditPage ? $congViec->ngay_het_han->format('Y-m-d') : today()->format('Y-m-d') }}"
                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-4">
        </div>
    </div>

    <div class="my-2">
        <label for="to_chuc_id" class="block text-sm font-medium leading-6 text-gray-900">To Chuc ID</label>
        <div class="mt-2">
            <input id="to_chuc_id" name="to_chuc_id" type="text" required value="{{ $congViec->to_chuc_id ?? '' }}"
                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-4">
        </div>
    </div>

    <div class="my-4 flex justify-center items-center">
        <button type="submit"
            class="py-2 px-4 font-bold border-2 border-blue-600 rounded bg-blue-600 text-white hover:bg-white hover:text-blue-600">{{ $isEditPage ? 'Update' : 'Create' }}</button>
        <a href="{{ route('cong-viec.index') }}"
            class="ml-4 py-2 px-4 font-bold border-2 border-red-600 rounded bg-red-600 text-white hover:bg-white hover:text-red-600">Back</a>
    </div>
</form>
