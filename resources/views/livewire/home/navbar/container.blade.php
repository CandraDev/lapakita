<!-- MAIN NAV (Sticky) -->
<div class="bg-white shadow-[0_4px_6px_-1px_rgba(0,0,0,0.05)] z-40 sticky top-0"
    style="background-image: url('{{ asset('gui/header.png') }}');">
    <div class="w-full p-2 md:h-auto lg:max-w-6xl lg:mx-auto flex items-center gap-2 lg:p-4 justify-between">

        <!-- Logo -->
        <div class="hidden lg:flex mx-2">
            <img src="{{ asset('logo/lapakita-main.png') }}" class="h-11">
        </div>

        <!-- Search -->
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

                <div class="relative group hidden lg:block">
                    <button
                        class="flex items-center gap-2 text-gray-800 px-3 py-2 rounded-md hover:bg-gray-100/70 hover:text-sky-500 transition">
                        <a href="/member/profile" class="account__wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="24" height="24">
                                <path
                                    d="M17.0071 7C17.0071 9.76142 14.7655 12 12.0002 12C9.23497 12 6.9933 9.76142 6.9933 7C6.9933 4.23858 9.23497 2 12.0002 2C14.7655 2 17.0071 4.23858 17.0071 7ZM20.8422 18.6695C21.453 20.2795 20.2113 21.9995 18.4789 21.9995H5.52106C3.78867 21.9995 2.54695 20.2795 3.1578 18.6695C4.12914 16.1095 6.44233 13.0195 12 13.0195C17.5577 13.0195 19.8709 16.1095 20.8422 18.6695Z" />
                            </svg>
                        </a>
                        <span class="text-sm font-semibold">{{ Str::ucfirst(Auth::user()->name) }}</span>
                    </button>

                    <!-- Dropdown -->
                    <div
                        class="absolute right-0 mt-1  z-50 bg-white shadow-lg rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                        {{-- <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 text-sm">Profil Saya</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 text-sm">Pesanan</a>
                        <form method="POST" action="{{ route('auth.logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 text-sm">Keluar</button>
                        </form> --}}
                        <div class="grid grid-cols-2 items-center w-full p-3">
                            <!-- User Info -->
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-sky-100 flex-shrink-0"></div>

                                <div class="ms-3 leading-tight">
                                    <div class="flex items-center gap-1  w-60">
                                        <span class="text-sm font-semibold">
                                            {{ Auth::user()->name }}
                                        </span>

                                        <a href="{{ route('auth.account') }}"
                                            class="text-[10px] font-bold text-sky-600 hover:underline flex items-center gap-1">
                                            Ubah
                                            <span class="h-1.5 w-1.5 bg-red-500 rounded-full inline-block shadow">
                                            </span>
                                        </a>
                                    </div>

                                    <span class="text-xs text-sky-800 block">
                                        {{ Auth::user()->email }}
                                    </span>
                                </div>
                            </div>

                            <!-- Logout -->
                            <div class="flex justify-end mr-5">

                                <form method="POST" action="{{ route('auth.logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="text-sm font-semibold text-red-600 hover:text-red-700 cursor-pointer">
                                        Keluar
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 w-100 m-4 gap-2">
                            <div class="h-10 rounded border border-slate-400 flex items-center hover:bg-gray-100">
                                <div class="flex items-center justify-center w-10">
                                    <svg viewBox="0 0 24 24" class="text-gray-400 h-6.5 w-6.5 inline-block" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22ZM10.8613 9.36335L10.7302 9.59849C10.5862 9.85677 10.5142 9.98591 10.402 10.0711C10.2897 10.1563 10.1499 10.188 9.87035 10.2512L9.61581 10.3088C8.63195 10.5314 8.14001 10.6427 8.02297 11.0191C7.90593 11.3955 8.2413 11.7876 8.91204 12.572L9.08557 12.7749C9.27617 12.9978 9.37147 13.1092 9.41435 13.2471C9.45722 13.385 9.44281 13.5336 9.41399 13.831L9.38776 14.1018C9.28635 15.1482 9.23565 15.6715 9.54206 15.9041C9.84847 16.1367 10.3091 15.9246 11.2303 15.5005L11.4686 15.3907C11.7304 15.2702 11.8613 15.2099 12 15.2099C12.1387 15.2099 12.2696 15.2702 12.5314 15.3907L12.7697 15.5005C13.6909 15.9246 14.1515 16.1367 14.4579 15.9041C14.7644 15.6715 14.7136 15.1482 14.6122 14.1018L14.586 13.831C14.5572 13.5336 14.5428 13.385 14.5857 13.2471C14.6285 13.1092 14.7238 12.9978 14.9144 12.7749L15.088 12.572C15.7587 11.7876 16.0941 11.3955 15.977 11.0191C15.86 10.6427 15.3681 10.5314 14.3842 10.3088L14.1296 10.2512C13.8501 10.188 13.7103 10.1563 13.598 10.0711C13.4858 9.98592 13.4138 9.85678 13.2698 9.5985L13.1387 9.36335C12.6321 8.45445 12.3787 8 12 8C11.6213 8 11.3679 8.45446 10.8613 9.36335Z"
                                                fill="currentColor"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <div class="flex flex-col justify-around">
                                        <div class="text-xs text-gray-400 -mb-2">Tier</div>
                                        <div class="text-sm mt-1">Bronze</div>
                                    </div>
                                </div>
                            </div>
                            <div class="h-10 rounded border border-slate-400 flex items-center hover:bg-gray-100">
                                <div class="flex items-center justify-center w-10">
                                    <svg fill="currentColor" class="text-gray-400 w-5 h-5 inline-block mr-2"
                                        height="200px" width="200px" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 491.52 491.52" xml:space="preserve">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g>
                                                <g>
                                                    <path
                                                        d="M491.52,143.36V81.92C491.52,25.641,374.743,0,266.24,0S40.96,25.641,40.96,81.92v61.44 c0,10.179,2.99,19.558,7.987,28.283C16.609,185.569,0,203.51,0,225.28v61.44c0,24.433,15.749,44.667,40.96,60.58v41.82 c0,66.519,116.06,102.4,225.28,102.4s225.28-35.881,225.28-102.4v-61.44c0-19.763-13.804-36.536-40.96-50.012V225.28 c0-5.222-1.126-11.653-4.669-18.555C473.805,190.423,491.52,169.247,491.52,143.36z M409.6,285.286l-0.369,2.97 c-2.642,21.873-57.651,51.323-144.65,58.348c-1.106,0.082-2.273,0.123-3.379,0.205c-5.141,0.389-10.322,0.737-15.688,0.942 c-6.595,0.266-13.332,0.41-20.234,0.41c-59.228,0-115.978-10.936-151.859-29.245l-6.144-3.133 C50.299,306.094,40.96,295.69,40.96,286.72v-11.633c0.246,0.123,0.573,0.225,0.819,0.369c4.997,2.458,10.322,4.772,15.995,6.922 c1.393,0.553,2.929,1.024,4.362,1.536c4.444,1.597,9.032,3.133,13.804,4.567c2.13,0.635,4.321,1.229,6.513,1.843 c4.506,1.229,9.114,2.396,13.824,3.502c2.212,0.512,4.403,1.044,6.656,1.516c5.837,1.249,11.817,2.396,17.92,3.441 c1.167,0.205,2.253,0.43,3.42,0.635c7.291,1.188,14.746,2.232,22.303,3.133c2.212,0.266,4.444,0.492,6.656,0.737 c5.53,0.594,11.059,1.147,16.671,1.597c2.662,0.225,5.325,0.43,8.008,0.614c5.509,0.369,11.018,0.696,16.548,0.942 c2.437,0.102,4.854,0.225,7.291,0.328c7.864,0.266,15.708,0.43,23.531,0.43s15.667-0.164,23.532-0.43 c2.437-0.102,4.854-0.225,7.291-0.328c5.53-0.246,11.039-0.573,16.548-0.942c2.683-0.184,5.345-0.389,8.008-0.614 c5.612-0.451,11.141-1.003,16.671-1.597c2.212-0.246,4.444-0.471,6.656-0.737c7.557-0.901,15.012-1.946,22.303-3.133 c1.167-0.205,2.253-0.43,3.42-0.635c6.103-1.044,12.083-2.191,17.92-3.441c2.253-0.471,4.444-1.004,6.656-1.516 c4.71-1.106,9.318-2.273,13.824-3.502c2.191-0.614,4.362-1.208,6.513-1.843c4.772-1.434,9.359-2.97,13.804-4.567 c1.434-0.512,2.97-0.983,4.362-1.536c5.673-2.15,10.998-4.465,15.995-6.922c0.246-0.143,0.553-0.246,0.819-0.369V285.286z M450.56,143.36c0,10.936-13.701,24.023-38.482,35.328l-7.148,2.929C368.968,196.342,318.423,204.8,266.24,204.8 c-8.438,0-16.773-0.266-25.027-0.676c-1.29-0.082-2.56-0.164-3.85-0.246c-7.864-0.471-15.667-1.085-23.265-1.925h-0.123 c-50.319-5.591-93.614-19.026-117.187-37.315l-4.301-3.338c-6.799-6.185-10.568-12.349-10.568-17.94v-11.633 c0.246,0.123,0.573,0.225,0.819,0.369c4.997,2.458,10.322,4.772,15.995,6.922c1.393,0.553,2.929,1.024,4.362,1.536 c4.444,1.597,9.032,3.133,13.804,4.567c2.13,0.635,4.321,1.229,6.513,1.843c4.506,1.229,9.114,2.396,13.824,3.502 c2.212,0.512,4.403,1.044,6.656,1.516c5.837,1.249,11.817,2.396,17.92,3.441c1.167,0.205,2.253,0.43,3.42,0.635 c7.291,1.188,14.746,2.232,22.303,3.133c2.212,0.266,4.444,0.492,6.656,0.737c5.53,0.594,11.059,1.147,16.671,1.597 c2.662,0.225,5.325,0.43,8.008,0.614c5.509,0.369,11.018,0.696,16.548,0.942c2.437,0.102,4.854,0.225,7.291,0.328 c7.864,0.266,15.708,0.43,23.532,0.43s15.667-0.164,23.531-0.43c2.437-0.102,4.854-0.225,7.291-0.328 c5.53-0.246,11.039-0.573,16.548-0.942c2.683-0.184,5.345-0.389,8.008-0.614c5.612-0.451,11.141-1.003,16.671-1.597 c2.212-0.246,4.444-0.471,6.656-0.737c7.557-0.901,15.012-1.946,22.303-3.133c1.167-0.205,2.253-0.43,3.42-0.635 c6.103-1.044,12.083-2.191,17.92-3.441c2.253-0.471,4.444-1.004,6.656-1.516c4.71-1.106,9.318-2.273,13.824-3.502 c2.191-0.614,4.362-1.208,6.513-1.843c4.772-1.434,9.359-2.97,13.804-4.567c1.434-0.512,2.97-0.983,4.362-1.536 c5.673-2.15,10.998-4.465,15.995-6.922c0.246-0.143,0.553-0.246,0.819-0.369V143.36z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <div class="flex flex-col justify-around">
                                        <div class="text-xs text-gray-400 -mb-2">Poin</div>
                                        <div class="text-sm mt-1">1</div>
                                    </div>
                                </div>
                            </div>
                            <div class="h-8 rounded flex items-center hover:bg-gray-100 hover:rounded-xl">
                                <div class="flex items-center justify-center w-10">
                                    <svg class="text-gray-400" width="24" height="24" aria-hidden="true"
                                        type="image/svg+xml" viewBox="0 0 24 24" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2 10V8C2 6.62 3.12 5.5 4.5 5.5H6V18.5H4.5C3.12 18.5 2 17.38 2 16V14C3.1 14 4 13.1 4 12C4 10.9 3.1 10 2 10ZM7 5.5H19.5C20.88 5.5 22 6.62 22 8V16C22 17.38 20.88 18.5 19.5 18.5H7V5.5ZM10 15.25H15C15.55 15.25 16 14.8 16 14.25C16 13.7 15.55 13.25 15 13.25H10C9.45 13.25 9 13.7 9 14.25C9 14.8 9.45 15.25 10 15.25ZM10 10.75H18C18.55 10.75 19 10.3 19 9.75C19 9.2 18.55 8.75 18 8.75H10C9.45 8.75 9 9.2 9 9.75C9 10.3 9.45 10.75 10 10.75Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <div class="text-xs">Voucher <span
                                            class="text-sm font-medium  text-sky-500 ms-1">21</span>
                                    </div>
                                </div>
                            </div>
                            <div class="h-8 rounded flex items-center hover:bg-gray-100 hover:rounded-xl">
                                <div class="flex items-center justify-center w-10">
                                    <svg class="text-gray-400" width="24" height="24" aria-hidden="true"
                                        type="image/svg+xml" viewBox="0 0 24 24" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.5 4H4.5C3.12 4 2 5.11964 2 6.4992V15.4963C2 16.8759 3.12 17.9955 4.5 17.9955H12.6L11.68 20.2948C11.33 21.5344 12.77 22.5041 13.78 21.7143L17.89 18.0055H19.5C20.88 18.0055 22 16.8859 22 15.5063V6.4992C22 5.11964 20.88 4 19.5 4ZM9.99 14.9365C9.61 15.1364 9.16 14.8165 9.23 14.3867L9.61 12.1474L7.98 10.5579C7.67 10.258 7.84 9.72816 8.27 9.66818L10.52 9.33828L11.53 7.29894C11.72 6.90907 12.28 6.90907 12.47 7.29894L13.48 9.33828L15.73 9.66818C16.16 9.72816 16.33 10.258 16.02 10.5579L14.39 12.1474L14.77 14.3867C14.84 14.8165 14.4 15.1364 14.01 14.9365L12 13.8768L9.99 14.9365Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <div class="text-xs">Ulasan
                                    </div>
                                </div>
                            </div>
                            <div class="h-8 rounded flex items-center hover:bg-gray-100 hover:rounded-xl">
                                <div class="flex items-center justify-center w-10">
                                    <svg class="text-gray-400" width="24" height="24" aria-hidden="true"
                                        aria-hidden="true" type="image/svg+xml" viewBox="0 0 24 24" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M19.5 2H4.5C3.12 2 2 3.12 2 4.5V7H22V4.5C22 3.12 20.88 2 19.5 2ZM21 8H15V9.25C15 9.94 14.44 10.5 13.75 10.5H10.25C9.56 10.5 9 9.94 9 9.25V8H3V18.6C3 19.93 4.08 21 5.4 21H14.03C14.86 21.62 15.88 22 17 22C19.76 22 22 19.76 22 17C22 15.88 21.62 14.86 21 14.03V8ZM17 21C14.79 21 13 19.21 13 17C13 14.79 14.79 13 17 13C19.21 13 21 14.79 21 17C21 19.21 19.21 21 17 21ZM18.5501 18.97C18.6301 19 18.7001 19.02 18.7801 19.02V19.01C18.9701 19.01 19.1401 18.91 19.2301 18.74C19.3501 18.5 19.2601 18.19 19.0101 18.07L17.3101 17.2V14.51C17.3101 14.23 17.0901 14.01 16.8101 14.01C16.5301 14.01 16.3101 14.23 16.3101 14.51V17.51C16.3101 17.7 16.4101 17.88 16.5801 17.96L18.5501 18.97Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <div class="text-xs">Daftar Pesanan
                                    </div>
                                </div>
                            </div>
                            <div class="h-8 rounded flex items-center hover:bg-gray-100 hover:rounded-xl">
                                <div class="flex items-center justify-center w-10">
                                    <svg class="text-gray-400" width="24" height="24" aria-hidden="true"
                                        aria-hidden="true" type="image/svg+xml" viewBox="0 0 24 24" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.46 3C14.02 3 12.97 4.05 12 6C11.03 4.05 9.98 3 7.54 3C4.02 3 2 6.03 2 9.49C2 14.99 10.52 21 12 21C13.48 21 22 14.96 22 9.49C22 6.05 20.02 3 16.46 3Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <div class="text-xs">Wishlist
                                    </div>
                                </div>
                            </div>
                            <div class="h-8 rounded flex items-center hover:bg-gray-100 hover:rounded-xl">
                                <div class="flex items-center justify-center w-10">
                                    <svg class="text-gray-400" width="24" height="24" aria-hidden="true"
                                        aria-hidden="true" type="image/svg+xml" viewBox="0 0 24 24" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M19 8.5V2.05C20.14 2.28 21 3.29 21 4.5V19.5C21 20.88 19.88 22 18.5 22H7.5C6.12 22 5 20.88 5 19.5V18H4.25C3.56 18 3 17.44 3 16.75C3 16.06 3.56 15.5 4.25 15.5H5V8.5H4.25C3.56 8.5 3 7.94 3 7.25C3 6.56 3.56 6 4.25 6H5V4.5C5 3.12 6.12 2 7.5 2H12V8.5C12 9.33 12.67 10 13.5 10C13.9 10 14.28 9.84 14.56 9.56L15.5 8.62L16.44 9.56C16.73 9.84 17.1 10 17.5 10C18.33 10 19 9.33 19 8.5ZM8 19C8 19.55 8.45 20 9 20H17C17.55 20 18 19.55 18 19C18 18.45 17.55 18 17 18H9C8.45 18 8 18.45 8 19ZM15.5 7.2L17.15 8.85C17.46 9.17 18 8.95 18 8.5V2H13V8.5C13 8.94 13.54 9.16 13.85 8.85L15.5 7.2Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <div class="text-xs">Alamat Saya
                                    </div>
                                </div>
                            </div>
                            <div class="h-8 rounded flex items-center hover:bg-gray-100 hover:rounded-xl">
                                <div class="flex items-center justify-center w-10">
                                    <svg class="text-sky-600" width="24" height="24" aria-hidden="true"
                                        aria-hidden="true" type="image/svg+xml" viewBox="0 0 24 24" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M19 8.5V2.05C20.14 2.28 21 3.29 21 4.5V19.5C21 20.88 19.88 22 18.5 22H7.5C6.12 22 5 20.88 5 19.5V18H4.25C3.56 18 3 17.44 3 16.75C3 16.06 3.56 15.5 4.25 15.5H5V8.5H4.25C3.56 8.5 3 7.94 3 7.25C3 6.56 3.56 6 4.25 6H5V4.5C5 3.12 6.12 2 7.5 2H12V8.5C12 9.33 12.67 10 13.5 10C13.9 10 14.28 9.84 14.56 9.56L15.5 8.62L16.44 9.56C16.73 9.84 17.1 10 17.5 10C18.33 10 19 9.33 19 8.5ZM8 19C8 19.55 8.45 20 9 20H17C17.55 20 18 19.55 18 19C18 18.45 17.55 18 17 18H9C8.45 18 8 18.45 8 19ZM15.5 7.2L17.15 8.85C17.46 9.17 18 8.95 18 8.5V2H13V8.5C13 8.94 13.54 9.16 13.85 8.85L15.5 7.2Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <div class="text-sm text-sky-600">Menjadi Penjual
                                        <span class="inline-block w-1 h-1 rounded-full bg-sky-500 shadow shadow-sky-500 align-middle ms-1"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endguest
        </div>
    </div>

    <!-- Kategori dan alamat -->
    <div
        class="hidden w-full p-2 pb-4 md:h-7 lg:max-w-6xl lg:mx-auto  items-center gap-2  justify-between lg:flex mx-3 mb-1 relative z-20">

        {{-- ini sisi kiri --}}
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
</div>
