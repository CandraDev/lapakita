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
    <div class="w-full h-35 bg-sky-200"
        style="background-image: url('{{ asset('gui/header.png') }}'); object-fit: contain;">
    </div>


    <div class="relative -top-10 w-[90%] mx-auto bg-white shadow rounded-lg pt-12 pb-4">

        <div
            class="absolute -top-10 left-1/2 -translate-x-1/2
                h-20 w-20 bg-sky-200 rounded-full
                border-4 border-white flex items-center justify-center">
            <span class="text-sky-600 text-sm">Lapakita</span>
        </div>

        <div class="text-center px-4">
            <h2 class="font-semibold  text-sky-600">Masuk</h2>
            <p class="text-sm text-gray-500">Tidak punya akun? <a class="text-sky-600">Daftar</a></p>
        </div>

    </div>
    <div class="min-h-[70vh] -mt-7">
        <a class="w-full bg-white h-13 flex items-center">
            <div class="flex items-center justify-center w-14">
                <svg width="24" height="24" aria-hidden="true" type="image/svg+xml" viewBox="0 0 24 24"
                    fill="#858585" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2 12C2 6.48 6.48 2 12 2C17.52 2 22 6.48 22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12ZM11.3899 14.2798C10.8999 14.2798 10.5499 13.8298 10.6599 13.3598C10.8399 12.6298 11.2599 11.5998 12.2699 10.8398C12.9899 10.1998 13.1999 9.68983 13.1999 9.07983C13.1999 8.41983 12.8199 7.89983 11.9899 7.89983C11.2499 7.89983 10.8799 8.28983 10.6999 8.84983C10.5999 9.16983 10.3199 9.39983 9.97988 9.39983H9.05988C8.55988 9.39983 8.18988 8.91983 8.33988 8.44983C8.71988 7.21983 9.76988 5.99983 12.0299 6.00983C14.8599 6.01983 15.6899 7.83983 15.6899 9.17983C15.6899 10.2598 15.3399 10.9998 14.0899 12.1498C13.4899 12.5898 13.2499 13.2198 13.1599 13.6798C13.0899 14.0298 12.7899 14.2898 12.4199 14.2898H11.3799L11.3899 14.2798ZM11.8199 17.9997C12.5986 17.9997 13.2299 17.3684 13.2299 16.5897C13.2299 15.811 12.5986 15.1797 11.8199 15.1797C11.0412 15.1797 10.4099 15.811 10.4099 16.5897C10.4099 17.3684 11.0412 17.9997 11.8199 17.9997Z">
                    </path>
                </svg>
            </div>
            <div class="text-gray-700 font-medium flex-1">
                Bantuan Seputar Lapakita
            </div>
            <div class="flex items-center justify-center w-15">
                <svg width="24" height="24" aria-hidden="true" type="image/svg+xml" viewBox="0 0 24 24"
                    fill="#858585" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.49 8.15532L13.69 12.0053L8.49 15.8353C8.22 16.0353 8.05 16.3153 8.01 16.6353C7.97 16.9553 8.05 17.2653 8.26 17.5253C8.68 18.0553 9.47 18.1553 10.01 17.7553L16.51 12.9653C16.82 12.7353 17 12.3753 17 12.0053C17 11.6353 16.82 11.2753 16.51 11.0453L10.01 6.24532C9.79 6.08532 9.53 5.99532 9.25 5.99532C8.86 5.99532 8.5 6.16532 8.26 6.46532C8.06 6.72532 7.97 7.03532 8.01 7.35532C8.05 7.67532 8.22 7.95532 8.49 8.15532Z">
                    </path>
                </svg>
            </div>
        </a>
        <a class="w-full bg-white h-13 flex items-center border-t border-gray-200">
            <div class="flex items-center justify-center w-14">
                <svg viewBox="0 0 24 24" width="24" height="24" xmlns="http://www.w3.org/2000/svg" id="store" class="icon glyph"
                    fill="#858585">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M20,14.81V20a2,2,0,0,1-2,2H6a2,2,0,0,1-2-2V14.81A4.25,4.25,0,0,0,5.25,15a4.3,4.3,0,0,0,2.25-.64,4.28,4.28,0,0,0,4.5,0,4.28,4.28,0,0,0,4.5,0,4.3,4.3,0,0,0,2.25.64A4.25,4.25,0,0,0,20,14.81ZM21.76,9,20.17,3.45A2,2,0,0,0,18.25,2H5.75A2,2,0,0,0,3.83,3.45L2.24,9A6.48,6.48,0,0,0,2,10.75a3.25,3.25,0,0,0,5.5,2.34,3.24,3.24,0,0,0,4.5,0,3.24,3.24,0,0,0,4.5,0A3.25,3.25,0,0,0,22,10.75,6.48,6.48,0,0,0,21.76,9Z"
                            style="fill:#currentColor"></path>
                    </g>
                </svg>
            </div>
            <div class="text-gray-700 font-medium flex-1">
                Jualan di Lapakita
            </div>
            <div class="flex items-center justify-center w-15">
                <svg width="24" height="24" aria-hidden="true" type="image/svg+xml" viewBox="0 0 24 24"
                    fill="#858585" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.49 8.15532L13.69 12.0053L8.49 15.8353C8.22 16.0353 8.05 16.3153 8.01 16.6353C7.97 16.9553 8.05 17.2653 8.26 17.5253C8.68 18.0553 9.47 18.1553 10.01 17.7553L16.51 12.9653C16.82 12.7353 17 12.3753 17 12.0053C17 11.6353 16.82 11.2753 16.51 11.0453L10.01 6.24532C9.79 6.08532 9.53 5.99532 9.25 5.99532C8.86 5.99532 8.5 6.16532 8.26 6.46532C8.06 6.72532 7.97 7.03532 8.01 7.35532C8.05 7.67532 8.22 7.95532 8.49 8.15532Z">
                    </path>
                </svg>
            </div>
        </a>
    </div>
    @livewire('mobile.main-bottom-nav')
</body>

</html>
