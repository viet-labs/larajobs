<section class="max-w-[60rem] mx-auto">
    <div class="mx-3">
        <div class="font-bold text-xl mb-4">Tags</div>

        @foreach($tuKhoaList as $tuKhoa)
            <div class="flex flex-wrap ">
                <a href="" class="text-[#F94A3D] font-bold text-base p-1 rounded-full border-[#F94A3D] border-2 bg-[#FFECEB] hover:bg-white">
                    {{$tuKhoa->ten_hien_thi}}
                </a>
            </div>
        @endforeach
    </div>
</section>
