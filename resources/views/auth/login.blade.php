<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lapakita</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

{{-- <body class="bg-sky-50 relative">

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
        <a
            class="w-8 h-8 rounded-full
               bg-white flex items-center justify-center
               shadow-lg cursor-pointer text-sky-800">
            ✕
        </a>

        <!-- Center Text -->
        <div class="absolute left-1/2 -translate-x-1/2 top-10">
            <img src="{{ asset('logo/lapakita-white.png') }}" class="h-12 object-contain" alt="Lapakita">

        </div>

    </div>


    <!-- GLASS CARD -->
    <div class="flex items-center justify-center relative -mt-[83vh]">
        <div
            class="w-full max-w-6xl h-[90vh] rounded-t-4xl
               bg-gradient-to-br from-sky-800/60 to-sky-900/30
               backdrop-blur-2xl
               border border-white/20
               shadow-2xl shadow-black/20 pt-7 px-7">

            <!-- Title -->
            <h1 class="text-white text-center font-bold text-2xl mb-8 text-shadow-md">
                Masuk ke Akun Lapakita
            </h1>

            <!-- FORM -->
            <form class="max-w-md mx-auto space-y-6">

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
                    <input type="password" placeholder="••••••••"
                        class="w-full px-4 py-3 rounded-xl
                           bg-white/30 backdrop-blur
                           border border-white/50
                           text-white placeholder-white/60
                           focus:outline-none focus:ring-2 focus:ring-sky-400">
                </div>

                <!-- Remember & Forgot -->
                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center gap-2 text-white/80">
                        <input type="checkbox" class="accent-sky-500">
                        Ingat saya
                    </label>

                    <a href="#" class="text-sky-200 hover:text-white transition">
                        Lupa kata sandi?
                    </a>
                </div>

                <!-- Button -->
                <button type="submit"
                    class="w-full py-3 rounded-xl
                       bg-sky-500 hover:bg-sky-600
                       text-white font-semibold
                       shadow-lg shadow-sky-500/40
                       transition duration-200">
                    Masuk
                </button>

                <!-- Divider -->
                <div class="flex items-center gap-4">
                    <div class="flex-1 h-px bg-white/30"></div>
                    <span class="text-white/60 text-sm">atau</span>
                    <div class="flex-1 h-px bg-white/30"></div>
                </div>

                <!-- Social Login -->
                <button type="button"
                    class="w-full py-3 rounded-xl
                       bg-white/90 text-gray-800
                       font-medium flex items-center justify-center gap-3
                       hover:bg-white transition">

                    <svg class="w-5 h-5" viewBox="0 0 48 48">
                        <path fill="#FFC107"
                            d="M43.6 20.5H42V20H24v8h11.3C33.7 32.4 29.3 35 24 35c-6.1 0-11-4.9-11-11s4.9-11 11-11c2.8 0 5.4 1.1 7.3 2.9l5.7-5.7C33.5 6.1 28.9 4 24 4 12.9 4 4 12.9 4 24s8.9 20 20 20 20-8.9 20-20c0-1.1-.1-2.2-.4-3.5z" />
                        <path fill="#FF3D00"
                            d="M6.3 14.7l6.6 4.8C14.7 16 19 13 24 13c2.8 0 5.4 1.1 7.3 2.9l5.7-5.7C33.5 6.1 28.9 4 24 4c-7.7 0-14.3 4.3-17.7 10.7z" />
                        <path fill="#4CAF50"
                            d="M24 44c5.2 0 10-2 13.5-5.3l-6.2-5.2C29.5 34.8 26.9 35 24 35c-5.2 0-9.6-3.4-11.2-8.1l-6.5 5C9.6 39.5 16.3 44 24 44z" />
                        <path fill="#1976D2"
                            d="M43.6 20.5H42V20H24v8h11.3c-1.1 3-3.4 5.3-6.3 6.8l6.2 5.2C38.9 36.5 44 31 44 24c0-1.1-.1-2.2-.4-3.5z" />
                    </svg>

                    Masuk dengan Google
                </button>

                <!-- Register -->
                <p class="text-center text-white/80 text-sm">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="text-sky-300 hover:text-white font-semibold">
                        Daftar
                    </a>
                </p>
            </form>

        </div>
    </div>


</body> --}}

<body class="bg-sky-50 relative min-h-screen">

    <!-- background -->
    <div class="absolute inset-0"
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
        <a href="{{ url()->previous() }}"
            class="w-8 h-8 rounded-full
          bg-white flex items-center justify-center
          shadow-lg cursor-pointer
          text-sky-800 hover:bg-sky-100 transition">
            ✕
        </a>
    </div>

    <!-- GLASS CARD WRAPPER -->
    <div
        class="relative z-20 flex items-center justify-center
                min-h-screen
                px-4 md:px-8">

        <!-- GLASS CARD -->
        <div
            class="w-full
                   max-w-md md:max-w-2xl lg:max-w-4xl xl:max-w-5xl
                   rounded-3xl md:rounded-4xl
                   bg-gradient-to-br from-sky-800/60 to-sky-900/30
                   backdrop-blur-2xl
                   border border-white/20
                   shadow-2xl shadow-black/20
                   p-6 md:p-10 lg:p-14">

            <!-- Title -->
            <h1
                class="text-white text-center font-bold
                       text-xl md:text-2xl lg:text-3xl
                       mb-8">
                Masuk ke Akun Lapakita
            </h1>

            <!-- FORM -->
            <form class="max-w-sm md:max-w-md lg:max-w-lg mx-auto space-y-6">

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
                    <input type="password" placeholder="••••••••"
                        class="w-full px-4 py-3 rounded-xl
                               bg-white/30 backdrop-blur
                               border border-white/50
                               text-white placeholder-white/60
                               focus:outline-none focus:ring-2 focus:ring-sky-400">
                </div>

                <!-- Remember & Forgot -->
                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center gap-2 text-white/80">
                        <input type="checkbox" class="accent-sky-500">
                        Ingat saya
                    </label>

                    <a href="#" class="text-sky-200 hover:text-white transition">
                        Lupa kata sandi?
                    </a>
                </div>

                <!-- Button -->
                <button type="submit"
                    class="w-full py-3 rounded-xl
                           bg-sky-500 hover:bg-sky-600
                           text-white font-semibold
                           shadow-lg shadow-sky-500/40
                           transition duration-200">
                    Masuk
                </button>

                <!-- Divider -->
                <div class="flex items-center gap-4">
                    <div class="flex-1 h-px bg-white/30"></div>
                    <span class="text-white/60 text-sm">atau</span>
                    <div class="flex-1 h-px bg-white/30"></div>
                </div>

                <!-- Google -->
                <button type="button"
                    class="w-full py-3 rounded-xl
                           bg-white/90 text-gray-800
                           font-medium flex items-center justify-center gap-3
                           hover:bg-white transition">
                    <svg class="w-5 h-5" viewBox="0 0 48 48">
                        <path fill="#FFC107"
                            d="M43.6 20.5H42V20H24v8h11.3C33.7 32.4 29.3 35 24 35c-6.1 0-11-4.9-11-11s4.9-11 11-11c2.8 0 5.4 1.1 7.3 2.9l5.7-5.7C33.5 6.1 28.9 4 24 4 12.9 4 4 12.9 4 24s8.9 20 20 20 20-8.9 20-20c0-1.1-.1-2.2-.4-3.5z" />
                        <path fill="#FF3D00"
                            d="M6.3 14.7l6.6 4.8C14.7 16 19 13 24 13c2.8 0 5.4 1.1 7.3 2.9l5.7-5.7C33.5 6.1 28.9 4 24 4c-7.7 0-14.3 4.3-17.7 10.7z" />
                        <path fill="#4CAF50"
                            d="M24 44c5.2 0 10-2 13.5-5.3l-6.2-5.2C29.5 34.8 26.9 35 24 35c-5.2 0-9.6-3.4-11.2-8.1l-6.5 5C9.6 39.5 16.3 44 24 44z" />
                        <path fill="#1976D2"
                            d="M43.6 20.5H42V20H24v8h11.3c-1.1 3-3.4 5.3-6.3 6.8l6.2 5.2C38.9 36.5 44 31 44 24c0-1.1-.1-2.2-.4-3.5z" />
                    </svg>
                    Masuk dengan Google
                </button>

                <!-- Register -->
                <p class="text-center text-white/80 text-sm">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="text-sky-300 hover:text-white font-semibold">
                        Daftar
                    </a>
                </p>

            </form>
        </div>
    </div>
</body>

</html>
