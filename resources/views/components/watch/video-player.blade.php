<div class="basis-[80%]">
    <div class="px-40 py-2 bg-gray-200">
        <div class="border-none" id="player" data-plyr-provider="youtube" data-plyr-embed-id="{{ $code }}"></div>
    </div>
    <h3 class="font-semibold mt-5 text-2xl">{{ $vidio->judul }}</h3>
    <hr class="mt-2">
    <div class="flex items-center mt-2">
        <img src="{{ asset('/storage/' . $vidio->channel->foto_profile) }}"
            class="w-[50px] h-[50px] rounded-full mr-[15px]">
        <div class="flex-1">
            <p class="font-semibold text-lg">{{ $vidio->channel->nama }}</p>
        </div>
    </div>
</div>
@pushOnce('plyr-js')
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
@endPushOnce
@pushOnce('plyr-css')
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
@endPushOnce
@script
    <script>
        const player = new Plyr('#player', {});
        window.player = player;
    </script>
@endscript
