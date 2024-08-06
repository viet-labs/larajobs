<div class="container mx-auto lg:max-w-5xl">
    @foreach ($congViecList as $congViec)
        <div title="{{ $congViec->id }}"
            class="shadow-lg relative py-4 pr-8 pl-12 mt-6 border border-gray-200 rounded rounded-lg hover:border-gray-500 flex justify-between items-center">
            <img class="absolute w-14 h-14 -left-[1.75rem] rounded-lg"
                src="https://larajobs.com/logos/hk1ozAtfaT3vxIRE1wxavIJ35RbdhbPqycTd9vHc.png"
                alt="{{ $congViec->tieu_de }}">
            <div>
                <div>{{ $congViec->toChuc->ten_cong_ty }}</div>
                <h3 class="text-lg font-bold">{{ $congViec->tieu_de }}</h3>
                <div>
                    <span>{{ $congViec->loai_cong_viec }}</span>
                    <span class="before:content-['-'] before:mx-2 after:content-['đ'] after:text-red-500">
                        {{ number_format($congViec->muc_luong_toi_thieu) }}
                    </span>
                    <span class="before:content-['-'] before:mx-2 after:content-['đ'] after:text-red-500">
                        {{ number_format($congViec->muc_luong_toi_da) }}
                    </span>
                </div>
            </div>
            <div>
                <div>
                    <span class="capitalize">
                        {{ $congViec->hinh_thuc_lam_viec }},
                        {{ $congViec->dia_chi_lam_viec }}
                    </span>
                </div>
                <div class="mt-2 flex justify-end">
                    @foreach ($congViec->tuKhoas as $tuKhoa)
                        <a class="px-4 py-1 ml-2 rounded-full bg-red-100 text-red-600 font-bold text-center inline-block h-8 text-sm"
                            href="javascript:void(0)">
                            {{ $tuKhoa->ten_hien_thi }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach
</div>
