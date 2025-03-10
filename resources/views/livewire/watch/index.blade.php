<div>
    {{-- Navbar --}}
    <x-watch.navbar :saluran="$channel" />

    {{-- Video --}}
    <div class="px-5 pt-[20px] pb-[20px]">
        <div class="lg:flex lg:justify-start lg:flex-wrap lg:gap-3">

            <x-watch.video-player :vidio="$video" :code="$video_code" />

            <div class="basis-[19%] mt-5 md:mt-0">
                @foreach ($videos as $video)
                    @if ($video->video_code !== $video_code)
                        <x-watch.video-list wire:key="{{ $video->id }}" :vidio="$video" />
                    @endif
                @endforeach
            </div>

        </div>
    </div>
</div>
