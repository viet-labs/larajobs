@php
    $isEditPage = isset($toChuc);
@endphp

@if (Session::has('success'))
    <div class="py-3 px-4 border-2 rounded bg-green-300 text-green-600">
        {{ Session::get('success') }}
    </div>
@endif

<form method="POST" action="{{ $submitUrl }}">
    @csrf

    @if ($isEditPage)
        <input type="hidden" name="id" value="{{ $toChuc->id }}">
    @endif

    <div class="my-2">
        <label for="ten_cong_ty" class="block text-sm font-medium leading-6 text-gray-900">Name Company</label>
        <div class="mt-2">
            <input id="ten_cong_ty" name="ten_cong_ty" type="text" required value="{{ $toChuc->ten_cong_ty ?? '' }}"
                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-4">
        </div>
    </div>

    <div class="my-2">
        <label for="dia_chi_lien_he" class="block text-sm font-medium leading-6 text-gray-900">Address</label>
        <div class="mt-2">
            <input id="dia_chi_lien_he" name="dia_chi_lien_he" type="text" required
                value="{{ $toChuc->dia_chi_lien_he ?? '' }}"
                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-4">
        </div>
    </div>

    <div class="my-2">
        <label for="website_url" class="block text-sm font-medium leading-6 text-gray-900">Website</label>
        <div class="mt-2">
            <input id="website_url" name="website_url" type="text" required value="{{ $toChuc->website_url ?? '' }}"
                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-4">
        </div>
    </div>

    <div class="my-4 flex justify-center items-center">
        <button type="submit"
            class="py-2 px-4 font-bold border-2 border-blue-600 rounded bg-blue-600 text-white hover:bg-white hover:text-blue-600">{{ $isEditPage ? 'Update' : 'Create' }}</button>
        <a href="{{ route('to-chuc.index') }}"
            class="ml-4 py-2 px-4 font-bold border-2 border-red-600 rounded bg-red-600 text-white hover:bg-white hover:text-red-600">Back</a>
    </div>
</form>
