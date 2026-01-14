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

<body>
    @livewire('home.navbar')

    <main class="flex-1 flex items-center justify-center px-4 mt-7">
        <div class="w-full max-w-md">

            <div class="bg-sky-50 rounded-2xl shadow-xl p-6 md:p-8 text-center space-y-5">

                {{-- Icon --}}
                <div class="flex justify-center">
                    <div class="w-16 h-16 rounded-full bg-sky-100 text-sky-500 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Zm0 2v.51l-8 4.99-8-4.99V6h16Zm0 12H4V8.49l7.47 4.67a1 1 0 0 0 1.06 0L20 8.49V18Z" />
                        </svg>
                    </div>
                </div>

                {{-- Title --}}
                <h1 class="text-lg font-bold text-gray-800">
                    Verifikasi Email Anda
                </h1>

                {{-- Description --}}
                <p class="text-sm text-gray-600 leading-relaxed">
                    Kami telah mengirimkan link verifikasi ke email
                    <span class="font-medium text-gray-800">
                        {{ Auth::user()->email }}
                    </span>.
                    <br>
                    Silakan cek inbox atau folder spam untuk melanjutkan.
                </p>

                {{-- Success Message --}}
                @if (session('message'))
                    <div class="rounded-lg bg-green-100 text-green-700 text-sm px-4 py-2">
                        {{ session('message') }}
                    </div>
                @endif

                {{-- Resend --}}
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button
                        class="w-full py-3 rounded-xl
                               bg-sky-500 hover:bg-sky-600
                               text-white font-semibold
                               transition">
                        Kirim Ulang Email Verifikasi
                    </button>
                </form>

                {{-- Logout --}}
                <form method="POST" action="{{ route('auth.logout') }}">
                    @csrf
                    <button class="w-full text-sm text-gray-500 hover:text-gray-700">
                        Keluar & ganti akun
                    </button>
                </form>

            </div>
        </div>
    </main>
</body>

</html>
