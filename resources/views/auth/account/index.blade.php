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


<body class="bg-sky-50">
    <a href="{{ route('home') }}"
        class="absolute z-20 w-7 h-7 bg-white rounded-full text-center top-3 left-2 shadow">x</a>
    <div class="w-full h-40 bg-sky-50 pt-15 px-6 lg:hidden">

    </div>
    <div class="hidden w-full h-55 bg-sky-50 pt-15 px-6 lg:block">
    </div>
    <div class="lg:max-w-5xl lg:mx-auto">

        <div class="lg:flex">
            <div class="relative -top-25 px-6 lg:px-0 lg:-top-15 lg:max-w-2/10">
                <h1 class="font-semibold text-xl lg:text-2xl lg:mb-2">Pusat Akun</h1>
                <p class="text-xs text-gray-500 lg:text-sm">
                    Detail profil dan pengaturan untuk akun Lapakita E-Commerce
                </p>
            </div>
            <div class="flex-1 w-[90%] lg:max-w-5/10 mx-auto">

                <div class="relative -top-12  mx-auto bg-white shadow rounded-lg pt-12 ">
                    <div
                        class="absolute -top-10 left-15 -translate-x-1/2
                            h-18 w-18 bg-sky-200 rounded-full
                            border-4 border-white flex items-center justify-center overflow-hidden">

                        @if (Auth::check() && Auth::user()->avatar)
                            <img src="{{ Str::startsWith(Auth::user()->avatar, ['http://', 'https://'])
                                ? Auth::user()->avatar
                                : asset('storage/' . Auth::user()->avatar) }}"
                                class="w-full h-full object-cover" alt="Avatar">
                        @else
                            {{-- SVG fallback user --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-sky-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        @endif

                    </div>


                    <div class="px-5 pb-1">
                        <div class="flex justify-around mb-4">
                            <div class="font-bold flex-1">
                                Profil
                            </div>
                            <a href={{ route('auth.account.edit') }}
                                class="text-sm pt-1 font-bold text-sky-500 pe-3 lg:pe-0">
                                Edit
                            </a>
                        </div>
                        <div class="grid grid-cols-2 mb-4">
                            <div class="text-gray-500 text-xs">
                                Nama lengkap
                            </div>
                            <div class=" text-sm">
                                {{ Auth::user()->name }}
                            </div>
                        </div>
                        <div class="grid grid-cols-2 mb-4">
                            <div class="text-gray-500 text-xs">
                                Nomor HP
                            </div>
                            <div class=" text-sm">
                                Isi Nomor HP-mu
                            </div>
                        </div>
                        <div class="grid grid-cols-2 mb-4">
                            <div class="text-gray-500 text-xs">
                                Email
                            </div>
                            <div class=" text-sm">
                                {{ Auth::user()->email }}
                            </div>
                        </div>
                        <div class="grid grid-cols-2 mb-4">
                            <div class="text-gray-500 text-xs">
                                Jenis Kelamin
                            </div>
                            <div class=" text-sm">
                                Isi Jenis Kelaminmu
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full relative -top-4">
                    <h1 class="font-semibold mb-2">Pengaturan</h1>
                    <div class="w-full bg-white rounded-xl">
                        <div class="h-12 flex items-center ">
                            <div class="flex items-center justify-center px-4">
                                <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6 8V7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7V8H19C20.1046 8 21 8.89543 21 10V20C21 21.1046 20.1046 22 19 22H5C3.89543 22 3 21.1046 3 20V10C3 8.89543 3.89543 8 5 8H6ZM8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7V8H8V7ZM12.7557 14.8523C13.4856 14.5542 14 13.8372 14 13C14 11.8954 13.1046 11 12 11C10.8954 11 10 11.8954 10 13C10 13.8372 10.5144 14.5542 11.2443 14.8523L10.1931 18.3563C10.0969 18.6771 10.3371 19 10.672 19H13.328C13.6629 19 13.9031 18.6771 13.8069 18.3563L12.7557 14.8523Z"
                                        fill="#4d4f56"></path>
                                </svg>
                            </div>
                            <div class="flex-1 text-sm text-gray-700">Ganti Kata Sandi</div>
                            <div class="flex items-center justify-center pe-2">
                                <svg width="24" height="24" aria-hidden="true" type="image/svg+xml"
                                    viewBox="0 0 24 24" fill="#858585" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.49 8.15532L13.69 12.0053L8.49 15.8353C8.22 16.0353 8.05 16.3153 8.01 16.6353C7.97 16.9553 8.05 17.2653 8.26 17.5253C8.68 18.0553 9.47 18.1553 10.01 17.7553L16.51 12.9653C16.82 12.7353 17 12.3753 17 12.0053C17 11.6353 16.82 11.2753 16.51 11.0453L10.01 6.24532C9.79 6.08532 9.53 5.99532 9.25 5.99532C8.86 5.99532 8.5 6.16532 8.26 6.46532C8.06 6.72532 7.97 7.03532 8.01 7.35532C8.05 7.67532 8.22 7.95532 8.49 8.15532Z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
