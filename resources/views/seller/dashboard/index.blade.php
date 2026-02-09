<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lapakita Seller</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-sky-50 ">
    @livewire('secondary.seller-navbar', [ 'showActions' => true, 'title' => 'Toko Saya'])
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
                    Mulai perjalanan berjualan Anda dengan menambahkan produk pertama Anda.
                </p>
            </div>
        </section>
        <section class="w-full bg-white h-20 flex">
            <div class="flex items-center justify-center mr-4">
                <div class="w-10 h-10 bg-gray-500 rounded-full ms-4">

                </div>
            </div>
            <div class="flex-1 flex flex-col justify-center gap-0">
                <span class="font-bold"> Toko Candra Setiawan</span>
                <span class="text-[8pt] text-gray-600 -mt-0.5">lapakita.web.id/toko-candra</span>
            </div>
            <div class="flex items-center justify-center">
                <button class="bg-white text-xs font-semibold rounded py-1.5 px-2.5 me-4 border border-sky-300 text-sky-500">Kunjungi Toko</button>
            </div>
        </section>
    </main>


</body>

</html>



