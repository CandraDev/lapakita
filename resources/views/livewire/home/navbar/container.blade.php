<div style="background-image: url('{{ asset('gui/header.png') }}');" class="relative z-40 shadow">
    <div class="w-full p-2 md:h-auto lg:max-w-6xl lg:mx-auto">

        <div class="hidden lg:flex items-center mx-3 justify-between gap-2 text-[9pt] text-slate-700 pt-1">
            <div class="flex justify-start">
                <div class="relative group hidden lg:block">
                    <!-- Trigger -->
                    <div class="flex items-center gap-2 cursor-pointer hover:text-sky-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="15" height="15"
                            viewBox="0 0 24 24">
                            <path
                                d="M10.75 9.32635V3.24938H10.76C10.76 2.55972 11.32 2 12.01 2C12.7 2 13.26 2.55972 13.26 3.24938V9.32635L14.59 7.74714C15.03 7.2274 15.82 7.15743 16.35 7.59721C16.87 8.03699 16.94 8.8266 16.5 9.35634L12.96 13.5642L12.81 13.7142C12.28 14.1639 11.49 14.094 11.05 13.5642L7.51001 9.35634C7.06001 8.8266 7.13001 8.03699 7.66001 7.59721C8.19001 7.14744 8.98001 7.2174 9.42001 7.74714L10.75 9.32635ZM19.5 6.20787C19.5 5.51821 20.06 4.95849 20.75 4.95849C21.44 4.95849 22 5.51821 22 6.20787V18.1619C22 20.2809 20.32 22 18.25 22H5.75C3.68 22 2 20.2809 2 18.1619V6.20787C2 5.51821 2.56 4.95849 3.25 4.95849C3.94 4.95849 4.5 5.51821 4.5 6.20787V15.6632C4.5 16.4028 5.06 17.0025 5.75 17.0025H18.25C18.94 17.0025 19.5 16.4028 19.5 15.6632V6.20787ZM10.75 19.4813C10.75 20.1709 11.31 20.7306 12 20.7306C12.69 20.7306 13.25 20.1709 13.25 19.4813C13.25 18.7916 12.69 18.2319 12 18.2319C11.31 18.2319 10.75 18.7916 10.75 19.4813Z">
                            </path>
                        </svg>
                        Unduh Aplikasi Lapakita
                    </div>

                    <!-- Dropdown -->
                    <div
                        class="absolute left-0 top-full mt-2 w-48
                        bg-white  rounded-md shadow-md
                        opacity-0 invisible
                        group-hover:opacity-100 group-hover:visible
                        transition-all duration-200 py-2 z-100">
                        <div class="font-bold text-center text-black text-md pb-2">Download Sekarang!</div>
                        <a href="#" class="block px-4 py-2 hover:bg-slate-100">
                            <img src="data:image/png;base64,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"
                                alt="">
                        </a>
                    </div>
                </div>

            </div>
            <div class="flex justify-end gap-4">
                <div class="flex items-center cursor-pointer hover:text-sky-500 ">
                    Jualan di Lapakita
                </div>
                <div class="flex items-center cursor-pointer hover:text-sky-500 ">
                    Produk Sekitar
                </div>
                <div class="flex items-center cursor-pointer hover:text-sky-500 ">
                    Cek Pesanan Saya
                </div>
            </div>
        </div>
        <div class="flex items-center h-full gap-2 md:h-15 lg:py-8">
            <div class="hidden lg:flex mx-2">
                <img src="{{ asset('logo/lapakita-main.png') }}" class="h-11">
            </div>
            @livewire('nav-search')
            <div class="flex gap-2 items-center">

                @guest
                    <!-- Guest Buttons -->
                    <a href="{{ route('auth.login') }}"
                        class="px-2 bg-sky-500 h-8.5 text-xs font-medium text-white rounded-md shadow flex items-center justify-center gap-1">
                        <!-- icon -->
                        Masuk
                    </a>
                    <a href="{{ route('auth.register') }}"
                        class="hidden px-2 bg-white/70 border-sky-500 border-2  h-8.5 text-xs font-bold text-sky-500 rounded-xl shadow sm:flex items-center justify-center gap-1">
                        <!-- icon -->
                        Daftar
                    </a>
                @else
                    <!-- Authenticated User Dropdown -->
                    <button
                        class="hidden lg:flex items-center gap-2  text-gray-800 px-3 py-2 rounded-md  hover:bg-gray-100/70 hover:text-sky-500 transition ">
                        <span class="text-sm font-semibold">
                            <div class="w-30">
                                <a class="inline-block">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="inline-block me-2">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M14.0058 12.5C14.0058 14.15 15.3565 15.5 17.0074 15.5H20.009V17.5C20.009 18.88 18.8884 20 17.5076 20H5.50132C4.12059 20 3 18.88 3 17.5V7.5C3 6.12 4.12059 5 5.50132 5H17.5076C18.8884 5 20.009 6.12 20.009 7.5V9.5H17.0074C15.3565 9.5 14.0058 10.85 14.0058 12.5ZM15.0063 12.5002C15.0063 11.4002 15.9068 10.5002 17.0074 10.5002V10.4902H20.6193C21.3797 10.4902 22 11.1102 22 11.8702V13.1202C22 13.8802 21.3797 14.5002 20.6193 14.5002H17.0074C15.9068 14.5002 15.0063 13.6002 15.0063 12.5002ZM18.0079 12.5002C18.0079 13.0502 17.5577 13.5002 17.0074 13.5002C16.4571 13.5002 16.0068 13.0502 16.0068 12.5002C16.0068 11.9502 16.4571 11.5002 17.0074 11.5002C17.5577 11.5002 18.0079 11.9502 18.0079 12.5002Z"
                                            fill="currentColor" />
                                    </svg>
                                    Rp. 0
                                </a>
                            </div>
                        </span>

                    </button>

                    <div class="relative group hidden lg:block">
                        <button
                            class="flex items-center gap-2  text-gray-800 px-3 py-2 rounded-md  hover:bg-gray-100/70 hover:text-sky-500 transition ">
                            <a href="/member/profile" class="account__wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    preserveAspectRatio="xMidYMid meet" width="24" height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M17.0071 7C17.0071 9.76142 14.7655 12 12.0002 12C9.23497 12 6.9933 9.76142 6.9933 7C6.9933 4.23858 9.23497 2 12.0002 2C14.7655 2 17.0071 4.23858 17.0071 7ZM20.8422 18.6695C21.453 20.2795 20.2113 21.9995 18.4789 21.9995H5.52106C3.78867 21.9995 2.54695 20.2795 3.1578 18.6695C4.12914 16.1095 6.44233 13.0195 12 13.0195C17.5577 13.0195 19.8709 16.1095 20.8422 18.6695Z">
                                    </path>
                                </svg>
                            </a>
                            <span class="text-sm font-semibold">{{ Str::ucfirst(Auth::user()->name) }}</span>

                        </button>

                        <!-- Dropdown Menu -->
                        <div
                            class="absolute right-0 mt-1 w-40 z-70 bg-white shadow-lg rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 text-sm">Profil
                                Saya</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 text-sm">Pesanan</a>
                            <form method="POST" action="{{ route('auth.logout') }}">
                                @csrf
                                <button type="submit"
                                    class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 text-sm">Keluar</button>
                            </form>
                        </div>
                    </div>
                @endguest

            </div>

        </div>
        <div class="hidden lg:flex mx-3 mb-1 relative z-50">
            <div class="relative group">

                <!-- Trigger -->
                <div
                    class="h-7 rounded text-slate-600 cursor-pointer
            hover:text-sky-400 flex items-center text-sm gap-1">
                    <svg width="15" height="15" type="image/svg+xml" viewBox="0 0 24 24" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill="#currentColor" d="M17.3 21.7a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Z"></path>
                        <path fill="#currentColor"
                            d="M9 13H4.5a2 2 0 0 0-2 2v4.5c0 1.1.9 2 2 2H9a2 2 0 0 0 2-2V15a2 2 0 0 0-2-2Z"></path>
                        <path fill="#currentColor"
                            d="M9 2.5H4.5a2 2 0 0 0-2 2V9c0 1.1.9 2 2 2H9a2 2 0 0 0 2-2V4.5a2 2 0 0 0-2-2Z"></path>
                        <path fill="#currentColor"
                            d="M19.5 2.5H15a2 2 0 0 0-2 2V9c0 1.1.9 2 2 2h4.5a2 2 0 0 0 2-2V4.5a2 2 0 0 0-2-2Z"></path>
                    </svg>
                    Kategori
                </div>

                <!-- Dropdown -->
                <div
                    class="absolute left-0 top-full mt-2 w-[600px]
                    bg-white rounded-lg shadow-md
                    opacity-0 invisible
                    group-hover:opacity-100 group-hover:visible
                    transition-all duration-200 z-50">

                    <div class="flex">

                        <!-- LEFT: CATEGORY SIDEBAR -->
                        <div class="w-48 bg-sky-50">
                            <ul class="text-sm">

                                <li class="group/item">
                                    <a href="#"
                                        class="block px-4 py-3 hover:bg-white hover:text-sky-500 font-medium text-gray-500">
                                        Elektronik
                                    </a>
                                </li>

                                <li class="group/item">
                                    <a href="#"
                                        class="block px-4 py-3 hover:bg-white hover:text-sky-500 font-medium text-gray-500">
                                        Fashion
                                    </a>
                                </li>

                                <li class="group/item">
                                    <a href="#"
                                        class="block px-4 py-3 hover:bg-white hover:text-sky-500 font-medium text-gray-500">
                                        Rumah Tangga
                                    </a>
                                </li>

                                <li class="group/item">
                                    <a href="#"
                                        class="block px-4 py-3 hover:bg-white hover:text-sky-500 font-medium text-gray-500">
                                        Makanan
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <!-- RIGHT: SUB CATEGORY -->
                        <div class="flex-1 p-4">
                            <div class="grid grid-cols-3 gap-4 text-sm">

                                <a href="#" class="hover:text-sky-500">Handphone</a>
                                <a href="#" class="hover:text-sky-500">Laptop</a>
                                <a href="#" class="hover:text-sky-500">Aksesoris</a>

                                <a href="#" class="hover:text-sky-500">TV</a>
                                <a href="#" class="hover:text-sky-500">Audio</a>
                                <a href="#" class="hover:text-sky-500">Kamera</a>

                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>

    </div>
</div>
