<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Daftar | Lapakita</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-sky-50 relative">

    <!-- background -->
    <div class="w-full h-[100vh]"
        style="
            background-image: url('{{ asset('gui/gradient-blue.svg') }}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        ">
    </div>

    <!-- HEADER OVERLAY -->
    <div class="absolute top-5 left-5 right-5 z-30 flex items-center justify-between">

        <!-- X button -->
        <a href="{{ route('login') }}"
           class="w-8 h-8 rounded-full
                  bg-white flex items-center justify-center
                  shadow-lg cursor-pointer text-sky-800">
            ✕
        </a>

        <!-- Logo -->
        <div class="absolute left-1/2 -translate-x-1/2 top-10">
            <img src="{{ asset('logo/lapakita-white.png') }}"
                 class="h-12 object-contain"
                 alt="Lapakita">
        </div>
    </div>

    <!-- GLASS CARD -->
    <div class="flex items-center justify-center relative -mt-[83vh]">
        <div
            class="w-full max-w-6xl rounded-t-4xl
                   bg-gradient-to-br from-sky-800/60 to-sky-900/30
                   backdrop-blur-2xl
                   border border-white/20
                   shadow-2xl shadow-black/20 pt-7 pb-7 px-7">

            <!-- Title -->
            <h1 class="text-white text-center font-bold text-2xl mb-8 text-shadow-md">
                Daftar Akun Lapakita
            </h1>

            <!-- FORM -->
            <form class="max-w-md mx-auto space-y-6">

                <!-- Nama -->
                <div>
                    <label class="block text-white/90 mb-2 text-sm">
                        Nama Lengkap
                    </label>
                    <input type="text" placeholder="Nama Anda"
                        class="w-full px-4 py-3 rounded-xl
                               bg-white/30 backdrop-blur
                               border border-white/50
                               text-white placeholder-white/60
                               focus:outline-none focus:ring-2 focus:ring-sky-400">
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-white/90 mb-2 text-sm">
                        Email
                    </label>
                    <input type="email" placeholder="email@contoh.com"
                        class="w-full px-4 py-3 rounded-xl
                               bg-white/30 backdrop-blur
                               border border-white/50
                               text-white placeholder-white/60
                               focus:outline-none focus:ring-2 focus:ring-sky-400">
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-white/90 mb-2 text-sm">
                        Kata Sandi
                    </label>
                    <input type="password" placeholder="Minimal 8 karakter"
                        class="w-full px-4 py-3 rounded-xl
                               bg-white/30 backdrop-blur
                               border border-white/50
                               text-white placeholder-white/60
                               focus:outline-none focus:ring-2 focus:ring-sky-400">
                </div>

                <!-- Confirm Password -->
                <div>
                    <label class="block text-white/90 mb-2 text-sm">
                        Konfirmasi Kata Sandi
                    </label>
                    <input type="password" placeholder="Ulangi kata sandi"
                        class="w-full px-4 py-3 rounded-xl
                               bg-white/30 backdrop-blur
                               border border-white/50
                               text-white placeholder-white/60
                               focus:outline-none focus:ring-2 focus:ring-sky-400">
                </div>

                <!-- Terms -->
                <div class="flex items-start gap-2 text-sm text-white/80">
                    <input type="checkbox" class="mt-1 accent-sky-500">
                    <span>
                        Saya setuju dengan
                        <a href="#" class="text-sky-300 hover:text-white font-semibold">
                            Syarat & Ketentuan
                        </a>
                    </span>
                </div>

                <!-- Button -->
                <button type="submit"
                    class="w-full py-3 rounded-xl
                           bg-sky-500 hover:bg-sky-600
                           text-white font-semibold
                           shadow-lg shadow-sky-500/40
                           transition duration-200">
                    Daftar
                </button>

                <!-- Divider -->
                <div class="flex items-center gap-4">
                    <div class="flex-1 h-px bg-white/30"></div>
                    <span class="text-white/60 text-sm">atau</span>
                    <div class="flex-1 h-px bg-white/30"></div>
                </div>

                <!-- Social Register -->
                <button type="button"
                    class="w-full py-3 rounded-xl
                           bg-white/90 text-gray-800
                           font-medium flex items-center justify-center gap-3
                           hover:bg-white transition">
                    <svg class="w-5 h-5" viewBox="0 0 48 48">
                        <path fill="#FFC107" d="M43.6 20.5H42V20H24v8h11.3C33.7 32.4 29.3 35 24 35c-6.1 0-11-4.9-11-11s4.9-11 11-11c2.8 0 5.4 1.1 7.3 2.9l5.7-5.7C33.5 6.1 28.9 4 24 4 12.9 4 4 12.9 4 24s8.9 20 20 20 20-8.9 20-20c0-1.1-.1-2.2-.4-3.5z"/>
                    </svg>
                    Daftar dengan Google
                </button>

                <!-- Login -->
                <p class="text-center text-white/80 text-sm">
                    Sudah punya akun?
                    <a href="{{ route('login') }}"
                       class="text-sky-300 hover:text-white font-semibold">
                        Masuk
                    </a>
                </p>

            </form>
        </div>
    </div>

</body>
</html>
