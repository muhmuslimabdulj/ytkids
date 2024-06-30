<div>
    {{-- Navbar --}}
    <x-watch.navbar :saluran="$channel" />

    {{-- Video --}}
    <div class="px-5 pt-[20px] pb-[20px]">
        <div class="lg:flex lg:justify-start lg:flex-wrap lg:gap-3">

            <x-watch.video-player :vidio="$video" :code="$video_code" />

            <div class="basis-[30%] mt-5 md:mt-0">
                @foreach ($videos as $video)
                    <x-watch.video-list :vidio="$video" />
                @endforeach
                {{-- <div class="flex justify-between mb-[8px]">
                    <a href="" class="basis-[49%]"> <img class="w-full" src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="" srcset=""></a>
                    <div class="basis-[49%]">
                        <a href="" class="text-sm font-semibold">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias, nostrum?</a>
                        <p class="text-sm">Avalin Vines</p>
                        <p class="text-sm">1.1M Views</p>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
</div>
