<sidebar class="w-2/10 bg-white p-4 rounded-lg shadow-[0_0_15px_rgba(0,0,0,0.07)] h-fit hidden lg:flex flex-col h-fit sticky top-20">
    <div class="flex">
        <div class="w-9 h-9 rounded-full bg-sky-100 flex-shrink-0 overflow-hidden flex items-center justify-center">
            @if (Auth::check() && Auth::user()->avatar)
                <img src="{{ Str::startsWith(Auth::user()->avatar, ['http://', 'https://']) ? Auth::user()->avatar : asset('storage/' . Auth::user()->avatar) }}"
                    class="w-full h-full object-cover" alt="Avatar" />
            @else
                {{-- SVG icon user --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-sky-600" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            @endif
        </div>
        <div class="flex flex-col justify-center hover:bg-gray-50 transition hover:rounded-lg w-full ps-2">
            <div class="flex items-center gap-2 max-w-full">
                <span class="align-middle text-sm font-semibold truncate max-w-[150px]">
                    {{ Auth::user()->name }}
                </span>
                <a href={{ route('auth.account') }} class="text-xs text-sky-600 font-bold whitespace-nowrap">
                    Ubah
                </a>
            </div>
            <span class="text-xs -mt-1 text-gray-500">{{ Auth::user()->email }}</span>
        </div>
    </div>
    <div class="w-full  rounded-lg mt-4 pb-5 mb-5 border-b border-gray-500/20">
        <div class="h-7 rounded border border-slate-200  flex items-center hover:bg-gray-50 transition mb-1">
            <div class="flex items-center justify-center w-7">
                <svg viewBox="0 0 24 24" class="text-gray-400 h-5 w-5 inline-block" fill="none"
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
                <div class="flex items-center">
                    <div class="text-xs font-semibold text-gray-700">Bronze</div>
                </div>
            </div>
        </div>
        <div class="h-7 rounded border border-slate-200  flex items-center hover:bg-gray-50 transition">
            <div class="flex items-center justify-center w-7">
                <svg fill="currentColor" class="text-gray-400 w-3 h-3 inline-block" height="200px" width="200px"
                    version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 491.52 491.52" xml:space="preserve">
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
                <div class="flex items-center">
                    <div class="text-xs font-semibold text-gray-700">1 poin</div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full rounded-lg mt-4 pb-5 mb-5 border-b border-gray-500/20">
        <a href="{{ route('member.order') }}">
            <div
                class="w-full flex items-center px-1 font-medium text-xs h-8
                {{ Route::is('member.order*')
                    ? 'border-l-4 border-sky-500 text-sky-500 bg-gray-50 ps-2 transition rounded-sm'
                    : 'hover:bg-gray-50' }}">
                Daftar Pesanan
            </div>
        </a>
        <a href="{{ route('member.voucher') }}">
            <div
                class="w-full flex items-center px-1 font-medium text-xs h-8
                {{ Route::is('member.voucher')
                    ? 'border-l-4 border-sky-500 text-sky-500 bg-gray-50 ps-2 transition rounded-sm'
                    : 'hover:bg-gray-50' }}">
                Voucher
            </div>
        </a>

        <a href="{{ route('member.review') }}">
            <div
                class="w-full flex items-center px-1 font-medium text-xs h-8
                {{ Route::is('member.review')
                    ? 'border-l-4 border-sky-500 text-sky-500 bg-gray-50 ps-2 transition rounded-sm'
                    : 'hover:bg-gray-50' }}">
                Ulasan
            </div>
        </a>
    </div>
    <div class="w-full rounded-lg mt-4 pb-5 mb-5 border-b border-gray-500/20">
        <a href="{{ route('member.wishlist') }}">
            <div
                class="w-full flex items-center px-1 font-medium text-xs h-8
                {{ Route::is('member.wishlist')
                    ? 'border-l-4 border-sky-500 text-sky-500 bg-gray-50 ps-2 transition rounded-sm'
                    : 'hover:bg-gray-50' }}">
                Wishlist
            </div>
        </a>
        <a href="{{ route('member.address') }}">
            <div
                class="w-full flex items-center px-1 font-medium text-xs h-8
                {{ Route::is('member.address')
                    ? 'border-l-4 border-sky-500 text-sky-500 bg-gray-50 ps-2 transition rounded-sm'
                    : 'hover:bg-gray-50' }}">
                Alamat
            </div>
        </a>
        <a href="{{ route('member.seller-favorites') }}">
            <div
                class="w-full flex items-center px-1 font-medium text-xs h-8
                {{ Route::is('member.seller-favorites')
                    ? 'border-l-4 border-sky-500 text-sky-500 bg-gray-50 ps-2 transition rounded-sm'
                    : 'hover:bg-gray-50' }}">
                Seller Favorit
            </div>
        </a>
        <a href="#">
            <div
                class="w-full flex items-center px-1 font-medium text-xs h-8 hover:bg-gray-50 transition rounded-sm text-red-500 ">
                Keluar
            </div>
        </a>
    </div>

</sidebar>
