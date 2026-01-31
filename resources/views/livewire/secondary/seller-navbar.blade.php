<header>
    <nav class="fixed top-0 right-0 left-0 bg-white h-14 w-full flex items-center lg:hidden">
        <a href="{{ url()->previous() }}" class="w-14 flex items-center justify-center text-slate-600 ">
            <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path
                        d="M0 14.545L1.455 16 8 9.455 14.545 16 16 14.545 9.455 8 16 1.455 14.545 0 8 6.545 1.455 0 0 1.455 6.545 8z"
                        fill-rule="evenodd"></path>
                </g>
            </svg>
        </a>
        <div class="text-lg font-bold flex-1">
            Pendaftaran Akun Penjual
        </div>
    </nav>
    <!-- MAIN NAV (Sticky) -->
    <nav class="fixed top-0 right-0 left-0 bg-white shadow-[0_4px_6px_-1px_rgba(0,0,0,0.05)] z-40  hidden lg:block"
        style="background-image: url('{{ asset('gui/header.png') }}');">
        <div
            class="w-full p-2  md:h-auto lg:max-w-6xl lg:mx-auto flex items-center gap-2 lg:p-4 justify-between hidden lg:flex">

            <!-- Logo -->
            <div class="hidden lg:flex mx-2">
                <img src="{{ asset('logo/lapakita-seller.png') }}" class="h-11">
            </div>

            <!-- Login/Profile -->
            @livewire('home.navbar.desktop-profile')
        </div>
    </nav>

    <div class="h-14  w-full lg:h-5 bg-sky-50 lg:h-21">
    </div>
</header>
