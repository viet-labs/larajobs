<section class="flex max-w-5xl mx-auto">
    <div class="w-full md:mx-auto md:max-w-screen-md lg:max-w-screen-lg">
        <section class="flex flex-col">
            @foreach ($congViecList as $congViec)
                <a href="" class="px-6 mb-6 block">
                    <div class="relative border border-solid rounded-lg lj-shadow px-2 md:px-6 py-5 flex items-center md:space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                        <div class="hidden border-2 border-solid sm:block flex-shrink-0 mb-2 md:mb-0 lg:absolute rounded-lg md:p-4 md:bg-white lj-shadow md:-left-9">
                            <img src="./image/ge.png" alt="" class="h-12 w-12 rounded-[50%] object-contain">
                        </div>

                        <div class="flex justify-between w-full h-full">
                            <div class="flex flex-col pl-5">
                                <span class="text-[14px] text-gray-700">OWL Services</span>
                                <span class="font-bold text-[18px]">{{$congViec->tieu_de}}</span>
                                <span class="text-[14px] text-gray-700 items-center">
                                    {{$congViec->loai_cong_viec}} - {{$congViec->muc_luong_toi_thieu}} - {{$congViec->muc_luong_toi_da}}
                                </span>
                            </div>

                            <div class="flex">
                                <div class="pr-2 content-center text-gray-500">
                                    <span class="pr-3"><i class="bx bx-world pr-1"></i>{{$congViec->hinh_thuc_lam_viec}}</span>
                                    <span><i class="bx bx-calendar-minus"></i>1d</span>
                                </div>

                                <div class="">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </section>
    </div>
</section>
