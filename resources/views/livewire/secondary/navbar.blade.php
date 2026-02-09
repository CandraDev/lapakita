<header>

    <nav class="fixed top-0 right-0 left-0 bg-white shadow-[0_4px_6px_-1px_rgba(0,0,0,0.05)] h-14 w-full flex items-center lg:hidden">
        <div class="w-14 flex items-center justify-center text-slate-600 ">
            <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path
                        d="M0 14.545L1.455 16 8 9.455 14.545 16 16 14.545 9.455 8 16 1.455 14.545 0 8 6.545 1.455 0 0 1.455 6.545 8z"
                        fill-rule="evenodd"></path>
                </g>
            </svg>
        </div>
        <div class="text-lg font-bold flex-1">
            {{ $titleNav }}
        </div>
    </nav>
    <!-- MAIN NAV (Sticky) -->

    <nav class="fixed top-0 right-0 left-0 bg-sky-100 shadow-[0_4px_6px_-1px_rgba(0,0,0,0.01)] z-40  hidden lg:block"
        style="background-image: url('{{ asset('gui/header.png') }}');">
            @livewire('home.top-bar')
            <div class="w-full p-2 md:h-auto lg:max-w-7xl lg:mx-auto flex items-center gap-2 lg:p-4 justify-between">

                <!-- Logo -->
                <a href="{{ route('home') }}" class="hidden lg:flex mx-2">
                    <img src="{{ asset('logo/lapakita-main.png') }}" class="h-11">
                </a href="{{ route('home') }}">

                @livewire('nav-search')

                <!-- Login/Profile -->
                <div class="flex gap-2 items-center">
                    @guest
                        <a href="{{ route('login') }}"
                            class="px-2 bg-sky-500 h-8.5 text-xs font-medium text-white rounded-md shadow flex items-center justify-center gap-1">
                            Masuk
                        </a>
                        <a href="{{ route('register') }}"
                            class="hidden px-2 bg-white/70 border-sky-500 border-2 h-8.5 text-xs font-bold text-sky-500 rounded-xl shadow sm:flex items-center justify-center gap-1">
                            Daftar
                        </a>
                    @else
                        <div class="relative group">
                            <!-- Button -->
                            <button
                                class="hidden lg:flex items-center gap-2 text-gray-800 px-3 py-2 rounded-lg hover:bg-gray-100/50 hover:text-sky-500 transition ">
                                <svg viewBox="0 0 24 24" fill="currentColor" class="h-7 w-7" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path opacity="0.5"
                                            d="M10.0234 2C9.05694 2 8.27344 2.7835 8.27344 3.75C8.27344 4.7165 9.05694 5.5 10.0234 5.5H14.0234C14.9899 5.5 15.7734 4.7165 15.7734 3.75C15.7734 2.7835 14.9899 2 14.0234 2H10.0234Z"
                                            fill="currentColor"></path>
                                        <path opacity="0.5"
                                            d="M3.88671 16.2052C3.02876 12.7734 2.59979 11.0575 3.50062 9.90376C4.40145 8.75 6.17016 8.75 9.70756 8.75H14.3382C17.8757 8.75 19.6444 8.75 20.5452 9.90376C21.446 11.0575 21.0171 12.7734 20.1591 16.2052C19.6134 18.3879 19.3406 19.4792 18.5268 20.1146C17.713 20.75 16.5881 20.75 14.3382 20.75H9.70756C7.45771 20.75 6.33278 20.75 5.519 20.1146C4.70521 19.4792 4.43238 18.3879 3.88671 16.2052Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M15.6039 4.5024C15.7126 4.2745 15.7734 4.0194 15.7734 3.75009C15.7734 3.48204 15.7132 3.22806 15.6055 3.00098C16.289 3.00595 16.8217 3.03732 17.2973 3.22318C17.8655 3.44525 18.3597 3.82275 18.7234 4.31251C19.0903 4.80659 19.2626 5.43988 19.4996 6.31153L19.546 6.4819L20.0587 9.44488C19.6501 9.16295 19.1231 8.99542 18.4414 8.89587L18.0801 6.80786C17.7964 5.76815 17.6934 5.44141 17.5191 5.20683C17.3233 4.94312 17.0572 4.73985 16.7512 4.62027C16.5314 4.53436 16.2658 4.50909 15.6039 4.5024Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M8.44142 3.00098C8.3337 3.22807 8.27344 3.48204 8.27344 3.75009C8.27344 4.0194 8.33427 4.2745 8.44294 4.5024C7.78109 4.50909 7.51551 4.53436 7.29571 4.62027C6.98976 4.73985 6.72365 4.94312 6.5278 5.20683C6.35359 5.44141 6.25059 5.76815 5.96681 6.80786L5.60551 8.89578C4.92397 8.99527 4.39697 9.16269 3.98828 9.44442L4.50092 6.4819L4.54731 6.31154C4.78439 5.43989 4.95663 4.80659 5.32356 4.31251C5.68728 3.82275 6.18149 3.44525 6.74968 3.22318C7.22521 3.03733 7.75793 3.00595 8.44142 3.00098Z"
                                            fill="currentColor"></path>
                                    </g>
                                </svg>
                            </button>

                            <!-- Dropdown -->
                            <div
                                class="absolute right-0 mt-2 w-100 bg-white shadow-lg rounded-lg border border-gray-200 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                                <div class="p-4">
                                    <h3 class="font-semibold text-gray-400 mb-2 text-xs">Baru Ditambahkan</h3>
                                    <ul class="">
                                        <li class="py-2 flex justify-between">
                                            <div class="w-10 h-10 rounded bg-gray-300 shadow flex-shrink-0">
                                            </div>
                                            <span class="truncate ms-2 align-middle me-4">Lorem ipsum, dolor sit amet consectetur
                                                adipisicing elit. Animi odio doloremque nisi sint.</span>
                                            <span class="text-sm flex-shrink-0 text-sky-500  align-middle">Rp50.000</span>
                                        </li>

                                        <li class="py-2 flex justify-between">
                                            <div class="w-10 h-10 rounded bg-gray-300 shadow flex-shrink-0">
                                            </div>
                                            <span class="truncate ms-2 align-middle me-4">Lorem ipsum, dolor sit amet consectetur
                                                adipisicing elit. Animi odio doloremque nisi sint.</span>
                                            <span class="text-sm flex-shrink-0 text-sky-500  align-middle">Rp50.000</span>
                                        </li>

                                        <li class="py-2 flex justify-between">
                                            <div class="w-10 h-10 rounded bg-gray-300 shadow flex-shrink-0">
                                            </div>
                                            <span class="truncate ms-2 align-middle me-4">Lorem ipsum, dolor sit amet consectetur
                                                adipisicing elit. Animi odio doloremque nisi sint.</span>
                                            <span class="text-sm flex-shrink-0 text-sky-500  align-middle">Rp50.000</span>
                                        </li>

                                        <li class="py-2 flex justify-between">
                                            <div class="w-10 h-10 rounded bg-gray-300 shadow flex-shrink-0">
                                            </div>
                                            <span class="truncate ms-2 align-middle me-4">Lorem ipsum, dolor sit amet consectetur
                                                adipisicing elit. Animi odio doloremque nisi sint.</span>
                                            <span class="text-sm flex-shrink-0 text-sky-500  align-middle">Rp50.000</span>
                                        </li>

                                        <li class="py-2 flex justify-between">
                                            <div class="w-10 h-10 rounded bg-gray-300 shadow flex-shrink-0">
                                            </div>
                                            <span class="truncate ms-2 align-middle me-4">Lorem ipsum, dolor sit amet consectetur
                                                adipisicing elit. Animi odio doloremque nisi sint.</span>
                                            <span class="text-sm flex-shrink-0 text-sky-500  align-middle">Rp50.000</span>
                                        </li>

                                    </ul>
                                    <div class="flex items-center">
                                        <div class="text-xs text-gray-400 flex-1">
                                            245 Produk lainnya
                                        </div>
                                        <button
                                            class="mt-3 w-60 bg-sky-500 text-white py-2 rounded-lg hover:bg-sky-600 transition text-sm ">
                                            Tampilkan Keranjang Belanja
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <button
                            class="hidden lg:flex items-center gap-2 text-gray-800 px-3 py-2 rounded-md hover:bg-gray-100/70 hover:text-sky-500 transition">
                            <span class="text-sm font-semibold">
                                Rp. 0
                            </span>
                        </button>

                        @livewire('home.navbar.desktop-profile')
                    @endguest
                </div>
            </div>

            <!-- Kategori dan alamat -->
            <div
                class="hidden w-full p-2 pb-4 md:h-7 lg:max-w-7xl lg:mx-auto  items-center gap-2  justify-between lg:flex mx-3 mb-1 relative z-20">

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

                    <div class="absolute left-0 top-full mt-2 w-[600px]
                        bg-white rounded-lg shadow-md
                        opacity-0 invisible
                        group-hover:opacity-100 group-hover:visible
                        transition-all duration-200 z-50">

                        <div class="flex">

                            <!-- LEFT: CATEGORY SIDEBAR -->
                            <div class="w-48 bg-sky-50 rounded-lg shadow">
                                <ul class="text-sm">
                                    @foreach($categories as $category)
                                        <li class="group/item">
                                            <!-- Trigger the category selection -->
                                            <a href="#"
                                            class="block px-4 py-3 hover:bg-white hover:text-sky-500 font-medium text-gray-500"
                                            wire:click="selectCategory({{ $category->id }})">
                                            {{ $category->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <!-- RIGHT: SUB CATEGORY CONTENT (dynamic content) -->
                            <div class="flex-1 p-4">
                                <div class="grid grid-cols-3 gap-4 text-sm">
                                    <!-- Dynamically display subcategories for the selected category -->
                                    @if($subCategories)
                                        @foreach($subCategories as $subCategory)
                                            <a href="#" class="hover:text-sky-500">{{ $subCategory->name }}</a>
                                        @endforeach
                                    @else
                                        <p class="text-gray-400">Select a category to see subcategories</p>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>






                </div>

                <div
                    class="h-7 rounded text-sky-700 transition cursor-pointer
                    hover:text-sky-400 flex items-center text-sm gap-1">
                    <svg class="h-4 w-4" width="24" height="24" aria-hidden="true" aria-hidden="true"
                        type="image/svg+xml" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M19 8.5V2.05C20.14 2.28 21 3.29 21 4.5V19.5C21 20.88 19.88 22 18.5 22H7.5C6.12 22 5 20.88 5 19.5V18H4.25C3.56 18 3 17.44 3 16.75C3 16.06 3.56 15.5 4.25 15.5H5V8.5H4.25C3.56 8.5 3 7.94 3 7.25C3 6.56 3.56 6 4.25 6H5V4.5C5 3.12 6.12 2 7.5 2H12V8.5C12 9.33 12.67 10 13.5 10C13.9 10 14.28 9.84 14.56 9.56L15.5 8.62L16.44 9.56C16.73 9.84 17.1 10 17.5 10C18.33 10 19 9.33 19 8.5ZM8 19C8 19.55 8.45 20 9 20H17C17.55 20 18 19.55 18 19C18 18.45 17.55 18 17 18H9C8.45 18 8 18.45 8 19ZM15.5 7.2L17.15 8.85C17.46 9.17 18 8.95 18 8.5V2H13V8.5C13 8.94 13.54 9.16 13.85 8.85L15.5 7.2Z">
                        </path>
                    </svg>
                    Tambah alamat untuk mulai belanja!
                </div>
            </div>
    </nav>
    <div class="w-full bg-gray-500 h-14 lg:h-30 shadow-[0_4px_6px_-1px_rgba(0,0,0,0.01)]"></div>
</header>
