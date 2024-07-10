<div>
    {{-- Navbar --}}
    <x-home.navbar :channels="$channels" :selectedChannel="$selectedChannel" />

    {{-- Video --}}
    <main class="grid grid-cols-1 lg:grid-cols-4 gap-4 pb-5 lg:px-16">
        @foreach ($videos as $video)
            <x-home.video wire:key="{{ $video->id }}" :video="$video" />
        @endforeach
        @if ($this->hasMorePage())
            <div x-intersect.full="$wire.loadMore()" class="p-4">
                <div wire:loading wire:target="loadMore" class="loading-indicator">
                    Loading more videos...
                </div>
            </div>
        @endif
    </main>
</div>
@script
    <script>
        const leftArrow = document.getElementById('leftArrow');
        const rightArrow = document.getElementById('rightArrow');
        const avatarCarousel = document.getElementById('avatarCarousel');

        leftArrow.addEventListener('click', () => {
            avatarCarousel.scrollBy({
                left: -200,
                behavior: 'smooth'
            });
        });

        rightArrow.addEventListener('click', () => {
            avatarCarousel.scrollBy({
                left: 200,
                behavior: 'smooth'
            });
        });
    </script>
@endscript
