<div class="navbar bg-base-100 px-5 py-2 drop-shadow-lg sticky z-10 top-0 shadow-md">
    <div class="navbar-start">
        <a class="me-5" href="{{ url()->route('home') }}">
            <img>
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                    <path d="M2036 4155 c-21 -7 -53 -27 -70 -43 -17 -16 -389 -351 -827 -745
                        -589 -529 -800 -724 -808 -748 -15 -43 -14 -83 3 -122 9 -22 269 -263 835
                        -772 452 -407 834 -745 849 -752 125 -56 263 80 210 208 -11 25 -193 194 -670
                        624 l-656 590 1898 5 c1898 5 1899 5 1926 26 53 39 69 71 69 134 0 63 -16 95
                        -69 134 -27 21 -28 21 -1926 26 l-1898 5 656 590 c710 640 701 630 687 717 -9
                        52 -64 114 -113 128 -46 12 -48 12 -96 -5z" />
                </g>
            </svg>
            </img>
        </a>
        <div role="button" class="btn btn-ghost btn-circle avatar">
            <div class="w-20 rounded-full">
                <img alt="Tailwind CSS Navbar component" src="{{ asset('/storage/' . $saluran->foto_profile) }}" />
            </div>
        </div>

    </div>
    <div class="navbar-end">
        <button class="btn btn-error rounded-full max-w-min">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 50">
                <path fill="#ffff"
                    d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z">
                </path>
            </svg>
        </button>
    </div>
</div>
