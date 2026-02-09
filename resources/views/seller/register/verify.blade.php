<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Daftar | Lapakita Seller</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>



<body class="bg-sky-50 ">
    @livewire('secondary.seller-navbar', [ 'showActions' => false, 'title' => 'Pendaftaran Akun Penjual'])
    <main class="lg:max-w-4xl lg:mx-auto ">
        <section class="w-full h-34 bg-sky-100 flex">
            <div class="w-40 flex items-center justify-center ps-6">
                <img src="{{ asset('gui/undraw_web-shopping_xd5k.svg') }}" class="h-20" alt="">
            </div>
            <div class="flex-1 flex flex-col justify-center pe-6">
                <h1 class="font-semibold">
                    Selamat Datang di Lapakita Seller Centre!
                </h1>
                <p class="text-slate-600 text-[8pt]">
                    Sebelum mulai berjualan silahkan lengkapi data diri Anda terlebih dahulu
                </p>
            </div>
        </section>
        <section class="px-5 py-4 bg-white ">
            <div class="flex justify-between mb-2">
                <div class="flex-1 ">
                    <h1 class="font-semibold">Proses Pendaftaran</h1>
                </div>
                <div class="text-sm pt-1">
                    <span class="font-semibold">3</span> dari 4
                </div>
            </div>
            <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden mb-2">
                <div class="h-full bg-sky-400 rounded-full" style="width: 75%"></div>
            </div>
        </section>
        <div class="w-9/10 mx-auto border-b border-slate-300 bg-white "></div>
        <section class="w-full p-6  bg-white flex items-center justify-center">
            <div class="w-full  bg-amber-100 rounded border border-amber-400/50 flex flex-col items-center   p-7">
                <img src="{{ asset('gui/undraw_exam-prep_nmly.svg') }}" alt="Ilust" class="w-40 mt-16 mb-10">
                <h3 class="font-semibold mb-2 text-yellow-900">
                    Akun Seller telah berhasil dibuat!
                </h3>
                <p class="text-center text-sm text-gray-500 mb-3">
                    Sebelum toko anda dapat muncul kami perlu melakukan verifikasi data dengan maksimal waktu 3x24
                    jam setelah formulir pendaftaran diselesaikan.
                </p>
                <p class="text-center text-sm text-sky-700">
                    Sampai verifikasi data selesai, Anda dapat tetap mengakses Seller Center untuk mulai
                    menambahkan produk.
                </p>
            </div>
        </section>
        <section class="w-full p-6  bg-white flex items-center justify-center">
            <button class="w-11/12 h-10 rounded-xl shadow bg-sky-500 font-semibold hidden lg:block text-white">
            Pergi ke Dashboard
            </button>
        </section>

    </main>

    <section class="fixed bottom-0 right-0 left-0 h-14 bg-white flex items-center justify-center z-50 lg:hidden">
        <button class="w-11/12 h-10 rounded-xl shadow bg-sky-500 font-semibold text-white">
            Pergi ke Dashboard
        </button>
    </section>

</body>

</html>
