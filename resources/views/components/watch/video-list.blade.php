<div class="flex flex-col mb-[8px] hover:scale-105 transition ease-in-out p-2 shadow-md rounded-md hover:shadow-lg">
    <a wire:navigate href="{{ url('/watch/' . $vidio->video_code) }}" class="basis-[49%]"> <img class="w-full"
            src="https://img.youtube.com/vi/{{ $vidio->video_code }}/0.jpg" alt="" srcset=""></a>
    <div class="basis-[49%] flex items-center mt-2">
        <a href="" class="text-sm font-semibold">{{ $vidio->judul }}</a>
    </div>
</div>
