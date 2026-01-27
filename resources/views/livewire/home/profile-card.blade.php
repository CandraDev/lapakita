<div class="w-full h-15 py-1 px-5 flex items-center lg:hidden">
    <div class="bg-sky-100 rounded-full h-8 w-8 mr-3">

    </div>
    <div class="flex-1">
        <h1 class="text-sm font-bold">Hai, {{ Auth::check() ? \Illuminate\Support\Str::title(Auth::user()->name) : 'Shopper' }}!</h1>
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
