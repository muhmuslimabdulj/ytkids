<div class="text-center mx-1 cursor-pointer group">
    <div class="relative inline-block">
        <img class="w-20 h-20 border rounded-full group-hover:scale-105 transition ease-in-out"
            src="{{ asset('/storage/' . $channel->foto_profile) }}" alt="{{ $channel->nama }}">
    </div>
    <p class="mt-2 text-sm font-semibold text-gray-700 truncate w-24 group-hover:-translate-y-1 transition ease-in-out">
        {{ $channel->nama }}</p>
</div>
