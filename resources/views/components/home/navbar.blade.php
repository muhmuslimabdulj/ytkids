<div class="navbar bg-base-100 mt-5 flex flex-col sticky top-0 z-10">
    <label class="w-full lg:w-[50%] input input-bordered relative items-center pe-0 rounded-full" id="searchBar">
        <input type="text" placeholder="Search" />
        <button class="btn btn-error rounded-e-full max-w-min absolute right-0">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 50">
                <path fill="#ffff"
                    d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z">
                </path>
            </svg>
        </button>
    </label>
    <div class="max-w-full lg:w-[50%] flex flex-row justify-between">
        <button id="leftArrow" class="bg-white border shadow-md text-slate-500 hover:scale-105 p-2 rounded-full">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        <div class="max-w-full lg:w-full mt-5 p-2 overflow-x-auto hide-scrollbar flex flex-row" id="avatarCarousel">
            <div class="text-center mx-1 cursor-pointer group">
                <div
                    class="relative inline-block rounded-full  bg-blue-700 group-hover:scale-105 transition ease-in-out">
                    <img class="w-20 h-20 bg-white border rounded-full" src="{{ asset('/img/home.png') }}"
                        alt="Avatar 3">
                </div>
                <p
                    class="mt-2 text-sm font-semibold text-gray-700 truncate w-24 group-hover:-translate-y-1 transition ease-in-out">
                    Beranda</p>
            </div>
            @foreach ($channels as $channel)
                <x-home.channel :channel="$channel" />
            @endforeach
        </div>
        <button id="rightArrow" class="bg-white border shadow-md text-slate-500 hover:scale-105 p-2 rounded-full">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>
</div>