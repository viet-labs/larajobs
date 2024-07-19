<section class="max-w-[60rem] mx-auto">
    <div class="mx-3">
        <div class="font-bold text-xl">Tags</div>

        @foreach($tuKhoaList as $tuKhoa)
            <a href="">
                {{$tuKhoa->ten_hien_thi}}
            </a>
        @endforeach
    </div>
</section>
