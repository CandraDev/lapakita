<div class="w-full h-15 py-1 px-5 flex items-center lg:hidden">
    <div class="bg-sky-100 rounded-full h-9 w-9 mr-2 overflow-hidden flex items-center justify-center">
        @if (Auth::check() && Auth::user()->avatar)
            <img src="{{ Str::startsWith(Auth::user()->avatar, ['http://', 'https://'])
                ? Auth::user()->avatar
                : asset('storage/' . Auth::user()->avatar) }}"
                class="w-full h-full object-cover" alt="Avatar">
        @else
            {{-- Default mini SVG profile --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-sky-600" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
        @endif
    </div>

    <div class="flex-1">
        <h1 class="text-sm font-bold">Hai,
            {{ Auth::check() ? \Illuminate\Support\Str::title(Auth::user()->name) : 'Shopper' }}!</h1>
        <p class="text-[7pt] text-gray-600">
            @guest
                Masuk untuk coba semua fitur, yuk!
            @else
                @if (is_null(Auth::user()->email_verified_at))
                    Cek emailmu untuk mengaktifkan akun.
                @else
                    Belanja hari ini! 🛒
                @endif
            @endguest
        </p>
    </div>
    @guest
        <div>
            <a href="{{ route('login') }}"
                class="flex items-center justify-center bg-sky-500 w-24 h-8 rounded-lg shadow font-bold text-white text-shadow">
                Masuk
            </a>
        </div>
    @endguest
</div>
