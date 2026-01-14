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

    <!-- HEADER -->
    <div class="absolute top-5 left-5 right-5 z-30 flex items-center justify-between">
        <a href="{{ url()->previous() }}"
            class="w-8 h-8 rounded-full
          bg-white flex items-center justify-center
          shadow-lg cursor-pointer
          text-sky-800 hover:bg-sky-100 transition">
            ✕
        </a>

    </div>

    <!-- GLASS CARD -->
    <div class="relative z-20 flex items-center justify-center min-h-screen px-4 md:px-8">
        <div
            class="w-full max-w-md md:max-w-2xl lg:max-w-4xl
                   rounded-3xl
                   bg-gradient-to-br from-sky-800/60 to-sky-900/50
                   backdrop-blur-2xl
                   border border-white/20
                   shadow-2xl shadow-black/20
                   p-6 md:p-10 lg:p-14">

            <!-- Title -->
            <h1 class="text-white text-center font-bold text-xl md:text-2xl mb-8">
                Daftar Akun Lapakita
            </h1>

            <!-- FORM -->
            <form class="max-w-sm md:max-w-md mx-auto space-y-6" method="POST" action="{{ route('auth.register') }}">
                @csrf

                <!-- Nama Lengkap -->
                <div>
                    <label class="block text-white/90 mb-2 text-sm">
                        Nama Lengkap
                    </label>
                    <input type="text" name="name" placeholder="Nama lengkap"
                        value="{{ old('name') }}"
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
                    <input type="email" name="email" placeholder="email@contoh.com"
                        value="{{ old('email') }}"
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

                    <div class="relative">
                        <input id="password" type="password" name="password" placeholder="••••••••"
                            class="w-full px-4 py-3 pr-12 rounded-xl
                                bg-white/30 backdrop-blur
                                border border-white/50
                                text-white placeholder-white/60
                                focus:outline-none focus:ring-2 focus:ring-sky-400">

                        <button type="button" onclick="togglePassword('password', this)"
                            class="absolute inset-y-0 right-4 flex items-center
                                text-white/70 hover:text-white transition">

                            <!-- Eye -->
                            <svg class="w-5 h-5 eye-open" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5
                                    c4.478 0 8.268 2.943 9.542 7
                                    -1.274 4.057-5.064 7-9.542 7
                                    -4.477 0-8.268-2.943-9.542-7z" />
                            </svg>

                            <!-- Eye Off -->
                            <svg class="w-5 h-5 eye-off hidden" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.584 10.587a3 3 0 004.243 4.243" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.223 6.223A9.97 9.97 0 0112 5
                                        c4.478 0 8.268 2.943 9.543 7
                                        a9.97 9.97 0 01-2.132 3.368" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Confirm Password -->
                <div>
                    <label class="block text-white/90 mb-2 text-sm">
                        Konfirmasi Kata Sandi
                    </label>

                    <div class="relative">
                        <input id="password_confirmation" type="password" name="password_confirmation"
                            placeholder="••••••••"
                            class="w-full px-4 py-3 pr-12 rounded-xl
                                bg-white/30 backdrop-blur
                                border border-white/50
                                text-white placeholder-white/60
                                focus:outline-none focus:ring-2 focus:ring-sky-400">

                        <button type="button" onclick="togglePassword('password_confirmation', this)"
                            class="absolute inset-y-0 right-4 flex items-center
                            text-white/70 hover:text-white transition">

                            <!-- Eye -->
                            <svg class="w-5 h-5 eye-open" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5
                                        c4.478 0 8.268 2.943 9.542 7
                                        -1.274 4.057-5.064 7-9.542 7
                                        -4.477 0-8.268-2.943-9.542-7z" />
                            </svg>

                            <!-- Eye Off -->
                            <svg class="w-5 h-5 eye-off hidden" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.584 10.587a3 3 0 004.243 4.243" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.223 6.223A9.97 9.97 0 0112 5
                                    c4.478 0 8.268 2.943 9.543 7
                                    a9.97 9.97 0 01-2.132 3.368" />
                            </svg>
                        </button>
                    </div>
                </div>

                @if ($errors->any())
                    <div
                        class="mb-6 rounded-xl
                        bg-red-500/20 border border-red-400/40
                        text-red-100 text-sm px-4 py-3">
                        {{ $errors->first() }}
                    </div>
                @endif



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
                    Daftar dengan Google
                </button>

                <!-- Login -->
                <p class="text-center text-white/80 text-sm">
                    Sudah punya akun?
                    <a href="{{ route('auth.login') }}" class="text-sky-300 hover:text-white font-semibold">
                        Masuk
                    </a>
                </p>

            </form>
        </div>
    </div>
</body>
<script>
    function togglePassword(inputId, button) {
        const input = document.getElementById(inputId);
        const openIcon = button.querySelector('.eye-open');
        const offIcon = button.querySelector('.eye-off');

        if (input.type === 'password') {
            input.type = 'text';
            openIcon.classList.add('hidden');
            offIcon.classList.remove('hidden');
        } else {
            input.type = 'password';
            openIcon.classList.remove('hidden');
            offIcon.classList.add('hidden');
        }
    }
</script>



</html>
